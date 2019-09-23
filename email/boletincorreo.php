<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

if ($_POST) {
    $email = $_POST['email'];
    
}

$mail = new PHPMailer(true);

try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
   //Correo del remitente
    $mail->Username = 'masivoinmobiliarias@gmail.com';
    $mail->Password = 'dexcon2019@';

    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    
    
    $mail->isHTML(true);
    //Copia
    $mail->addAddress('sebas07casti@gmail.com');
    $mail->addAddress('gestion@dexcondigital.com');
    //Mensaje
    $mail->Subject='Mensaje desde la pagina web de Inmobiliaria Santa Barbara ';
    $mail->Body = '<span>Hola el correo:  '.$email.' se suscribío al Boletín de Santa Barbara </span>
                   
    ';
    $mail->send();
    echo "<script>window.location.href='.././'</script>";

}catch(Exception $e){
    echo 'algo salio mal' , $e->getMessage();
}

?>