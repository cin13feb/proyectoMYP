<html>
<head>
	<title></title>
	<meta charset='utf-8' />
</head>
<body>
	
<?php
	
	include('../conexion.php');

	header('Content-type:application/vnd.ms-excel');
	header('Content-Disposition:attachment; filename=inventario.xls');

	header("Pragma:no-cache");

	$archivo="<table>";
	$archivo.="<tr>";
	$archivo.="<td>Codigo de barras</td>";
	$archivo.="<td>Tipo</td>";
	$archivo.="<td>Precio</td>";
	$archivo.="<td>Tallas ch.</td>";
	$archivo.="<td>Tallas m.</td>";
	$archivo.="<td>Tallas g.</td>";
	$archivo.="<td>COMPRAR </td>";
	$archivo.="</tr>";


	$consulta="SELECT * FROM prenda JOIN tipo ON prenda.id_tipo=tipo.id";
	$resultado=$conexion->query($consulta);	
	while($row=$resultado->fetch_assoc()) {
		$archivo.="<tr>";
		$codigo=$row["codigoBarras"];
		$tipo=$row["nombre"];
		$precio=$row["precio"];
		$ch=$row["ch"];
		$m=$row["m"];
		$g=$row["g"];
		$total=0;
		$total=$ch+$m+$g;
		$archivo.="<td>$codigo</td>";
		$archivo.="<td>$tipo</td>";
		$archivo.="<td>$precio</td>";
		$archivo.="<td>$ch</td>";
		$archivo.="<td>$m</td>";
		$archivo.="<td>$g</td>";
		if($total<20) {
			$archivo.="<td> SI </td>";
		}
		$archivo.="</tr>";
	}

	$archivo.="</table>";
	echo $archivo;

?>		
</body>
</html>




