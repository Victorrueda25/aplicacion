<?php

require_once "conexion.php";

class ModeloUsuarios {

  public static function mdlRegistroUsuario($datos) {
    $sql = "INSERT INTO usuarios 
                (pers_nombre, pers_usuario, pers_email, pers_clave, pers_fecha_registro) 
            VALUES 
                (:nombre, :usuario, :email, :clave, NOW())";

    $stmt = Conexion::conectar()->prepare($sql);

    $stmt->bindParam(":nombre",  $datos["nombre"],  PDO::PARAM_STR);
    $stmt->bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);
    $stmt->bindParam(":email",   $datos["email"],   PDO::PARAM_STR);
    $stmt->bindParam(":clave",   $datos["clave"],   PDO::PARAM_STR);

    $ok = $stmt->execute();
    $stmt->closeCursor();
    return $ok ? "ok" : "error";
}
}