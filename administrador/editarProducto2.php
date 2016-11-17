<?php

	include('../conexion.php');

	$c=$_POST["codigo"];
	echo $c;

	$consulta="SELECT * FROM prenda WHERE codigoBarras='$c'";
	$resultado=$conexion->query($consulta);	
	while($row=$resultado->fetch_assoc()) {
		$im=$row["imagen"];
		$precio=$row["precio"];
		$cant_ch=$row["ch"];
		$cant_m=$row["m"];
		$cant_g=$row["g"];

	}
?>
<html>
<head>
	<title></title>
</head>
<body>
	<form action='editandoProducto.php' method='post' enctype='multipart/form-data'>
		<table>
			<tr>	
				<td>Imagen</td>
				<td>
					<?php
						echo "<img src='ropa/$im' width='50' height='100' />";
					?>
				</td>
			</tr>
			<tr>
				<td>
					Precio $
				</td>
				<td>
					<input type="text" name="precio"  value=<?php echo $precio; ?>>
				</td>
			</tr>
			<tr>
				<td>CH </td>
				<td>
				<input type="text" name="ch" value=<?php echo $cant_ch; ?>>
				</td>
			</tr>
			<tr>
				<td>M </td>
				<td>
				<input type="text" name="m" value=<?php echo $cant_m; ?>>
				</td>
			</tr>
			<tr>
				<td>G </td>
				<td>
				<input type="text" name="g" value=<?php echo $cant_g; ?>>
				</td>
			</tr>
			<tr>
				<td>Imagen nueva </td>
				<td>
					<input type="file" name="imagen">
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" value="Aceptar">
				</td>
			</tr>
			<input type="hidden" name="codigoB" value=<?php echo $c; ?>>


		</table>

	</form>


</body>
</html>



