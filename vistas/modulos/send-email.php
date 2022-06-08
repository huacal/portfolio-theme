<?php

if(isset($_POST['message'])){
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message'])){

        $destino = "juanm6263@gmail.com";
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

       
        $content = "Nombre:" .$name ."\n Correo:" .$email ."\n Asunto:" .$subject ."\n Mensaje:" .$message;

        mail($destino,"Contacto",$content);

        header("Location:http://localhost/blog-larry-martinez/");

       

    }
}

?>