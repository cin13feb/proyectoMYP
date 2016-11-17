
<html>
<head>
<meta charset="UTF-8">

</head>

<body>


  <?php

  			error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
			include("conexion.php");
			require 'class.phpmailer.php'; 
			require 'class.smtp.php'; 

			$c = $_POST["correo"];	
			
			
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
				$mail->AddAddress($c);//destinatario que va a recibir el correo  
				$mail->Subject = 'Bienvenido ';    
        		$cadena="Hola Mundo estamos enviando correos";
				$mail->MsgHTML($cadena);   
			
				if(!$mail->Send()) {//finalmente enviamos el email    
					echo $mail->ErrorInfo;//si no se envía correctamente se muestra el error que ocurrió 
				} else {   
					echo "<p class='cen'><b>Correo enviado exitosamente</b></p>"; 
					echo "<br>";
					echo "<br>";
				}
      		
	

	?>
    
   
</body>
</html>

		
