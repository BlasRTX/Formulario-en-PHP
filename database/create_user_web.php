<?php
    /*Llama la conexion de la base de datos*/
    //include("../database/conection.php");


    /* Llama al metodo post del modal form_create_user.php*/
    if (isset($_POST["btncreate"]) ) {
        $nameCreate = ($_POST['nameCreate']);
        $addressCreate = ($_POST['addressCreate']);
        $phoneCreate = ($_POST['phoneCreate']);
        $emailCreate = ($_POST['emailCreate']);
        $passwordCreate = ($_POST['passwordCreate']);
        $dateCreate = date("d/m/y");


        if(empty($nameCreate) || (preg_match('/^[a-zA-Z\s]+$/', $nameCreate))  ){
            echo "Nombre no fue ingresado correctamente";
        }

        if(empty($addressCreate) || (preg_match('/^[a-zA-Z0-9\s\.,#\-]+$/', $addressCreate)) ){
            echo "Direccion no fue ingresado correctamente";
        }

        if(empty($phoneCreate) || ( (preg_match('/^(\+?56)?(\s?)(0?9)(\s?)[1-9]\d{3}(\s?)\d{4}$/', $phoneCreate)) && (!preg_match('/^\+?\d{1,3}[-\s]?\d{3,14}$/', $phoneCreate))  ) ){
            echo "Telefono no fue ingresado correctamente";
        }

        if(empty($emailCreate) || (filter_var($emailCreate, FILTER_VALIDATE_EMAIL)) ){
                //Ver si el correo ya existen en base de datos
               $query = "SELECT correo FROM usuario WHERE correo = '$emailCreate' ";
               $querycons = mysqli_query($conex, $query);
               $resultquery = mysqli_num_rows($querycons);
                   if($resultquery > 0){
                         echo "Existe un usuario con el correo asociado.";
                   }
        }else{
            echo "Correo no fue ingresado correctamente";
        }

        if(empty($passwordCreate) || (!filter_var($passwordCreate, FILTER_VALIDATE_EMAIL)) ){
            echo "Clave no fue ingresado correctamente";
        }

       
    }else{
        echo "Rellene los campos para continuar";
    }

?>