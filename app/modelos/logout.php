<?php

require_once "app/modelos/conexion.php";
require_once "app/modelos/login.modelo.php";

session_start();
session_unset();
session_destroy();
echo '<script>window.location = "index.php?modulos=login";</script>';
exit();
?>
