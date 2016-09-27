<?php
$to      = 'neil.thompson@selu.edu';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
$success=mail($to,$subject,$message,$headers);
if($success==true){
	echo "Email sent successfully ";
	} 
	else{
	echo "Error sending email" ;
	
	}

mail($to, $subject, $message, $headers);
?> 