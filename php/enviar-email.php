<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './phpmailer/Exception.php';
require './phpmailer/PHPMailer.php';
require './phpmailer/SMTP.php';

$mail = new PHPMailer(true);
$correo = $_REQUEST['correo'];

function getNombre(){
    return $nombre = $_REQUEST['nombre'];
}

function getContenido(){
    return $contenido = $_REQUEST['contenido'];
}

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.office365.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = '';                     //SMTP username
    $mail->Password   = '';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->CharSet = 'UTF-8';                                 

    //Recipients
    $mail->setFrom('idmr_02@outlook.com', 'Banco Chanchito UTP');
    $mail->addAddress($correo);

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Mensaje enviado - BCUTP';
    $mail->Body    = '

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Montserrat&family=Poppins:wght@300&display=swap");
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        h1, h2,h3, p{
            font-family: "Poppins", sans-serif;
        }
        svg{
            position: absolute; 
            width: 100%;
            z-index: -1;
        }
        footer{
            display: flex;
            bottom: 0;
            margin-top: 50px;
            justify-content: center;
        }
    </style>

    <body>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,192L1440,256L1440,0L0,0Z"></path></svg>
        <div style="text-align: center;">
            <h1 style="color: #81E3E5;">¡Correo recibido con éxito!</h1>
            <p>Hola, ' .getNombre(). ' te saluda el equipo de Banco Chanchito UTP, gracias por contactarnos. <br> 
                Tú mensaje ha sido recibido con éxito y te responderemos en un plazo de 24hrs. <br>
                Copia de tu mensaje enviado a continuación:</p>
            <cite>' .getContenido(). '</cite>
            <hr>
        </div>
    </body>

    <footer>
        <h3>Banco Chanchito UTP</h3>
        <img src="./phpmailer/logo.jpg" width="100px" height="100px">
        <h2>&copy; | Banco Chanchito UTP</h2>
    </footer>

        
    '; 
        
    $mail->send();
    echo 'Mesaje enviado';
} catch (Exception $e) {
    echo "Hubo un error: {$mail->ErrorInfo}";
}

?>
