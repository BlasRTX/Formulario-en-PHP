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

        $sql_update_users = "UPDATE usuario SET nombre='$nameUpdate',  direccion='$addressUpdate', telefono='$phoneUpdate'," + 
                            " correo='$emailUpdate', clave='$passwordUpdate' WHERE id = '$idUpdate' ";

}

?>