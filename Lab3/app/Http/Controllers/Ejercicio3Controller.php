<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejercicio3Controller extends Controller
{
    public function index(){
    	return view('eje3.index');
    }

    public function vender(Request $request){
    	$simples = 70;
    	$dobles = 80;
    	$matris = 120;
    	$simplep = 50;
    	$doblep = 60;
    	$matrip = 100;
    	$tipo = $request->input('tipo');
    	$dias = $request->input('dias');
    	$personas = $request->input('personas');
    	$precio = 0;
    	if($tipo == "SIMPLE"){
    		$precio = ($dias > 5)? $simplep * $dias: $simples * $dias;
    	}
		if($tipo == "DOBLE"){
    		$precio = ($dias > 5)? $doblep * $dias: $dobles * $dias;
    	}
		if($tipo == "MATRIMONIAL"){
    		$precio = ($dias > 5)? $matrip * $dias: $matris * $dias;
    	}
    	$datos = array('tipo' => $tipo , 'precio' => $precio, 'personas' => $personas, 'dias' => $dias);
    	return view('eje3.venta',$datos);
    }
}
