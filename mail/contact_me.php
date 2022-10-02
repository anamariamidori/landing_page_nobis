<?php
/*error_reporting(E_ALL);
ini_set('display_errors', '1');*/

// Check for empty fields
if(empty($_POST['msg_name'])      ||
   empty($_POST['msg_email'])     ||
   empty($_POST['msg_phone'])     ||
   empty($_POST['msg_message'])   ||
   !filter_var($_POST['msg_email'],FILTER_VALIDATE_EMAIL)){
   		echo "Nenhum dado informado!";
		return false;
}
   
$name = strip_tags(htmlspecialchars($_POST['msg_name']));
$email_address = strip_tags(htmlspecialchars($_POST['msg_email']));
$phone = strip_tags(htmlspecialchars($_POST['msg_phone']));
$message = strip_tags(htmlspecialchars($_POST['msg_message']));
   
// Create the email and send the message
//$to = 'email@exemplo.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Página de Contato do Site:  $name";
//$email_body = "Você recebeu esta mensagem do formulário de contato do site.\n\n"."Detalhes:\n\nNome: $name\n\nE-mail: $email_address\n\nCelular: $phone\n\nMensagem:\n$message";
//$headers = "From: $email_address\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
//$headers .= "Reply-To: $email_addresss";   
//mail($to,$email_subject,$email_body,$headers);
        


// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
// Load Composer's autoloader
//require '../vendor/phpmailer/phpmailer/src/Exception.php';
require '../../_inc/get_catevt.php';
require '../../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../../vendor/phpmailer/phpmailer/src/SMTP.php';
require '../../vendor/autoload.php';		
		// Instantiation and passing `true` enables exceptions
	
		$mail = new PHPMailer\PHPMailer\PHPMailer(true);
		
		try {
				//Enable SMTP debugging. 
				//$mail->SMTPDebug = 2;                               
				//Set PHPMailer to use SMTP.
				//$mail->isSMTP();   
				$mail->isMail();         
				//Set SMTP host name                          
				$mail->Host = "localhost";
				// Active condition utf-8
				//$mail->CharSet = 'UTF-8';
				$mail->setFrom($email_address,utf8_decode($name));
				//$mail->addReplyTo($email_address,encodeToUtf8($name));
				//Set who the message is to be sent to
				$mail->addAddress('falecom@nobisapp.com.br', 'Nobis Services - Contato');
				//
				
				
				$mail->WordWrap = 50;
				
				$mail->isHTML(true);	// set email format to HTML
				
				$mail->Subject = utf8_decode($email_subject); //$assunto
				
				$mail->Body    = "<html><head></head><body style='font-size: 14px;'>
				<div>Voc&ecirc; recebeu esta mensagem do formul&aacute;rio de contato do Projeto BASF / Nobis.</div><br>
				<div><b>Detalhes:</b></div><br>
				<div><b>Nome:</b> ".utf8_decode($name)."</div>
				<br>
				<div><b>E-mail:</b> ".$email_address."</div>
				<br>
				<div><b>Celular:</b> ".$phone."</div>
				<br>
				<div><b>Mensagem:</b>
				<blockquote>".utf8_decode(nl2br($message))."</blockquote></div></body></html>";
		
			$mail->AltBody = "Você recebeu esta mensagem do formulário de contato do site.\n\n"."Detalhes:\n\nNome: $name\n\nE-mail: $email_address\n\nCelular: $phone\n\nMensagem:\n$message";
			
			$mail->send();
				
			return true; 
		
		} catch (Exception $e) {
			echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}