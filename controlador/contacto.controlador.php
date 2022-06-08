<?php

 class ControladorContacto{

    static public function  ctrRegistrarMensaje(){
        if (isset($_POST["email"])) {
           if (preg_match('/^[a-zA-ZÀ-ÿ\s]{3,40}$/', $_POST["name"]) &&
               preg_match('/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/', $_POST["email"]) &&
               preg_match('/^[a-zA-ZÀ-ÿ\s]+$/', $_POST["subject"])  && 
               preg_match('/^[\s\S]{0,120}$/', $_POST["message"])) {
            
            $tabla = "mensajes";

            $datos = array("name" => $_POST["name"],
                           "email" => $_POST["email"],
                           "subject" => $_POST["subject"],
                           "message" => $_POST["message"]);


            $respuesta = ModeloContacto::mdlRegistrarMensaje($tabla, $datos);

            if ($respuesta = "ok") {
                echo'<script> 
               
                alert("Mensaje enviado");
               
               </script>';
            }

           }else{
               echo'<script> 
               
                alert("Error conexion base de datos");
               
               </script>';
           }
        }
    }
 }