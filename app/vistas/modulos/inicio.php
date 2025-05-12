<?php

if (!isset($_SESSION["iniciarSesion"]) || $_SESSION["iniciarSesion"] != "ok") {
  // Si el usuario no está logueado, redirigir al login
  echo '<script>window.location = "index.php?modulos=login";</script>';
  exit();
}
?>


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="jumbotron text-center bg-light">
                <h1 class="display-4">Bienvenido al Sistema ADSO - SENA</h1>
                <p class="lead">Aquí podrás gestionar usuarios, ver tu información académica y estar al día con tus actividades.</p>
                <hr class="my-4">
                <p>Formación con calidad para el trabajo y el desarrollo humano.</p>
                <img src="vistas/img/logoSena.png" alt="Logo SENA" style="max-width: 200px;">
            </div>
        </div>
    </div>
</div>
