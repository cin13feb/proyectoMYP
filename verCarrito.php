<?php

	session_start();
	$carrito=$_SESSION['carrito'];
	if(isset($carrito)) {
		echo "Articulos en el carrito";
		echo "<br>";
		$i=1;
		echo "<form action='comprarRopa.php' method='post' />";
		foreach($carrito as $key => $value) {
			$imagen=dameImagen($key);
			echo "<img src='administrador/ropa/$imagen' width='100' height='150' />";
			echo "Cantidad";
			echo "<select name='elemento_$i'>";
				while($value>=0) {
					echo "<option value='$value'>$value</option>";
					$value--;
				}
			echo "</select>";
			echo "<br>";
			$i++;
		}
		$i-=1;
		echo "<input type='hidden' name='oculto' value='$i' />";
		echo "<input type='submit' value='Pagar' />";

		echo "</form>";
	} else {
		echo "No hay articulos que mostrar";
	}

	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<a href='salir2.php'>Cerrar sesion</a>";
	echo "<br>";
	echo "<a href='index.php'>Seguir comprando</a>";
	echo "<br>";

function dameImagen($key) {
	include("conexion.php");
	$nombre="";
	$consulta="SELECT * FROM prenda WHERE codigoBarras='$key'";
	$resultado=$conexion->query($consulta);
	while($row=$resultado->fetch_assoc()) {
		$nombre=$row["imagen"];
	}
	return $nombre;
}

?>