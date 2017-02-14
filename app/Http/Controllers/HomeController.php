<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HTTP\Requests;
use Auth;
use App\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
	public function postIndex(Requests\ProductRequest $r){
		
		//$r['user_id'] = Auth::user()->id;
		$f = \App::make('\App\Libs\Imag')->url($_FILES['picture1']['tmp_name'],'/media/fotos/');
		$r['picture']=$f;
		$r['picture_small']='s_'.$f;
		$r['cat_id'] = 0;
		//dd($r->all());
		Product::create ($r->all());
		return redirect ('home');
		
		
	}
}
