<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Year;
use App\Level;
use Validator;
use Illuminate\Validation\Rule;
use App\YearLevel;
use Illuminate\Support\Facades\File;


class YearsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $years = Year::with('subjects')->get();

        return $years;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $level = new Level;
        $rules = [

            'name' => 'required|string|unique:years',
            'display_name' => 'required|string',
            'level_id' => [

                Rule::exists($level->getTable(), $level->getKeyName())

            ]

        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){

            return response()->json([
              "status" => "error",
              "errors" => $validator->errors()
            ]);

        }

        $year = Year::create($request->except(['level_id']));
        YearLevel::create([

            'level_id' => $request->level_id,
            'level_name' => $level->where('id', $request->level_id)->first()->name,
            'year_id' => $year->id,
            'year_name' => $year->name

        ]);

        \File::makeDirectory(public_path('/data/' . $year->name), 0775, true);

        return [
            'status'=> 'success',
            'message' => 'Year Added successfully'
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
        $year = Year::find($id);

        return $year;

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
        $year = Year::find($id);

        $rules = [

            'name' => "required|string|unique:years,name,$id",
            'display_name' => 'required|string'

        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){

            return response()->json([
              "status" => "error",
              "errors" => $validator->errors()
            ]);

        }

        $oldName = $year->name;

        $year->update($request->only(['name', 'display_name']));

        File::move(public_path('/data/' . $oldName), public_path('/data/' . $year->name));



        return response()->json([
            "status" => "success",
            "message" => "Year Updated Successfully"
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
        $year = Year::find($id);

        File::deleteDirectory(public_path('/data/' . $year->name));

        $year->delete();

        return ["message" => "Year Deleted Successfully"];
    }

    public function getYear(Request $request){

        $id = $request->id;

        $years = Year::with('subjects')->find($id);

        return $years;

    }
}
