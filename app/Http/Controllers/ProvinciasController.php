<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Canton;
use App\Distrito;

class ProvinciasController extends Controller
{
   function findcanton($id){
   		$cantontes = Canton::where('provincia_id',$id)->get();
   		return response()->json($cantontes);
   }

   function finddistrito($idProvincia, $idCanton){
   		$distritos = Distrito::where('provincia_id',$idProvincia)->where('canton_id',$idCanton)->get();
   		return response()->json($distritos);
   }
}
