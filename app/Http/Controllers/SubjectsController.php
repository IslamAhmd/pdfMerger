<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use Validator;
use Illuminate\Validation\Rule;
use App\Year;
use Illuminate\Support\Facades\File;

class SubjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects = Subject::get();


        return $subjects;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $year = new Year;
        $rules = [

            'name' => 'required|string',
            'display_name' => 'required|string',
            'year_id' => [

                Rule::exists($year->getTable(), $year->getKeyName())

            ]

        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){

            return response()->json([
              "status" => "error",
              "errors" => $validator->errors()
            ]);

        }

        $subject = Subject::create($request->all());
        $subject->year_name = $year->where('id', $subject->year_id)->first()->name;
        $subject->save();

        \File::makeDirectory(public_path('/data/' . $subject->year_name . '/' . $subject->name), 0775, true);


        return [
            'status'=> 'success',
            'message' => 'Subject Added successfully'
                ];

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subject = Subject::find($id);

        return $subject;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
        $subject = Subject::find($id);

        $rules = [

            'name' => "required|string",
            'display_name' => 'required|string'

        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){

            return response()->json([
              "status" => "error",
              "errors" => $validator->errors()
            ]);

        }

        $oldName = $subject->name;

        $subject->update($request->only(['name', 'display_name']));


        \File::move(public_path('/data/' . $subject->year_name . '/' . $oldName), public_path('/data/' . $subject->year_name . '/' . $subject->name));



        return response()->json([
            "status" => "success",
            "message" => "subject Updated Successfully"
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subject = Subject::find($id);

        File::deleteDirectory(public_path('/data/' . $subject->year_name . '/' . $subject->name));

        
        $subject->delete();

        return [
            'status' => 'success',
            'message' => 'Subject Deleted Successfully'
        ];
    }
}
