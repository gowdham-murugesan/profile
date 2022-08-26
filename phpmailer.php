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
    $mail->Password   = 'ajfuynqmivdubxxt';                               //SMTP password
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
	 <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KDVJD54');</script>
    <!-- End Google Tag Manager -->
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
            width: 275px;
            margin-left: 50%;
            transform: translateX(-50%);
            margin-bottom: -130px;
        }

        @media only screen and (max-width: 480px) {
            .success-message__icon {
                width: 240px;
            }

            .container h1 {
                font-size: 40px;
            }
        }
</style>
</head>
<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KDVJD54"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="loader abs tl"><!-- Loading --></div>
	<div class="container abs">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="512" height="512" x="0" y="0" viewBox="0 0 408.576 408.576" style="enable-background:new 0 0 512 512" xml:space="preserve" class="success-message__icon">
            <circle r="204.288" cx="204.288" cy="204.288" fill="#57bc76" shape="circle" transform="matrix(0.63,0,0,0.63,75.58655792236328,75.58655792236328)"/>
            <g transform="matrix(0.7,0,0,0.7,61.28639831542969,61.28639831542969)">
                <g xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <path d="M204.288,0C91.648,0,0,91.648,0,204.288s91.648,204.288,204.288,204.288s204.288-91.648,204.288-204.288    S316.928,0,204.288,0z M318.464,150.528l-130.56,129.536c-7.68,7.68-19.968,8.192-28.16,0.512L90.624,217.6    c-8.192-7.68-8.704-20.48-1.536-28.672c7.68-8.192,20.48-8.704,28.672-1.024l54.784,50.176L289.28,121.344    c8.192-8.192,20.992-8.192,29.184,0C326.656,129.536,326.656,142.336,318.464,150.528z" fill="#ffffff" data-original="#000000" style="" class=""/>
                    </g>
                </g>
            </g>
        </svg>
        <h1>Mail Successfully Sent...!!</h1> 
        <h3>You will be redirected to home page in 3 seconds...</h3>
    </div>
</body>
</html>
