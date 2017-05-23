<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserupdateRequest;
use App\User;
use Session;
use Redirect;

class UsuarioController extends Controller
{   
     public function __construct(){
      $this->middleware('auth');
      $this->middleware('admin',['only'=>['create','edit']]);
   }

    //funcion que lista a los usuarios
    public function index(){
    	$users = User::paginate(5);
    	return view('usuario.index',compact('users'));
    }

    //funcion para crear un usuario
    public function create(){
    	return view('usuario.create');
    }

    //funcion para guardar usuario
    public function store(UserCreateRequest $request){
        
        User::create($request->all());

    	return redirect('/usuario')->with('message','Usuario registrado con exito');
    }

    //funcion para cargar vista editar usuario
    public function edit($id){
    	$user = User::find($id);
    	return view('usuario.edit',['user'=>$user]);
    }

    //function para actualizar usuario
    public function update($id,UserupdateRequest $request){
    	$user = User::find($id);
    	$user->fill($request->all());
    	$user->save();
        Session::flash('message','usuario actualizado con exito');
    	return Redirect::to('/usuario');
    }

    //funcion para eliminar un usuario
    public function destroy($id){
        $user= User::find($id);
        $user->delete();
        Session::flash('message','usuario eliminado con exito');
        return Redirect::to('/usuario');
    }
}
