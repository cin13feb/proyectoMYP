<?php

	//Archivo que añade elementos al carrito
	session_start();
	$_SESSION['carrito'];
	$item=$_GET["codigo"];
	$carrito=$_SESSION['carrito'];
	if(!isset($carrito)) {
		$carrito[$item]=1;
	} else {
		foreach($carrito as $k => $v) {
			if($item==$k) {
				$carrito[$k]+=1;
				$encontrado=1;
			}
		}
		if(!$encontrado) {
			$carrito[$item]=1;
		}
	}

	$_SESSION['carrito']=$carrito;

	header("Location:index.php");








?>