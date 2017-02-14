<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BaseController extends Controller
{
    public function getIndex (){
        //dd($id);
        return view('index'); 
    }
    public function getStatic ($id){
        //dd($id);
        return view('static')->with('id',$id); 
    }
    
}
