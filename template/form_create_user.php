<?php
include("../database/create_user_web.php");
?>
<!-- Modal Agregar Nuevo Usuario -->
<div>
<form autocomplete="off" method="POST" id="create_Form">
<!-- Modal Agregar Nuevo Usuario -->
<div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Agregar Nuevo Usuario</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <!-- Modal Body -->
      <!-- Nombre -->
      <div>
        <label for="validationCustom01" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="nameCreate" placeholder="Ejemplo: Jennifer Lawrance"></input>
        <?php  ?>
      </div>

      <!-- Nombre -->
      <!-- Direccion -->
      <div>
        <label for="">Direccion</label>
        <input type="text" class="form-control" name="addressCreate"  placeholder="Ejemplo: La Coila #681"></input>       
      </div>

      <div>
        <label for="">Telefono</label>
        <input type="text" class="form-control" name="phoneCreate"  placeholder="Ejemplo: +56923456789" ></input>
      </div>

      <div>
        <label for="">Correo</label>
        <input type="text" class="form-control" name="emailCreate"  placeholder="Ejemplo: nicolas.barrios@alumnos.ucn.cl" ></input>
      </div>

      <div>
        <label for="">Clave</label>
        <input type="text" class="form-control" name="passwordCreate"  placeholder="Ejemplo: Hola123"></input>
      </div>

    <!-- Modal Body -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <input class="btn btn-primary" type="submit" name="btnCreate" id="idCreate" value="Agregar">
      </div>
    </div>
  </div>
</div>
<!-- Modal Agregar Nuevo Usuario -->
</form>


</div>