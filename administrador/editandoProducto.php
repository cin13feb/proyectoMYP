<?php

	include('../conexion.php');

	print_r($_POST);

	$precioNuevo=$_POST["precio"];
	$ch_nueva=$_POST["ch"];
	$m_nueva=$_POST["m"];
	$g_nueva=$_POST["g"];
	$codigo=$_POST["codigoB"];


	/*echo $precioNuevo;
	echo "<br>";
	echo $ch_nueva;
	echo "<br>";
	echo $m_nueva;
	echo "<br>";
	echo $g_nueva;
	echo "<br>";
	echo $codigo;*/


	$rutaEnServidor='ropa';
	$rutaTemporal=$_FILES['imagen']['tmp_name'];
	$nombreImagen=$_FILES['imagen']['name'];
	echo $nombreImagen;

	if($nombreImagen=="") {
		echo "Mimsa imagen";
		$consulta="UPDATE prenda SET precio='$precioNuevo', ch='$ch_nueva', m='$m_nueva', g='$g_nueva' WHERE codigoBarras='$codigo'";
		if($conexion->query($consulta)==true) {
			echo "Producto editado exitosamente";
		} else {
			echo "No se pudo editar el producto";
		}
	} else {
		$rutaDestino=$rutaEnServidor.'/'.$nombreImagen;
		move_uploaded_file($rutaTemporal, $rutaDestino);

		$consulta="UPDATE prenda SET precio='$precioNuevo', ch='$ch_nueva', m='$m_nueva', g='$g_nueva' , imagen='$nombreImagen' WHERE codigoBarras='$codigo'";
		if($conexion->query($consulta)==true) {
			echo "Producto editado exitosamente";
		} else {
			echo "No se pudo aeditar el producto";
		}

	}

	





?>