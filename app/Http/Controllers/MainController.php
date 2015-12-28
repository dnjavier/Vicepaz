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

   public function cuestionario(){
   		return view('cuestionario');
   }

   public function boleta(){
   		return view('boleta');
   }

   public function boleta(Request $request){
   		

   		$nombre = $request->nombre;
   		$primer_apellido = $request->apellido1;
   		$segundo_apellido = $request->apellido2;
   		$provincia = $request->provincia;
   		$canton = $request->canton;
   		$distrito = $request->distrito;
   		$telefono = $request->telefono;
   		$cedula = $request->cedula;
   		$nacionalidad = $request->nacionalidad;
   		$edad = $request->edad;
   		$ocupacion = = $request->provincia;

		//LAS VARIABLES DE LA CONTRAPARTE SON IGUALES PERO CON LAS LETRAS CP AL INICIO
   		$cpnombre = $request->cpnombre;
   		$cprimer_apellido = $request->cpapellido1;
   		$cpsegundo_apellido = $request->cpapellido2;
   		$cpprovincia = $request->cpprovincia;
   		$cpcanton = $request->cpcanton;
   		$cpdistrito = $request->cpdistrito;
   		$cptelefono = $request->cptelefono;
   		$cpcedula = $request->cpcedula;
   		$cpnacionalidad = $request->cpnacionalidad;
   		$cpedad = $request->cpedad;
   		$cpocupacion = = $request->cpprovincia;
   }
}
