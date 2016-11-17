<html>
	<head>
		<meta charset='utf-8' />
	</head>
	<body>
		<form action="registrando.php" method="post" enctype="application/x-www-form-urlencoded">
			<p>Registrate para poder comprar </p>
			<table>
				<tr>
					<td>Login</td>
					<td><input type="text" name="login" /></td>
				</tr>
				<tr>
					<td>Nombre</td>
					<td><input type="text" name="nombre" /></td>
				</tr>
				<tr>
					<td>Apellido paterno</td>
					<td><input type="text" name="ape_p" /></td>
				</tr>
				<tr>
					<td>Apellido materno</td>
					<td><input type="text" name="ape_m" /></td>
				</tr>
				<tr>
					<td>Correo</td>
					<td><input type="mail" name="correo" /></td>
				</tr>
				<tr>
					<td>Fecha de cumpleaños</td>
					<td><input type="date" name="cumple" /></td>
				</tr>
				<tr>
					<td>Contraseña</td>
					<td><input type="password" name="password" /></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Aceptar" /></td>
				</tr>
			</table>
		</form>	
	</body>
</html>