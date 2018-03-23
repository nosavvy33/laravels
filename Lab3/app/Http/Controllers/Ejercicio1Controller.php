<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejercicio1Controller extends Controller
{
/*
<!--
1. Crear una aplicación en Laravel para la venta de entrada de cine que solicite la edad y la condición de estudiante. Si la persona es menor de 12 años o es estudiante pagará 3 soles, de lo contrario pagará 10 soles. La aplicación deberá mostrar cuanto debe pagar la persona.
-->
*/
	public function index(){
		return view('eje1.index');
	}
    
	public function vender(Request $request){
		$edad = $request->input("edad");
		$cond = $request->input("condicion");
		$precio = 0 ;
		if($edad > 0 && $edad < 12 || $cond == "SI"){
			$precio = 3;
		}else{
			$precio = 10;
		}
		$datos = array('precio'=>$precio,'edad'=>$edad,'cond'=>$cond);
		return view('eje1.venta',$datos);
	}

}
