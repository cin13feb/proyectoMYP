<?php

	include('../conexion.php');

	$rutaEnServidor='ropa';
	$rutaTemporal=$_FILES['imagen']['tmp_name'];
	$nombreImagen=$_FILES['imagen']['name'];
	$rutaDestino=$rutaEnServidor.'/'.$nombreImagen;
	move_uploaded_file($rutaTemporal, $rutaDestino);

	/*echo $rutaTemporal;
	echo "<br>";
	echo $nombreImagen;
	echo "<br>";
	echo $rutaDestino;
	echo "<br>";
	echo $rutaEnServidor;*/

	//print_r($_POST);
	$codigo=$_POST['cb'];
	$precio=$_POST['precio'];
	$ch=$_POST['ch'];
	$m=$_POST['m'];
	$g=$_POST['g'];
	$t=$_POST['tipo'];

	$consulta="INSERT INTO prenda(codigoBarras, precio, imagen, ch, m, g, id_tipo) VALUES ('$codigo', '$precio', '$nombreImagen', '$ch', '$m', '$g', '$t')";
	if($conexion->query($consulta)==true) {
		echo "Producto agregado exitosamente";
	} else {
		echo "No se pudo agregar el producto";
	}



?>