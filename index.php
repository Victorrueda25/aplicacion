<?php
session_start();

// MODELOS
require_once "app/modelos/conexion.php";
require_once "app/modelos/usuarios.modelo.php";

// CONTROLADORES
require_once "app/controladores/plantilla.controlador.php";
require_once "app/controladores/usuarios.controlador.php";
require_once "app/controladores/registro.controlador.php";

// Instanciar y ejecutar el controlador de la plantilla
$plantilla = new ControladorPlantilla();
$plantilla->ctrPlantilla();
