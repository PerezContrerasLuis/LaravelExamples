<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;

class GeneroController extends Controller
{
    //

    public function index(){
    	return view('genero.index');
    }

    public function create(){
    	return view('genero.create');
    }

    public function store(Request $request){

    	if($request->ajax()){
    		Genre::create($request->all());
    		return response()->json([
    			 "mensaje"=>'creado'
    			]);
    	}
    }

    public function listing(){
    	$genres = Genre::all();
    	return response()->json(
    		$genres->toArray()
    		); 
		
    }
}
