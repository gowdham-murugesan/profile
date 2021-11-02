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
//     $mail->Password   = 'Asdf@2000';                               //SMTP password
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
    // echo 'Message has been sent <br> You will be redirected to main page in 3 seconds...';
//     echo $html;
    header( "refresh:3;url=index.html" );
} catch (Exception $e) {
    // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo} <br> You will be redirected to main page in 3 seconds...";
//     echo $html;
    header( "refresh:3;url=index.html" );
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
        $(window).load(function() {
           co = $('.container');
           $('.loader').animate({
               opacity: '0'
           }, 500, function() {
               co.animate({
                   width: '100%',
                   height: '100%',
                   top: '0%',
                   left: '0%'
               }, 500, function() {
                   $(this).find('*').delay(250).animate({
                       opacity: '1'
                   }, 500);
                   $(this).css('overflow', 'auto');
               });
           });
       });
   </script>
    <style>
        *{
        margin:0px;
        padding:0px;
        outline:0px none;
        border:0px none;
        }
        html{
        color:#000000;
        background:#ffffff;
        width:100%;
        height:100%;
        }

        .button {
        text-align: center;
        position: center;
        display: inline-block;
        }

        /* HWAForce */
        body {
        transform: translate3d(0, 0, 0);
        backface-visibility:hidden;
        perspective:1000;-webkit-transform:translate3d(0, 0, 0);
        -webkit-backface-visibility:hidden;
        -webkit-perspective:1000;
        -moz-transform:translate3d(0, 0, 0);
        -moz-backface-visibility:hidden;
        -moz-perspective:1000;
        -ms-transform:translate3d(0, 0, 0);
        -ms-backface-visibility:hidden;
        -ms-perspective:1000;
        }

        body {
        font:100%/1 Arial;
        word-spacing:0px;
        letter-spacing:0px;
        width:100%;
        font-weight:normal;
        font-style:normal;
        height:100%;
        position:relative;
        }

        a {
        text-decoration:none;
        cursor:pointer;
        }

        h1,h2,h3,h4,h5,h6 {
        display:block; 
        text-align: center;
        }

        .clear {
        clear:both;
        overflow:hidden;
        }

        .container {
        width:100%;
        }
        .abs {
        position:absolute;
        }

        .tl {
        top:0px;
        left:0px;
        }


        .loader {
        width:100%;
        height:100%;
        text-align:center;
        color:#ffffff;
        }

        .container {
        background:#57bc76;
        height:0;
        width:0;
        top:50%;
        left:50%;
        overflow:hidden;
        }

        .container code{
        width:70%;
        margin:25px 0px;
        font-size:16px;
        font-family: 'Montserrat', Arial, sans-serif;
        color:#0072bc;
        padding:20px 50px;
        display:block;
        background:#f0f0f0;
        }

        .container p{
        width:70%;
        margin:25px 50px;
        font-size :16px;
        font-family: 'Montserrat', Arial, sans-serif;
        color:#fff;
        }
        .container h1{
        font-size:52px;
        font-family: 'Montserrat', Arial, sans-serif;
        font-weight: 700;
        color:#fff;
        margin-bottom: 15px;
        }

        .container h3 {
        font-size:20px;
        font-family: 'Montserrat', Arial, sans-serif;
        font-weight: 100;
        color:#fff;
        }

        .container > * {
        opacity: 0;
        }

        .success-message__icon {
            margin-top: 130px;
            margin-left: 50%;
            transform: translateX(-50%);
        }
</style>
</head>
<body>
    <div class="loader abs tl"><!-- Loading --></div>
	<div class="container abs">
        <img src="https://cdn-user-icons.flaticon.com/56815/56815977/1635872009988.svg?token=exp=1635872928~hmac=64b1a1ce36cf1d5eee0f0f65af0798ca" alt="tick" class="success-message__icon" style="width: 275px; margin-bottom: -30px;">
    	<h1>Mail Successfully Sent...!!</h1> 
        <h3>You will be redirected to home page in 3 seconds...</h3>     
    </div>
</body>
</html>
