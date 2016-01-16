<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Provincia;

class MainController extends Controller
{
    public function index(){
        return view('casa');
    }
    
    public function preguntas(){
   		return view('preguntas');
    }
    
    public function mapa(){
   		return view('mapa');
    }
    
    public function clasificacion(){
   		return view('clasificacion');
    }

    public function cuestionario(){
        return view('cuestionario');
    }

    public function boleta(){
        $provincias = Provincia::all();
        return view('boleta')->with('provincias',$provincias);
    }
        
    public function termina(){
        return view('termina');
    }
    
    //Muestra la informacion de los mediadores en admin
    public function mediadores(){ 
      	return view('dashboard.mediadores');
    }

   
}
