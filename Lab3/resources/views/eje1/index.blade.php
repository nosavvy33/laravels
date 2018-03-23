
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>VENTA DE ENTRADAS</h1>
<hr>
<form method="POST" action="/ej1/vender">
	{{ csrf_field()}}
	EDAD : <input type="number" id="edad" name="edad" value="1"><br>
	¿ESTUDIANTE? : <select name="condicion"><option>SI</option><option>NO</option></select>
	<input type="submit" value="COMPRAR"><br>
</form>
<script type="text/javascript">
	var edad = document.getElementById("edad");
	edad.addEventListener("change",function(){
		this.value = (this.value <= 0 )? 1: this.value;
	});
</script>
</body>
</html>