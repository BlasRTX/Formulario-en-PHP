<?php

include("../database/conection.php");

if(isset($_GET['id'])){
    $idDelete = $_GET['id'];

    $sql_delete_user = "DELETE FROM usuario WHERE id = '$idDelete' ";
    $sql_result = mysqli_query($conex, $sql_delete_user);

    if($sql_result > 0){
        //Uusario eliminado
    }else{
        //Error al eliminar usuario
    }



}


?>