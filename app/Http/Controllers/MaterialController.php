<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Material;
use App\Subject;
use App\Year;
use Validator;
use Illuminate\Validation\Rule;
use GrofGraf\LaravelPDFMerger\Facades\PDFMergerFacade;



class MaterialController extends Controller
{

    public function index(){

        $materials = Material::with(['subject', 'year'])->get();

        return $materials;

    }


    public function store(Request $request){
        
        $year = new Year;
        $subject = new Subject;

        $rules = [

            'file' => 'required|mimetypes:application/pdf|max:100000',
            'year' => [

                Rule::exists($year->getTable(), $year->getKeyName())
            ],
            'subject_id' => [

                Rule::exists($subject->getTable(), $subject->getKeyName())
            ]


        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){

            return response()->json([
              "status" => "error",
              "errors" => $validator->errors()
            ]);

        }

        
        $material = new Material;
        $material->subject_id = $request->subject_id;
        $material->subject_name = $subject->where('id', $request->subject_id)->first()->name;
        $material->year_id = $request->year;
        $material->year_name = $year->where('id', $request->year)->first()->name;
        if($request->hasFile('file')){

            $fileName = $request->file('file')->getClientOriginalName();

            $request->file('file')->move(public_path('data/' . $material->year_name . '/' . $material->subject_name) , $fileName);

            $material->file = $fileName;
        }
        
        $material->save();


        // return response()->json([

        //     'status' => 'success',
        //     'data'   => $material,
        //     'file' => public_path('math/') . $material['file']

        // ]);

        return redirect()->back();

    }




    // public function merge(){

    //     $materials = Material::get(['file']);
    //     // return $materials;

    //     $merger = \PDFMerger::init();
    //     foreach((array) $materials as $material){
    //     	// return $material;
    //     	foreach ((array) $material as $mat) {
    //     		// return $mat['file'];

    //     		if(isset($mat['file'])){
    //     		// return public_path('math/') . $material['file'];
    //         		$merger->addPathToPDF(public_path('math/') . $mat['file'], 'all');


    //     		}

    //     	}
    //    	}

    //     $merger->merge();

    //     $merger->setFileName('merger.pdf');


    //     // $merger->save(public_path('math/') . 'merger.pdf');

    //     $merger->download();

    //     // $headers = array(
    //     //       'Content-Type' => 'application/pdf',
    //     //     );

    //     // $path = public_path('math/') . 'merger.pdf';

    //     // return response()->download($path, 'merger.pdf', [
    //     //     'Content-Length: '. filesize($path)
    //     // ]);

    //     // return $path;

    //     // return response()->file($path);
    //     // return response()->download($path, 'merger.pdf', $headers);


    // }

    public function merge(Request $request){

        $subject_id = $request->subject_id;
        $subject_name = Subject::where('id', $subject_id)->first()->name;
        $year_name = Subject::where('id', $subject_id)->first()->year_name;
        
        $materials = Material::get(['file']);

        $merger = \PDFMerger::init();
        foreach((array) $materials as $material){
         // return $material;
             foreach ((array) $material as $mat) {
                 // return $mat['file'];

                 if(isset($mat['file'])){

                    $merger->addPathToPDF(public_path('data/') . $year_name . '/' . $subject_name . '/' . $mat['file'], 'all');


                 }

             }
         }

        $merger->merge();

        $merger->setFileName('merger.pdf');


        $merger->save(public_path('data/') . $year_name . '/' . $subject_name . '/' . 'merger.pdf');

        // $merger->download();
        $headers = array(
              'Content-Type' => 'application/pdf',
            );

        $path = public_path('data/') . $year_name . '/' . $subject_name . '/' . 'merger.pdf';


        return $path;

        // return response()->file($path);
        // return response()->download($path, 'merger.pdf', $headers);

    }




    public function destroy($id){

        $material = Material::find($id);

        $path = public_path('data/' . $material->year_name . '/' . $material->subject_name . '/' . $material->file);
        unlink($path);
        
        $material->delete();

        return ["message" => "Material Deleted Successfully"];

    }

}



        