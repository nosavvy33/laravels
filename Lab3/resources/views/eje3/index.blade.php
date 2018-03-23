Habitación
Tiempo
Costo x día
Simple
1 a 5
$70
Doble
1 a 5
$80
Matrimonial
1 a 5
$120
Simple
6 > días
$50
Doble
6 > días
$60
Matrimonial
6 > días
$100
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>EJERCICIO 3</title>
</head>
<body>
<table>
	<thead>
		<tr>
			<td>Habitación</td>
			<td>Tiempo</td>
			<td>Costo x día</td>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Simple</td>
			<td>1 a 5</td>
			<td>$70</td>
		</tr>
		<tr>
			<td>Doble</td>
			<td>1 a 5</td>
			<td>$80</td>
		</tr>
		<tr>
			<td>Matrimonial</td>
			<td>1 a 5</td>
			<td>$120</td>
		</tr>
		<tr>
			<td>Simple</td>
			<td>6 > días</td>
			<td>$50</td>
		</tr>
		<tr>
			<td>Doble</td>
			<td>6 > días</td>
			<td>$60</td>
		</tr>
		<tr>
			<td>Matrimonial</td>
			<td>6 > días</td>
			<td>$100</td>
		</tr>
	</tbody>
</table>
<form method="POST" action="/ej3/vender">
	{{csrf_field()}}
	Reservar una habitación <select id="tipo" name="tipo"><option>SIMPLE</option><option>DOBLE</option><option>MATRIMONIAL</option></select> por <input type="number" name="dias" id="dias" value=1> días para <input type="number" name="personas" id="personas" value=1> personas.<br>
	<input type="submit" value="Reservar Ya!">
</form>
<script type="text/javascript">
	const persona = document.getElementById("personas");
	const dias = document.getElementById("dias");
	const tipo = document.getElementById('tipo');

	persona.addEventListener("change",function(){
		switch(checkPersonas()){
			case "SIMPLE":
			this.value = (this.value != 1)?1 : this.value;
			break;
			case "DOBLE":
			this.value = (this.value <= 0 || this.value >2)?2 : this.value;
			break;
			case "MATRIMONIAL":
			this.value = (this.value < 1 || this.value > 4)? 1 :this.value;
			}
	});
	dias.addEventListener("change",function(){
		this.value = (this.value <= 0)?1 :this.value;
	});

	function checkPersonas(){
		return tipo.options[tipo.selectedIndex].text;
	}
</script>
</body>
</html>