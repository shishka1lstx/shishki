<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/Exception.php';


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8'    
$mail->setLanguage('ru', 'phpmailer/language/')              
$mail->isHTML(true);        

$mail->setFrom('kniga.jalob.harli31@gmail.com', 'Mailer');

$mail->addAddress('benz.hokobyan@gmail.com');     

//Attachments
$mail->addAttachment('/var/tmp/file.tar.gz');         
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    

//Content
$mail->isHTML(true);                                  
$mail->Subject = 'Жалоба';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

$mail->send();