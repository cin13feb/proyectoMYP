<?php

	include('conexion.php');

	$l = $_POST['login'];
	$p = $_POST['password'];

	echo $l;
	echo "<br>";
	echo $p;
	echo "<br>";

	$sePudo=false;
	$consulta="SELECT * FROM usuario";
	$resultado=$conexion->query($consulta);	
	while($row=$resultado->fetch_assoc()) {
		$login=$row["login"];
		$pass=$row["contrasenia"];		
		if($l==$login && $p==$pass) {
			$sePudo=true;
			setcookie('nombreUsuario', $l, time()+3600);
			header("Location:index.php");
			break;
		}		
	}

	if(!$sePudo) {
		header("Location:index.php?errorLogin=si");
	}

?>	