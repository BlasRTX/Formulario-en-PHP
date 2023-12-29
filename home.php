<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de contenido</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body> 
<div class="container">
  <br>
<h2 class="text-center">Informacion de datos del sistema</h2>
<br> 
</div>
<!--Contenido de la tabla-->
<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Direccion</th>
      <th scope="col">Telefono</th>
      <th scope="col">Correo</th>
      <th scope="col">Clave</th>
      <th scope="col">Fecha</th>
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
      </tr>
      <?php
    }
      ?>   
    
    
  </tbody>
</table>
</div>
            
      
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


</body>
</html>