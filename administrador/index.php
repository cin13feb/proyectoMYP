<html>
	<head>
		<meta charset='utf-8' />
		<style type="text/css">
			.asterisco {
				color:yellow;
			}

		</style>
	</head>
<body>
	<p>Quieres iniciar sesión como administrador </p>
	<form method='post' action='validaAdmin.php' >
	<table>
		<tr> 
			<td>Login</td>
			<td><input type='text' name='login' required /><label class='asterisco'>* </label></td>
		</tr>
		<tr> 
			<td>Contraseña</td>
			<td><input type='password' name='pass' required /><label class='asterisco'>* </label> </td>
		</tr>
		<tr> 
			<td></td>
			<td><input type='submit' value='Aceptar' />
		</tr>
	</table>
	</form>
	<?php
		if($_GET["errorLogin"]) {
			echo "<p>Revisa tu login y contraseña </p>";
			echo "<p>".$_GET['errorLogin']."</p>"; 
		}
	?>
</body>
</html>


