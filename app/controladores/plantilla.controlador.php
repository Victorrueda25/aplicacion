<?php

class ControladorPlantilla {

    public function ctrPlantilla() {

        if (isset($_GET["modulos"]) && in_array($_GET["modulos"], ["login", "registro"])) {
            // Mostrar directamente login o registro SIN plantilla completa
            include "app/vistas/modulos/" . $_GET["modulos"] . ".php";

        } else if (isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok") {
            // Usuario logueado: mostrar plantilla principal
            include "app/vistas/plantilla.php";

        } else {
            // No hay sesión: redirige a login
            echo '<script>window.location = "index.php?modulos=login";</script>';
        }
    }
}
