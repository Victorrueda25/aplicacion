<?php
require_once "app/modelos/conexion.php";
require_once "app/modelos/login.modelo.php";

class ControladorUsuarios {

  public function ctrLoginUsuario() {
    if (isset($_POST["usuario"])) {
      $usuario = $_POST["usuario"];
      $clave = $_POST["clave"]; // <- corregido aquí
  
      $respuesta = LoginModelo::mdlLoginUsuario($usuario);
  
      if ($respuesta && password_verify($clave, $respuesta["pers_clave"])) {
        $_SESSION["iniciarSesion"] = "ok";
        $_SESSION["usuario"] = $respuesta;
        echo '<script>window.location = "index.php?modulos=inicio";</script>';

      } else {
        echo '<br><div class="alert alert-danger">Usuario o clave incorrectos</div>';
      }
    }
  }
  

  
}
