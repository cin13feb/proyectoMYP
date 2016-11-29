<html>
<head>
	<title>Inicio</title>
	<meta charset='utf-8' />
	<style type="text/css">
	 body {
	 	background-color: #FFFFFF;
	 }

	 #im1 {
	 	margin-left: 270px;
	 }

	 #menu {
	 	background-color:#9FA8DA;
	 	border: 2px blue solid;

	 }

	 #fondo {
	 	margin-top: 10px;
	 }

	 #pie {
	 	font-size: 10px;
	 }
	</style>
	<script>
    function aviso() {
     	 alert("Articulo agregado al carrito");
  	}
  	</script>


</head>
<body>

	<table>
		<tr >
			<td><img src='imagenes/logo.jpg' width="80" height="60"></td>
			<td> 
				<a href='https:www.facebook.com'><img id='im1' src='imagenes/facebook.png' width="40" height="40">
				</a> 
				<a href='https:www.twitter.com'>
				<img id='im2' src='imagenes/twitter.png' width="40" height="40">
				</a>
			</td>
		 </tr>
	</table>

	<center>
	<table id='menu'>
		<tr>
			<td id='lista1'>Inicio | </td>
			<td id='lista2'>Registrate  | </td>
			<td id='lista3'>Inicia sesión  | </td>
			<td id='lista4'>Hombre | </td>
			<td id='lista5'><a href='ropaM.php' >Mujer  </a>|</td>
			<td id='lista6'>Ubicación </td>
		</tr>
	</table>
	<?php

	include ('conexion.php');

	$t = $_GET["articulo"];
	//echo "LE ESTAS PASANDO ".$t;

	$consulta="SELECT * FROM prenda WHERE id_tipo=$t";
	$resultado=$conexion->query($consulta);	
	while($row=$resultado->fetch_assoc()) {
		$im=$row["imagen"];
		$precio=$row["precio"];
		$cant_ch=$row["ch"];
		$cant_m=$row["m"];
		$cant_g=$row["g"];
		$cb=$row["codigoBarras"];
		echo "<img src=\"administrador/ropa/$im \" width='100' height='100' />";
		echo "<br>";
		echo "Precio $".$precio;
		echo "<br>";
		echo "Tallas CH ". $cant_ch;
		echo "<br>";
		echo "Tallas M ". $cant_m;
		echo "<br>";
		echo "Tallas G ". $cant_g;
		echo "<br>";
		if(isset($_COOKIE['nombreUsuario'])) {
           	echo "<a href='agregar.php?codigo=$cb' onclick='aviso()'>Agregar al carrito</a>";
          	echo "<br>";
		}
	}
	?>




	</center>

	<p id='pie'>Todos los derechos reservados </p>

</body>
</html>




