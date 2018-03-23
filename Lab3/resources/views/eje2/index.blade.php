<!DOCTYPE html>
<html>
<head>
	<title>EJERCICIO 2</title>
</head>
<body>
<h1>VENTA DE GASESOSAS - 1</h1>
<hr>
<form method="POST" action="/ej2/vender" id="formu">
{{ csrf_field()}}
<table>
	<thead>
		<tr>
			<td>Gaseosa</td>
			<td>Precio (en dólares)</td>
			<td>Stock</td>
			<td>Cantidad a comprar</td>
			<td>Subtotal</td>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>INCAKOLA</td>
			<td>3</td>
			<td>90</td>
			<td><input type="number" name="cantIK" id="cantIK" value="0"></td>
			<td><p id="subIK">0</p></td>
		</tr>
				<tr>
			<td>COCACOLA</td>
			<td>3</td>
			<td>80</td>
			<td><input type="number" name="cantCC" id="cantCC" value="0"></td>
			<td><p id="subCC">0</p></td>
		</tr>
				<tr>
			<td>GUARANÁ</td>
			<td>1.5</td>
			<td>86</td>
			<td><input type="number" name="cantG" id="cantG" value="0"></td>
			<td><p id="subG">0</p></td>

		</tr>
				<tr>
			<td>PEPSI</td>
			<td>1.8</td>
			<td>65</td>
			<td><input type="number" name="cantP" id="cantP" value="0"></td>
			<td><p id="subP">0</p></td>

		</tr>
				<tr>
			<td>SPRITE</td>
			<td>2</td>
			<td>45</td>
			<td><input type="number" name="cantS" id="cantS" value="0"></td>
			<td><p id="subS">0</p></td>

		</tr>
	</tbody>
</table>
Paga (cantidad) : <input type="number" value="1" name="pago" id="pago"><br>
<input type="submit" value="COMPRAR">
<input type="hidden" name="vsubtotal" id="vsubtotal">
</form>
<script type="text/javascript">
	//CONSTANTES
const ik = 3 ;
const cc = 3;
const g = 1.5;
const p = 1.8;
const s = 2;
//INPUTS
const cik = document.getElementById("cantIK");
const ccc = document.getElementById("cantCC");
const cg = document.getElementById("cantG");
const cp = document.getElementById("cantP");
const cs = document.getElementById("cantS");
const pago = document.getElementById("pago");
const ssub = document.getElementById("vsubtotal");
//SUBS
const sik = document.getElementById("subIK");
const scc = document.getElementById("subCC");
const sg = document.getElementById("subG");
const sp = document.getElementById("subP");
const ss = document.getElementById("subS");

var subtotal = 0;
var inca = 0;
var coca = 0;
var gua = 0;
var pepsi = 0;
var sprite = 0;
formu.addEventListener("submit",function(){
	subtotal = inca + coca + gua + pepsi + sprite;
	ssub.value = subtotal;
	if(pago.value < subtotal){
		alert("INSUFIENTE DINERO DE PAGO");
	}
});

pago.addEventListener("change",function(){
	this.value = (this.value <= 0)? 1: this.value;
});

cik.addEventListener("change",function(){
	this.value = (this.value < 0 || this.value > 90)? 0: this.value;
	sik.innerHTML = getSubtotal("inca",this.value);
	inca = getSubtotal("inca",this.value);
});

ccc.addEventListener("change",function(){
	this.value = (this.value < 0 || this.value > 80)? 0: this.value;
	scc.innerHTML = getSubtotal("coca",this.value);
	coca =getSubtotal("coca",this.value);
});

cg.addEventListener("change",function(){
	this.value = (this.value < 0 || this.value > 86)? 0: this.value;
	sg.innerHTML = getSubtotal("guarana",this.value);
	gua = getSubtotal("guarana",this.value);
});

cp.addEventListener("change",function(){
	this.value = (this.value < 0 || this.value > 65)? 0: this.value;
	sp.innerHTML = getSubtotal("pepsi",this.value);
	pepsi = getSubtotal("pepsi",this.value);
});

cs.addEventListener("change",function(){
	this.value = (this.value < 0 || this.value > 45)? 0: this.value;
	ss.innerHTML = getSubtotal("sprite",this.value);
	sprite = getSubtotal("sprite",this.value);
});

function getSubtotal(gaseosa, cantidad){
	switch(gaseosa){
		case "inca":
		return cantidad * ik;
		break;
		case "coca":
		return cantidad * cc;
		break;
		case "pepsi":
		return cantidad * g;
		break;
		case "guarana":
		return cantidad * p;
		break;
		case "sprite":
		return cantidad * s;
		break;
	}
}
</script>
</body>
</html>