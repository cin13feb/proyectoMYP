<html>
	<header>
		
	</header>
	
	<body>
		<?php	
			include ('../conexion.php');
		?>

		<p>Edita un producto</p>
		<form action='editarProducto2.php' method='POST'> 
		<table>
			<tr> 
			<td>
			<select name="codigo">
			<?php

			$consulta="SELECT * FROM prenda JOIN tipo ON prenda.id_tipo=tipo.id";
			$resultado=$conexion->query($consulta);	
			while($row=$resultado->fetch_assoc()) {
				$codigo=$row["codigoBarras"];
				$im=$row["imagen"];
				$tipo=$row["nombre"];
				echo $codigo;
				echo "<option value='$codigo'>$codigo - $im - $tipo </option>";
			}

			?>
			</select>

			</tr>	
			<tr>
				<td><input type="submit" value="Aceptar" />
				</td>
			</tr>		

		</table>
			



		</form>
	</body>
</html>