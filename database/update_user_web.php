<?php
//Conexion a la base de datos MySql
require("../database/conection.php");

//Varaible para mensaje de error
$inputError = "";
$emailError = "";

//Verificar si fue enviado y si el boton fue pulsado
if (isset($_POST['btn_update_user'])) {

        //Almacenar en variables los valores de cada Input del formulario
        $idUpdate = ($_POST['idUpdate']);
        $nameUpdate = ($_POST['nameUpdate']);
        $addressUpdate = ($_POST['addressUpdate']);
        $phoneUpdate = ($_POST['phoneUpdate']);
        $emailUpdate = ($_POST['emailUpdate']);
        $passwordUpdate = ($_POST['passwordUpdate']);
        $dateUpdate = date("d/m/y");

        //Si TODOS los campo  estan vacios o nulos
        if(empty($nameUpdate) && (empty($addressUpdate)) && (empty($phoneUpdate)) &&  (empty($emailUpdate)) && (empty($passwordUpdate)) ){
                $inputError = "Rellenar todos los campos para continuar. ";
        }
        //Si el campo del correo esta vacio o nulo
        if(empty($emailUpdate)){
                $emailError ="No se puede realizar cambios vacios. ";
        }else{

        //Si el formato del correo 
        if(filter_var($emailUpdate, FILTER_VALIDATE_EMAIL)){
                //Consultar si el correo a modificar ya existe en la base de datos
                $sql_query_email = "SELECT correo FROM usuario WHERE id = '$idUpdate' ";
                $sql_result = mysqli_query($conex, $sql_query_email);
                $update_email = mysqli_num_rows($sql_result);
                //Si el correo a utilzar existe actualmente, NO se actualizara
                    if($update_email > 0){
                        $emailError ="No puedes usar un correo existente. ";
                    }
        }else{
                //Actualizar datos del usuario
                $sql_update_users = "UPDATE usuario SET nombre='$nameUpdate',  direccion='$addressUpdate', telefono='$phoneUpdate'," + 
                            " correo='$emailUpdate', clave='$passwordUpdate' WHERE id = '$idUpdate' ";
        }
    }

        
   
}


?>