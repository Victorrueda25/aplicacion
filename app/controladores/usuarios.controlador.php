<?php

class ControladorUsuarios {

  public function ctrLoginUsuario() {
    if (isset($_POST["usuario"])) {
      $usuario = $_POST["usuario"];
      $clave = $_POST["clave"];
      $respuesta = ModeloUsuarios::mdlLoginUsuario($usuario);

      if ($respuesta && password_verify($clave, $respuesta["clave"])) {
        $_SESSION["iniciarSesion"] = "ok";
        $_SESSION["usuario"] = $respuesta;
        echo '<script>window.location = "inicio";</script>';
      } else {
        echo '<br><div class="alert alert-danger">Usuario o clave incorrectos</div>';
      }
    }
  }

  
}
