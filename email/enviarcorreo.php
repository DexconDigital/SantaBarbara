<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

if ($_POST) {
    $email = $_POST['email'];
    $nombre = $_POST['name'];
    $mensaje = $_POST['message'];
    $telefono = $_POST['telefono'];
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
    $mail->setFrom('no-reply@Santabarbaraltda@hotmai.com', 'no-reply@Santabarbaraltda@hotmai.com');
    $mail->addAddress('Santabarbaraltda@hotmai.com');
    //Mensaje
    $mail->Subject='Mensaje desde la pagina web de Inmobiliaria Santa Barbara ';
    $mail->Body = '<span>Hola, '.$nombre.' quiere recibir informacion </span>
                    <ul>
                        <li>Correo: '.$email.'</li>
                        <li>Telefono: '.$telefono.'</li>
                        <li>Mensaje: '.$mensaje.'</li>
                    </ul>
    ';
    $mail->send();
    echo "<script>window.location.href='.././'</script>";

}catch(Exception $e){
    echo 'algo salio mal' , $e->getMessage();
}

?>