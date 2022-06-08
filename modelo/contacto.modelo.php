<?php


class ModeloContacto{

    /* Registrar Mensaje */
    
    static public function mdlRegistrarMensaje($tabla, $datos){
        
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(name, email, subject, message) VALUES(:name, :email, :subject, :message)");

        $stmt->bindParam(":name", $datos["name"], PARAM_STR);
        $stmt->bindParam(":email", $datos["email"], PARAM_STR);
        $stmt->bindParam(":subject", $datos["subject"], PARAM_STR);
        $stmt->bindParam(":message", $datos["message"], PARAM_STR);

        if ($stmt->execute()) {

            return "ok";

        }else{

            return "error";

        }
    }

}