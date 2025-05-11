<?php

require_once "conexion.php";

class ModeloUsuarios {

  public static function mdlLoginUsuario($usuario) {
    $stmt = Conexion::conectar()->prepare("SELECT * FROM usuarios WHERE usuario = :usuario");
    $stmt->bindParam(":usuario", $usuario, PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->fetch();
  }

  public static function mdlRegistroUsuario($datos) {
    $stmt = Conexion::conectar()->prepare("INSERT INTO usuarios(nombre, usuario, email, clave) VALUES (:nombre, :usuario, :email, :clave)");
    $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
    $stmt->bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);
    $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
    $stmt->bindParam(":clave", $datos["clave"], PDO::PARAM_STR);
    
    return $stmt->execute() ? "ok" : "error";
  }
}
