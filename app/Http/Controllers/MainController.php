<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

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
        return view('boleta');
    }
    
    public function boletaContra(){
        return view('boletaContra');
    }
    
    public function termina(){
        return view('termina');
    }

   
}
