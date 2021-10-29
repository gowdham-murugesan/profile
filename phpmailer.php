<?php

$name = $_GET['name'];
$email = $_GET['email'];
$message = $_GET['message'];

$html = ''.$name.' <br> '.$email.' <br> '.$message.'';

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'counseling.gowdham@gmail.com';                     //SMTP username
    $mail->Password   = 'ibewtxlhgevaonvy';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('counseling.gowdham@gmail.com', 'Gowdham M');
    $mail->addAddress('gowdhammurugesh24@gmail.com', 'Gowdham M');     //Add a recipient
    // $mail->addAddress($email, $name);             //Name is optional
    // $mail->addReplyTo('gowdhammurugesh24@gmail.com', 'Admin');
    // $mail->addCC('gowdhammurugesh24@gmail.com');
    // $mail->addBCC('gowdhammurugesh24@gmail.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Profile - Mail';
    $mail->Body    = $html;
    $mail->AltBody = 'New user sent mail';

    $mail->send();
    echo 'Message has been sent';
    echo "You will be redirected to main page in 3 seconds..."
//     echo $html;
    header( "refresh:3;url=index.html" );
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    echo "You will be redirected to main page in 3 seconds..."
//     echo $html;/
    header( "refresh:3;url=index.html" );
}
