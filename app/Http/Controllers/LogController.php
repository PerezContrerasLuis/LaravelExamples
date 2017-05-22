<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use Redirect;
use App\Http\Requests\LoginRequest;

class LogController extends Controller
{
   
   public function store(LoginRequest $request){
   	if(Auth::attempt(['email'=>$request['email'],'password'=>$request['password']])){
   		return Redirect::to('usuario');
   	}
   	Session::flash('message-error','Datos incorrectos');
   	return Redirect::to('/');
   }

   //Funcion para deslogearse
   public function logout(){
   	Auth::logout();
   	return Redirect::to('/');
   }
}
