<?php
/*Llama la conexion de la base de datos*/
require("conection.php");

/*Llama al metodo post en donde se encuentran las casillas*/
if (isset($_POST['regist'])) {
    /*Llama al registro en donde se encuentran las casillas*/
    if (
        strlen($_POST['name'])    >= 1 &&
        strlen($_POST['address']) >= 1 &&
        strlen($_POST['phone'])   >= 1 &&
        strlen($_POST['email'])   >= 1 &&
        strlen($_POST['password']) >= 1
        ){
        /*Almacenar en variables*/
        //$name = trim($_POST['id']);
        $name = trim($_POST['name']);
        $address = trim($_POST['address']);
        $phone = trim($_POST['phone']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $date = date("d/m/y");

        /*Consultar en la base de datos*/
        $query = "SELECT nombre, direccion, telefono, correo, clave FROM `usuario` WHERE correo = 'email' OR clave = 'password' ";
        /*Consultar*/
        $resultquery = mysqli_query($conex, $query);
        /*SI el dato existe en la base de datos*/
        if(($resultquery) && ($queryrow = mysqli_num_rows($resultquery)) > 0){
        /*Si el dato existe en la base de datos*/
        ?>  
            <h3 class="success" >El usuario ya existe.</h3>
            <?php
        }
    }else{
        /*Insertar datos en el formulario.*/  
        $queryinsert = "INSERT INTO usuario(nombre, direccion, telefono, correo, clave, fecha)
        VALUES('$name', '$address', '$phone', '$email', '$password', '$date')";

        $resultqueryins = mysqli_query($conex, $queryinsert);

        if($resultqueryins > 0){
           /*Insercion correcta de datos en el formulario.*/  
        }
           /*Error de los datos en el formulario.*/  
             ?>
            <h3 class="error" >Rellene el formulario correctamente.</h3>
            <?php
        }
    }
 
?>
