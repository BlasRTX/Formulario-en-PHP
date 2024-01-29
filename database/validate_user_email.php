<?php

/*llamar al archivo que contiene la conexion a la base de datos*/
require("../database/connection.php");

$emailExist = "";

//Validar que el boton de login para iniciar sesion haya sido presionado
if (isset($_POST['loginis'])) {
        //Obtener los valores enviados del login
        $email = $_POST['email'];
        $password = $_POST['password'];

        if($email != "" || $password != ""){ 
             if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                if((strlen($password) >= 8 ) && (preg_match('/[A-Za-z]+/', $password) && preg_match('/[0-9]+/', $password))){
                        //Preparar la informacion a consultar de la base de datos
                        $query = "SELECT * FROM usuario WHERE correo = '$email' AND clave='$password' ";
                        $result = mysqli_query($conex, $query);
                        //$val_query = mysqli_num_rows($result);
                        $val_query = mysqli_fetch_array($result);
                        //Validamos los privilegios del usuarios antes de acceder al sistema
                        if($val_query['id'] == 1){
                                header("Location: ../web/begin.php");
                                exit();        
                        }else{
                            if($val_query['id'] == 2){
                                //header("Location: ../web/client.php");
                                }
                        }

                }else{
                        ?>
            <h3 class="error" >clave incorrecto o no llenado correctamente. Vuelva a intentar.</h3>
            <?php
                }
        }else{
           ?>
            <h3 class="error" >Correo incorrecta o no llenado correctamente. Vuelva a intentar.</h3>
            <?php
        }

        }else{
                ?>
            <h3 class="error" >Debe rellenar campos para continuar.</h3>
            <?php
        }
        
    
}
//mysql_free_result($result);
//mysqli_close();
?>