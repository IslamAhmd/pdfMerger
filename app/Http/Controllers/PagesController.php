<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PagesController extends Controller
{
    public function index(){

    	return view('index');
    }

    public function contact(){
    	return view('contact');
    }

    // public function cart(Request $request){
    // 	return ["AxxA", "AxxA", "AxxA"];
    // }
}