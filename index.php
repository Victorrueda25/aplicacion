<?php

// MODELOS
require_once "app/modelos/conexion.php";
require_once "app/modelos/usuarios.modelo.php";

// CONTROLADORES
require_once "app/controladores/plantilla.controlador.php";
require_once "app/controladores/usuarios.controlador.php";
require_once "app/controladores/registro.controlador.php";
// agrega otros controladores aquí

$plantilla = new ControladorPlantilla();
$plantilla->ctrPlantilla();
