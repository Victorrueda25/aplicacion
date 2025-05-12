<?php


require_once "conexion.php";

class LoginModelo {

  public static function mdlLoginUsuario($usuario) {
    $stmt = Conexion::conectar()->prepare("SELECT * FROM usuarios WHERE pers_usuario = :usuario");
    $stmt->bindParam(":usuario", $usuario, PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

}
