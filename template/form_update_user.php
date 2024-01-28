<?php 
include("../database/conection.php");
$sql_query_update = ("SELECT * FROM `usuario`");
$sql_result = mysqli_query($conex, $sql_query_update);

while($row= mysqli_fetch_assoc($sql_result)){
    $sql_query_id = $row['id'];
    $sql_query_name = $row['nombre'];
    $sql_query_add = $row['direccion'];
    $sql_query_pho = $row['telefono'];
    $sql_query_email = $row['correo'];
    $sql_query_pass = $row['clave'];
    $sql_query_date = $row['fecha'];

    echo '
    <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Actualizar Informacion Usuario</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <!-- Modal Body -->
          <label for="">Id</label>
          <input type="text" class="form-control" name="idUpdate" value="'.$sql_query_id.'"  disabled></input>

          <label for="">Nombre</label>
          <input type="text" class="form-control" name="nameUpdate" value='.$sql_query_name.'" placeholder="Ejemplo: Alexis Sanchez"></input>
    
          <label for="">Direccion</label>
          <input type="text" class="form-control" name="addressUpdate" value="'.$sql_query_add.'" placeholder="Ejemplo: La Coila #681"></input>
    
          <label for="">Telefono</label>
          <input type="text" class="form-control" name="phoneUpdate" value="'.$sql_query_pho.'" placeholder="Ejemplo: +56923456789" ></input>
    
          <label for="">Correo</label>
          <input type="text" class="form-control" name="emailUpdate" value="'.$sql_query_email.'" placeholder="Ejemplo: nicolas.barrios@alumnos.ucn.cl" ></input>
    
          <label for="">Clave</label>
          <input type="text" class="form-control" name="passwordUpdate" value="'.$sql_query_pass.'" placeholder="Ejemplo: Hola123"></input>
        <!-- Modal Body -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="button" name="btn_update_user" class="btn btn-primary">Agregar</button>
          </div>
        </div>
      </div>
    </div>
    ';

   } 
?>