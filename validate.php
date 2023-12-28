<?php

/*llamar al archivo que contiene la conexion a la base de datos*/
include("conection.php");

//Validar que el boton de login para iniciar sesion haya sido presionado
if (isset($_POST['loginess'])) {
        //Obtener los valores enviados del login
        $email = $_POST['email'];
        $password = $_POST['password'];

        //Realizar/Ejecutar consulta a la base de datos a travez de la funcion mysqli_query
        $query = "SELECT * FROM usuario WHERE correo = '$email' AND clave = '$password' ";
        $result = mysqli_query($conex, $query);
                //Si el usuario existe o no en la base de datos
        $val_query = mysqli_num_rows($result);

        if($val_query =! 0){
                //Inicio de sesion correcto
                ?>  
            <h3 class="success" >Bienvenido.</h3>
            <?php
        }else{
                //Inicio de sesion incorrecto
        }
}
?>