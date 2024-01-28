<?php
require("../database/conection.php");

if (isset($_POST['btn_update_user'])) {

        $idUpdate = ($_POST['idUpdate']);
        $nameUpdate = ($_POST['nameUpdate']);
        $addressUpdate = ($_POST['addressUpdate']);
        $phoneUpdate = ($_POST['phoneUpdate']);
        $emailUpdate = ($_POST['emailUpdate']);
        $passwordUpdate = ($_POST['passwordUpdate']);
        $dateUpdate = date("d/m/y");

        if(filter_var($emailUpdate, FILTER_VALIDATE_EMAIL)){
                $sql_query_email = "SELECT correo FROM usuario WHERE id = '$idUpdate' ";
                $sql_result = mysqli_query($conex, $sql_query_email);
                $update_email = mysqli_num_rows($sql_result);

                    if($update_email > 0){

                    }
        }else{
                $sql_update_users = "UPDATE usuario SET nombre='$nameUpdate',  direccion='$addressUpdate', telefono='$phoneUpdate'," + 
                            " correo='$emailUpdate', clave='$passwordUpdate' WHERE id = '$idUpdate' ";
        }
   
}


?>