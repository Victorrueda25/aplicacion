<?php

require_once "app/modelos/conexion.php"; // ✅ Deja solo esta
require_once "app/controladores/registro.controlador.php";
require_once "app/modelos/usuarios.modelo.php";
?>


<!-- login.php -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="app/vistas/dist/css/adminlte.min.css">
    <!-- Otras etiquetas -->
    <link rel="stylesheet" href="app/vistas/dist/css/login.css">


</head>

<body class="login-page">

    <div class="login-logo text-center">
        <a href="#"><b>ADSO</b> App</a>
    </div>

    <div class="card mx-auto" style="max-width: 400px;">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Iniciar sesión</p>

            <form method="post">
                <div class="input-group mb-3">
                    <input type="text" name="usuario" class="form-control" placeholder="Usuario" required>
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-user"></span></div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="clave" class="form-control" placeholder="Contraseña" required>
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-lock"></span></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <a href="index.php?modulos=registro" class="text-center">Registrar nuevo usuario</a>
                    </div>
                    <div class="col-12 mt-2">
                        <button type="submit" class="btn btn-primary w-100">Ingresar</button>
                    </div>
                </div>

                <?php
                $login = new ControladorUsuarios();
                $login->ctrLoginUsuario();
                ?>
            </form>
        </div>
    </div>


</body>

</html>