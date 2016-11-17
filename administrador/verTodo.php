
<html>
<head>
	<title></title>
</head>
<body>
<?php


	include('../conexion.php');
	
	echo "<table border='2'>";
	echo "<tr>";
	echo "<td>Imagen del artículo </td>";
	echo "<td>Codigo de barras</td>";
	echo "<td>Precio</td>";
	echo "<td>Tallas ch.</td>";
	echo "<td>Tallas m.</td>";
	echo "<td>Tallas g.</td>";
	echo "</tr>";

	$consulta="SELECT * FROM prenda JOIN tipo ON prenda.id_tipo=tipo.id";
	$resultado=$conexion->query($consulta);	
	while($row=$resultado->fetch_assoc()) {
		echo "<tr>";
		$codigo=$row["codigoBarras"];
		$precio=$row["precio"];
		$ch=$row["ch"];
		$m=$row["m"];
		$g=$row["g"];
		$imagen=$row["imagen"];
		echo "<td><img src='ropa/$imagen' width='50' heigth='100'/></td>";
		echo "<td>$codigo</td>";
		echo "<td>$precio</td>";
		echo "<td>$ch</td>";
		echo "<td>$m</td>";
		echo "<td>$g</td>";
		echo "</tr>";
	}

	echo "</table>";

?>

</body>
</html>



