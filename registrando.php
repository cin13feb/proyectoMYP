<?php

	
	include("conexion.php");
	require 'class.phpmailer.php'; 
	require 'class.smtp.php'; 

	//print_r($_POST);

	$l=$_POST['login'];
	$nom=$_POST['nombre'];
	$a_p=$_POST['ape_p'];
	$a_m=$_POST['ape_m'];
	$correo=$_POST['correo'];
	$cumpleanios=$_POST['cumple'];
	$pass=$_POST['password'];

	$consulta="INSERT INTO usuario(login, contrasenia, nombre, apellido_paterno, apellido_materno, correo, cumple) VALUES ('$l', '$pass', '$nom', '$a_p', '$a_m', '$correo', '$cumpleanios')";
	if($conexion->query($consulta)==true) {
		echo "Usario registrado exitosamente";

		$mail = new PHPMailer();     
		$mail->IsSMTP(); 
		$mail->CharSet = 'UTF-8'; 
		$mail->SMTPAuth = true; 
		$mail->SMTPSecure = "ssl"; 
		$mail->Host = "smtp.gmail.com"; //servidor smtp 
		$mail->Port = 465; //puerto smtp de gmail 
		$mail->Username = 'curso.myp.2017.1@gmail.com'; 
		$mail->Password = 'cursomyp';   
		$mail->FromName = 'tienda de ropa'; 
		$mail->From = 'curso.myp.2017.1@gmail.com';//email de remitente desde donde se envía el correo.   
		$mail->AddAddress($correo);//destinatario que va a recibir el correo  
		$mail->Subject = 'Bienvenido ';    
        $cadena="Bienvenido a la tienda de ropa. Tus credenciales de acceso son, login: $l y contraseña $pass";
		$mail->MsgHTML($cadena);   
			
		if(!$mail->Send()) {//finalmente enviamos el email    
			echo $mail->ErrorInfo;//si no se envía correctamente se muestra el error que ocurrió 
		} else {   
			echo "<p class='cen'><b>Correo enviado exitosamente</b></p>"; 
			echo "<br>";
			echo "<br>";
		}


	} else {
		echo "No se pudo agregar el usuario";
	}



		
?>