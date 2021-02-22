<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function name(){
    	return view('name', ['name' => 'Miras']);
    }//
    public function surname($surname){
    	return view('surname')->with('surname', $surname);
    }/
    public function date($date){
    	return view('date',compact('date'))
    }/
}
