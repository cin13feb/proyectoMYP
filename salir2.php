<?php

	setcookie('nombreUsuario', '', time()-3600);
	header("Location:index.php");

?>