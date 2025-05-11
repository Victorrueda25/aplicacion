<head>
    <!-- Otras etiquetas -->
    <link rel="stylesheet" href="app/vistas/dist/css/login.css">
</head>
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
                    <a href="index.php?modulo=registro" class="text-center">Registrar nuevo usuario</a>
                </div>
                <div class="col-12 mt-2"> <!-- col-12 en lugar de col-4 -->
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