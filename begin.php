<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="stylenavbar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  
<!--Barra de navegacion-->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Makunga Place</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!--Contenido dentro de la barra de navegacion-->
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contactos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Cerrar Sesion</a>
        </li>
      </ul>   
    </div>
  </div>
</nav>
<!-- Modal Cerrar Sesion -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Cerrar sesion</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <p>Seguro que desea terminar la sesion actual?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Confirmar</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Cerrar Sesion -->

    <!--Barra de navegacion-->
    <br>
<h2 class="text-center">Bienvenido</h2>
<br>
<div class="container">
 <!--PlaceHolder Lista de usuarios-->
 <div class="card">
  <img src="icon/Users.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Lista de usuarios</h5>
    <p class="card-text">Usuarios disponibles del sistema.</p>
    <a href="home.php" class="btn btn-primary">Ingresar</a>
  </div>
</div>
<!--PlaceHolder Lista de productos-->
<div class="card">
  <img src="icon/product.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Lista de productos</h5>
    <p class="card-text">Productos disponibles del sistema.</p>
    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="btn btn-primary">Ingresar</a>
  </div>
</div>
<!--PlaceHolder Archivos-->
<div class="card">
  <img src="icon/files.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Archivos</h5>
    <p class="card-text">Archivos del sistema.</p>
    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="btn btn-primary">Ingresar</a>
  </div>
  


</div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>