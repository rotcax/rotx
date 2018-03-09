<?php

	$to = 'caceres.vc95@gmail.com';

	if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['subject']) || empty($_POST['message'])){

		echo '<script>
				$(document).ready(function(){
					swal("Ops...", "Todos los Campos son Obligatorios", "warning");
				});
				</script>';

	}else{

		$name = $_POST['name'];
		$email = $_POST['email'];
		$subjet = $_POST['subject'];
		$message = $_POST['message'];

		require_once 'PHPMailer/PHPMailerAutoload.php';

		//Settings
		$mail = new PHPMailer();
		$mail->isSMTP();
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = 'tls';
		$mail->Host = 'smtp.gmail.com';
		$mail->Port = 587;
		$mail->Username = 'mvc.corpca@gmail.com';
		$mail->Password = 'creacion202017*';

		//Recipies
		$mail->setFrom('mvc.corpca@gmail.com', 'ROTPAGE');
		$mail->addAddress($to);

		//Content
		$mail->Subject = $subjet;
		$mail->Body = $message;

		//Optional Options
		$mail->SMTPOptions = array(
		'ssl' => array(
		'verify_peer' => false,
		'verify_peer_name' => false,
		'allow_self_signed' => true
			)
		);

		if($mail->send()){
		
			echo '
				<script>
					$(document).ready(function(){
						swal("Excelente '.utf8_encode($name).'...", "Tu mensaje fue enviado con exito. \n Pronto se pondran en contacto contigo!", "success")
					});
				</script>';
		
		}else{
			
			echo '
				<script>
					$(document).ready(function(){
						swal("Oh no.. '.utf8_encode($name).'...","Hubo un error al enviar el mensaje, por favor intentalo de nuevo", "error");
					});
				</script>';
		}
	}	
?>