<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejercicio2Controller extends Controller
{
	

    public function index(){
    	return view('eje2.index');
    }

	public function vender(Request $request){
		$ik = 90;
		$cc = 80;
		$g = 86;
		$p = 65;
		$s = 45;
		$inca = $ik - $request->input("cantIK");
		$coca = $cc - $request->input("cantCC");
		$pepsi = $p - $request->input("cantP");
		$guara = $g - $request->input("cantG");
		$sprite = $s -$request->input("cantS");
		$pago = $request->input("pago");
		$total = $request->input("vsubtotal");
		if($pago < $total){
			echo "PAGO INSUFICIENTE<br><a href='/ej2/index'>Volver a principal</a>";
		}else{
			$vuelto = $pago - $total;
			$datos = array('total'=>$total, 'pago'=>$pago,'vuelto'=>$vuelto,'inca'=>$inca,'coca'=>$coca,'pepsi'=>$pepsi,'guarana'=>$guara,'sprite'=>$sprite);
		return view('eje2.venta',$datos);
		}
	}
}
