<!DOCTYPE html>
<html>
<head>
	<title>EJERCICIO 2</title>
</head>
<body>
	<h1>Total por su compra</h1>
<hr>
Importe de compra : {{$total}}<br>
Pago con : {{$pago}}<br>
Vuelto de : {{$vuelto}}<br>

<h2>Restante en Stock</h2>
<table>
	<thead>
		<tr>
			<td>Gaseosa</td>
			<td>Precio (en dólares)</td>
			<td>Stock</td>
			
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>INCAKOLA</td>
			<td>3</td>
			<td>{{$inca}}</td>
		</tr>
				<tr>
			<td>COCACOLA</td>
			<td>3</td>
			<td>{{$coca}}</td>

		</tr>
				<tr>
			<td>GUARANÁ</td>
			<td>1.5</td>
			<td>{{$guarana}}</td>


		</tr>
				<tr>
			<td>PEPSI</td>
			<td>1.8</td>
			<td>{{$pepsi}}</td>


		</tr>
				<tr>
			<td>SPRITE</td>
			<td>2</td>
			<td>{{$sprite}}</td>


		</tr>
	</tbody>
</table>

<a href="/ej2/index">Volver a principal</a>
</body>
</html>