<html>
<head>
	<title></title>
	<meta charset='utf-8' />
</head>
<body>
<form action='agregandoProducto.php' method='POST' enctype='multipart/form-data'>
	<table>
		<tr>
			<td>Código de barras</td>
			<td><input type='text' name='cb' /></td>
		</tr>
		<tr>
			<td>precio $</td>
			<td><input type='text' name='precio' /></td>
		</tr>
		<tr>
			<td>Fotografía</td>
			<td><input type='file' name='imagen' /></td>
		</tr>
		<tr>
		<td>Tipo</td>
		<td>
		<select name="tipo">
		<?php
		include('../conexion.php');

		$consulta="SELECT * FROM tipo";
		$resultado=$conexion->query($consulta);	
		while($row=$resultado->fetch_assoc()) {
			$id=$row["id"];
			$n=$row["nombre"];
			echo "<option value='$id'>$n </option>";	
		}
	
		?>
		</select>
		</td>
		<tr>
			<td>No. CH </td>
			<td><input type="text" name="ch"/>
		</tr>
		<tr>
			<td>No. M </td>
			<td><input type="text" name="m"/>
		</tr>
		<tr>
			<td>No. G </td>
			<td><input type="text" name="g"/>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Aceptar"/>
		</tr>

	</table>
</form>
<body>
</body>
</html>

