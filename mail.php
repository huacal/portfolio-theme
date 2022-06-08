<?php

if (isset($_POST["send"])) {
    if (!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["subject"]) && !empty($_POST["message"])) {
        $nombre = $_POST["name"];
        $mail = $_POST["email"];
        $asunto = $_POST["subject"];
        $mensaje = $_POST["message"];
        $header =  "From: juanm6263@gmail.com" . "\r\n";
        $header =  "Reply-To: juanm6263@gmail.com" . "\r\n";
        $header =  "X-Mailer: PHP/" . phpversion();

        $email = mail( $nombre, $mail, $asunto, $mensaje, $header);
        if ($email) {
            echo "<h4>Mail enviado satisfactoriamente!</h4>";
        }else{
            echo "<h4>Error no se pudo enviar el mensaje.</h4>";    
        }
    }
}
