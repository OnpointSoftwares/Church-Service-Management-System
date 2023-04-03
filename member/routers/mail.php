<?php
session_start();
         $name=$_SESSION['name'];
		 $email=$_SESSION['email'];
		 $amount=$_SESSION['amount'];
         $type=$_SESSION['type'];
use AfricasTalking\SDK\AfricasTalking;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once "PHPMailer/src/PHPMailer.php";
require_once "PHPMailer/src/Exception.php";
require_once "PHPMailer/src/SMTP.php";
require_once"vendor/autoload.php";

$mail = new PHPMailer(true);

try {
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
	$mail->SMTPDebug = 2;									
	$mail->isSMTP();											
	$mail->Host	 = 'smtp.gmail.com;';					
	$mail->SMTPAuth = true;							
	$mail->Username = 'edimonkipyegonrotich@gmail.com';				
	$mail->Password = 'yqwpwapbkmhaellv';						
	$mail->SMTPSecure = 'tls';							
	$mail->Port	 = 587;
	$mail->setFrom("dvosoro@kabarak.ac.ke", "Kabarak Church Service Management System");		
	$mail->addAddress($email);	
	$mail->isHTML(true);								
	$mail->Subject = 'Subject';
	$mail->Body="Hello $name. Confirmed you have given a(n) $type of Ksh $amount. Thankyou";
	$mail->AltBody = 'Body in plain text for non-HTML mail clients';
	$mail->send();
	echo "Mail has been sent successfully!";

} catch (Exception $e) {
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>