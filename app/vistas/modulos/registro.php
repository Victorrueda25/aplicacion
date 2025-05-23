
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Registro</title>

  <!-- AdminLTE CSS -->
  <link rel="stylesheet" href="app/vistas/dist/css/adminlte.min.css">

  <!-- Font Awesome (para los íconos) -->
  <link rel="stylesheet" href="app/vistas/plugins/fontawesome-free/css/all.min.css">

  <!-- Tu propio CSS -->
  <link rel="stylesheet" href="app/vistas/dist/css/registro.css">
</head>

<body class="login-page">

  <div class="contenedor-registro">
    <div class="register-box">
      <div class="register-logo">
        <a href="#"><b>Adso</b>SENA</a>
      </div>
      <div class="card">
        <div class="card-body register-card-body">
          <p class="login-box-msg">Registrar usuario</p>

          <form method="post">
            <div class="input-group mb-3">
              <input type="text" name="nombre" class="form-control" placeholder="Nombre completo" required>
              <div class="input-group-append">
                <div class="input-group-text"><span class="fas fa-user"></span></div>
              </div>
            </div>

            <div class="input-group mb-3">
              <input type="text" name="usuario" class="form-control" placeholder="Usuario" required>
              <div class="input-group-append">
                <div class="input-group-text"><span class="fas fa-user-circle"></span></div>
              </div>
            </div>

            <div class="input-group mb-3">
              <input type="email" name="email" class="form-control" placeholder="Email" required>
              <div class="input-group-append">
                <div class="input-group-text"><span class="fas fa-envelope"></span></div>
              </div>
            </div>

            <div class="input-group mb-3">
              <input type="password" name="clave" class="form-control" placeholder="Contraseña" required>
              <div class="input-group-append">
                <div class="input-group-text"><span class="fas fa-lock"></span></div>
              </div>
            </div>

            <?php
            $registro = ControladorRegistro::ctrRegistroUsuario();

            if ($registro === 'ok') {
              echo '<script>
                if (window.history.replaceState) {
                  window.history.replaceState(null, null, window.location.href);
                }
              </script>';
              echo '<div class="alert alert-success">El usuario ha sido registrado exitosamente.</div>';
            }
            ?>

            <button type="submit" class="btn btn-primary btn-block">Registrar</button>
            <div class="mt-3 text-center">
              <a href="index.php?modulos=login" class="btn btn-secondary w-100">Volver al Login</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</body>

</html>
