<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class PruebaController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){

    	return "Hola desde el controlador PruebaController";
    }

    public function printNombre($nombre){

    	return "Hola desde controlador PruebaController , por cierto mi nombre es: ".$nombre;
    	
    }
}
