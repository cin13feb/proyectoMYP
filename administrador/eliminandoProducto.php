<?php

	include('../conexion.php');
	
	$codigo = $_POST["codigoB"];

	ECHO $codigo;

	$consulta="DELETE FROM prenda WHERE codigoBarras='$codigo'";
	if($conexion->query($consulta)==true) {
		echo "Producto ELIMINADO exitosamente";
	} else {
		echo "No se pudo eliminar el producto";
	}





?>