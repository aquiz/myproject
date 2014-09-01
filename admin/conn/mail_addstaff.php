<?php
//send mail to any user with any email
require_once("phpMailer/class.phpmailer.php");
require_once("phpMailer/class.smtp.php");
require_once("phpMailer/language/phpmailer.lang-en.php");
require_once("apikey_addstaff.php");

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');


//Create a new PHPMailer instance
$mail = new PHPMailer();

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';//gmail host server
//$mail->Host = 'smtp.mail.yahoo.com';//Yahoo Mail host server


//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;
//$mail->Port = 465;
//$mail->Port = 25;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';
//$mail->SMTPSecure = 'ssl';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "chieftms@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "chiefPASS";

//Set who the message is to be sent from
$mail->setFrom('chieftms@gmail.com', 'adminTMS');

//Set an alternative reply-to address
$mail->addReplyTo('chieftms@gmail.com', 'chief TMS');

//Set who the message is to be sent to
$mail->addAddress($email, 'Sample Mail');

//Set the subject line
$mail->Subject = 'Reset your TMS password.';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//Altenatively: $mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));

$mail->msgHTML('Hi '.$firstname.' '.$lastname.', welcome to the crew!! Please reset your password and verify your identity using the following code: '.$salt);

//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';

//Attach an image file
/*$mail->addAttachment('images/phpmailer_mini.png');*/

//send the message, check for errors
if (!$mail->send()) {
	echo "Mailer Error: " . $mail->ErrorInfo;
} else {
	echo "Message sent!";
}
?>
