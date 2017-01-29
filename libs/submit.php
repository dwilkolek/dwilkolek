<?php

ob_start();
error_reporting(0);
/* ========================= CONFIGURATION ========================= */

$recipient		=	'd.wilkolek@hotmail.com';		// the e-mail adress of the recipient of all e-mails submitted through the form

$subjectDefault	=	'Zapytanie ze strony wilkolek.eu';		// the default subject if the user don't input a subject

/* ========================= CONFIGURATION ========================= */

if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message'])) {
	die('Error: Missing variables');
}
 
require("classes/class.phpmailer.php");

// define the variables
$name		= $_POST['name'];
$email		= $_POST['email'];
$phone		= $_POST['phone'];
$subject	= $_POST['subject'];
$message	= $_POST['message'];

$ip 		= $_SERVER['REMOTE_ADDR'];
$ua 		= $_SERVER['HTTP_USER_AGENT'];

// the e-mail template
$body = '<html>';

	$body .= '<head>';
		$body .= '<style type="text/css">';	
		$body .= 'html, body{ width:100%; margin-top: 0px !important; padding-top: 0px !important; }';	
		$body .= 'body{ background-color:#EEEEEE; margin-top: 0px !important; padding-top: 0px !important; font-family:sans-serif; }';	
		$body .= 'table{ margin-top: 0px !important; padding-top: 0px !important; }';	
		$body .= 'td{padding: 3px 0; vertical-align: top;}';	
		$body .= '</style>';	
	$body .= '<head>';
	
	$body .= '<body style="margin: 0; padding: 0; width: 100%; background-color: #EEEEEE; margin-top: 0px; margin-left: 0px;">';	
		$body .= '<div style="float: left; padding: 50px;">';
			$body .= '<div style="float: left; padding: 50px; background-color: #FFFFFF; border: 1px solid #DDD;">';
				$body .= '<table border="0" width="100%">';
					$body .= '<tr>';
						$body .= '<td style="width: 30%; color: #333;"><strong>Name:</strong></td>';
						$body .= '<td style="width: 70%; color: #333;">'.$name.'</td>';
					$body .= '</tr>';
					$body .= '<tr>';
						$body .= '<td style="width: 30%; color: #333;"><strong>E-Mail:</strong></td>';
						$body .= '<td style="width: 70%; color: #333;"><a href="mailto:'.$email.'">'.$email.'</a></td>';
					$body .= '</tr>';
					$body .= '<tr>';
						$body .= '<td style="width: 30%; color: #333;"><strong>Phone:</strong></td>';
						$body .= '<td style="width: 70%; color: #333;">'.$phone.'</td>';
					$body .= '</tr>';
					$body .= '<tr>';
						$body .= '<td style="height: 20px;"></td>';
					$body .= '</tr>';
					$body .= '<tr>';
						$body .= '<td style="width: 30%; color: #333;"><strong>Message:</strong></td>';
						$body .= '<td style="width: 70%; color: #333;">'.$message.'</td>';
					$body .= '</tr>';
					$body .= '<tr>';
						$body .= '<td style="height: 60px;"></td>';
					$body .= '</tr>';
					$body .= '<tr>';
						$body .= '<td style="width: 30%; color: #666; text-decoration: underline;"><strong>Technical Details:</strong></td>';
					$body .= '</tr>';
					$body .= '<tr>';
						$body .= '<td style="width: 30%; color: #666;">IP of Sender:</td>';
						$body .= '<td style="width: 70%; color: #666;">'.$ip.'</td>';
					$body .= '</tr>';
					$body .= '<tr>';
						$body .= '<td style="width: 30%; color: #666;">User Agent:</td>';
						$body .= '<td style="width: 70%; color: #666;">'.$ua.'</td>';
					$body .= '</tr>';
				$body .= '</table>';
				$body .= '<div style="width: 100%; border-bottom: 1px solid #DDDDDD;"></div>';
				$body .= '<p style="color: #AAA; text-align: center;">This E-Mail has been submitted through the contact form on your website.</p>';
			$body .= '</div>';
		$body .= '</div>';
	$body .= '</body>';
$body .= '</html>';


// initialize the mailer
$mail = new PHPMailer();
$mail->IsMail();
$mail->IsHTML(true);

$mail->AddAddress($recipient);
$mail->From = $email; 
$mail->FromName = $name;
$mail->CharSet = "UTF-8";
if($subject) {
	$mail->Subject = $subject;
} else {
	$mail->Subject = $subjectDefault;
}

$mail->Body = $body;



if(!$mail->Send()) { 
	header("location: /contact.php?e=t");
} else {
   header("location: /contact.php?e=f");
}
ob_end_flush();
?>
