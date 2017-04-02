<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{   
    //
    public function index(){

    }

    //funcion para crear un usuario
    public function create(){
    	return view('usuario.create');
    }

    //funcion para guardar usuario
    public function store(Request $request){
        
        \App\User::create([
        	'name'=>$request['nombre'],
        	'email'=>$request['correo'],
        	'password'=>$request['pas']
        	]);

    	return "usuario registrado";
    }
}
