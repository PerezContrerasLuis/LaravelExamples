<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{   
    //funcion que lista a los usuarios
    public function index(){
    	$users = \App\User::All();
    	return view('usuario.index',compact('users'));
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
