<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de contenido</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div>
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
          <a class="nav-link" href="#">Cerrar Sesion</a>
        </li>
      </ul>   
    </div>
  </div>
</nav>
</div>
<div class="container">
  <br>
<h2 class="text-center">Informacion de usuarios</h2>
<br> 
</div>
<!--Contenido de la tabla-->
<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col" style="background-color: black; color:white">Id</th>
      <th scope="col" style="background-color: black; color:white">Nombre</th>
      <th scope="col" style="background-color: black; color:white">Direccion</th>
      <th scope="col" style="background-color: black; color:white" >Telefono</th>
      <th scope="col" style="background-color: black; color:white">Correo</th>
      <th scope="col" style="background-color: black; color:white">Clave</th>
      <th scope="col" style="background-color: black; color:white">Fecha</th>
      <th scope="col" style="background-color: black; color:white">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <!-- Informacion de la base de datos-->
    <?php
    /*Require en caso de error, cierra inmetiato*/
    require("conection.php");
    /*Acceder a consulta base de datos*/
    $query = ("SELECT * FROM `usuario`");
    /*Almacenar consulta para ejecutar*/
    $result = mysqli_query($conex, $query);
    /*Leer la informacion y almacenar en los filas definidos en la tabla */
    while($raw= mysqli_fetch_assoc($result)){
      ?>
      <tr>
      <td scope="row"><?php echo $raw['id']; ?></td>
      <td scope="row"><?php echo $raw['nombre']; ?></td>
      <td scope="row"><?php echo $raw['direccion']; ?></td>
      <td scope="row"><?php echo $raw['telefono']; ?></td>
      <td scope="row"><?php echo $raw['correo']; ?></td>
      <td scope="row"><?php echo $raw['clave']; ?></td>
      <td scope="row"><?php echo $raw['fecha']; ?></td>
      <th>
      <a href="" class="btn btn-warning" >Editar</a>
      <a href="" class="btn btn-danger" >Eliminar</a>
      </tr>
      </tr>
     
      <?php
    }
      ?>   
    
    
  </tbody>
</table>
<a href="begin.php" class="btn btn-primary" >Volver a Inicio</a>
</div>
            
      
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


</body>
</html>