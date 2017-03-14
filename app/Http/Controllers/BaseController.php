<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests;

class BaseController extends Controller
{
    public function getIndex (){
        //dd($id);
        $products = Product::where ('showhide', 'show') -> orderBy ('id', 'DESC') ->paginate(10);
        
        return view('index')->with('products', $products); 
    }
    public function getStatic ($id){
        //dd($id);
        return view('static')->with('id',$id); 
    }
    
}
