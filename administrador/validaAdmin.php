<?php

	include('../conexion.php');

	$l = $_POST['login'];
	$p = $_POST['pass'];

	echo $l;
	echo "<br>";
	echo $p;
	echo "<br>";

	$sePudo=false;
	$consulta="SELECT * FROM administrador";
	$resultado=$conexion->query($consulta);	
	while($row=$resultado->fetch_assoc()) {
		$log=$row["login"];
		$pass=$row["password"];		
		if($l==$log && $p==$pass) {
			$sePudo=true;
			header("Location:inicio.php");
			break;
		}		
	}

	if(!$sePudo) {
		header("Location:index.php?errorLogin=si");
	}

?>	