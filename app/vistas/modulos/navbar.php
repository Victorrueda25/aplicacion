<!-- Navbar principal con botón hamburguesa y enlaces -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Botón de hamburguesa para abrir/cerrar el sidebar -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button">
        <i class="fas fa-bars"></i>
      </a>
    </li>

    <!-- Enlace de inicio visible en pantallas medianas y grandes -->
    <li class="nav-item d-none d-sm-inline-block">
      <a href="index.php?modulos=inicio" class="nav-link">Inicio</a>
    </li>
  </ul>

  <!-- Menú de navegación (al lado derecho) -->
  <ul class="navbar-nav ms-auto">
    <li class="nav-item">
      <a href="index.php?modulos=usuarios" class="nav-link">Usuarios</a>
    </li>
    <li class="nav-item">
      <a href="index.php?modulos=reportes" class="nav-link">Reportes</a>
    </li>
    <li class="nav-item">
      <a href="index.php?modulos=logout" class="nav-link">Cerrar sesión</a>
    </li>
  </ul>
</nav>
