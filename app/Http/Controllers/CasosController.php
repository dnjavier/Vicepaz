<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Boleta;

class CasosController extends Controller
{
    public function crearboleta(Request $request){
   		$boletaA = new Boleta;
   		$boletaCP = new Boleta;

   		$boletaA->nombre = $request->nombre;
   		$boletaA->apellido1 = $request->apellido1;
   		$boletaA->apellido2 = $request->apellido2;
   		$boletaA->provincia = $request->provincia;
   		$boletaA->canton = $request->canton;
   		$boletaA->distrito = $request->distrito;
   		$boletaA->telefono = $request->telefono;
   		$boletaA->cedula = $request->cedula;
   		$boletaA->nacionalidad = $request->nacionalidad;
   		$boletaA->edad = $request->edad;
   		$boletaA->ocupacion = $request->ocupacion;
        $boletaA->observaciones = $request->observaciones;

		//LAS VARIABLES DE LA CONTRAPARTE SON IGUALES PERO CON LAS LETRAS CP AL INICIO
   		$boletaCP->nombre = $request->cpnombre;
   		$boletaCP->apellido1 = $request->cpapellido1;
   		$boletaCP->apellido2 = $request->cpapellido2;
   		$boletaCP->provincia = $request->cpprovincia;
   		$boletaCP->canton = $request->cpcanton;
   		$boletaCP->distrito = $request->cpdistrito;
   		$boletaCP->telefono = $request->cptelefono;
   		$boletaCP->cedula = $request->cpcedula;
   		$boletaCP->nacionalidad = $request->cpnacionalidad;
   		$boletaCP->edad = $request->cpedad;
   		$boletaCP->ocupacion = $request->cpocupacion;
        $boletaCP->observaciones = $request->cpobservaciones;

        $boletaA::save();
        $boletaCP::save();

   }



   public function verboletas(){
   		$boletas = Boleta::find(1);
   		echo $boletas;
   }
}
