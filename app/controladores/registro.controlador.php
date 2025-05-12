<?php   
require_once "app/modelos/conexion.php";

class ControladorRegistro {

    public static function ctrRegistroUsuario() {
      if (isset($_POST["usuario"])) {
  
        $datos = array(
          "nombre" => $_POST["nombre"],
          "usuario" => $_POST["usuario"],
          "email" => $_POST["email"],
          "clave" => password_hash($_POST["clave"], PASSWORD_DEFAULT)
        );
  
        $respuesta = ModeloUsuarios::mdlRegistroUsuario($datos);
  
        if ($respuesta == "ok") {
          return "ok"; // <--- AQUÍ el return
        } else {
          return "error"; // <--- También importante
        }
  
      }
  
      return null; // <--- Si no se envió el formulario
    }
  
  }
  