<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Hosting</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../">Inicio</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Usuario
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="agregar_u.php">Agregar</a></li>
            <li><a class="dropdown-item" href="lista_u.php">Lista de usuarios</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Facturacion
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="plan-hosting.php">Agregar</a></li>
            <li><a class="dropdown-item" href="lista_plan.php">Lista de Facturas</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Planes
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="plan-hosting.php">Agregar</a></li>
            <li><a class="dropdown-item" href="lista_plan.php">Lista de Planes</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Sitios Web
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="sitios-web.php">Agregar</a></li>
            <li><a class="dropdown-item" href="lista_sitios-web.php">Lista de Sitios</a></li>
          </ul>
        </li>
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ver Mas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="configuraciones-globales-hosting.php">Configuraciones Globales del Hosting</a></li>
            <li><a class="dropdown-item" href="soporte-tecnico.php">Soporte Tecnico</a></li>
            <li><a class="dropdown-item" href="sitios-web.php">Sitios Web</a></li>
          </ul>
        </li> -->
      </ul>
    </div>
  </div>
</nav>
<h1 class="text-center">usuarios</h1>
    <div class="container ">
    <?php
            include "../controller/c-agregar-u.php";
            ?> 
        <form method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" name="nombre" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido</label>
                <input type="text" name="apellido" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Usuario</label>
                <input type="text" name="usuario" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Contraseña</label>
                <input type="text" name="contraseña" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo</label>
                <input type="email" name="email" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="Select" class="form-label">Plan</label>
                <select name="opcion"  class="form-select" aria-label="Default select example">
                    <option selected>Seleccione una opcion</option>
                    <option value="1">SINGLE </option>
                    <option value="2">PREMIUM</option>
                    <option value="3">BUSINESS</option>
                </select>
            </div>
            
            <button type="submit" class="btn btn-primary" name="btnagregar-u">Guardar</button>
        </form>
    </div>
    


    <script src="../js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>