<?php

/*llamar al archivo que contiene la conexion a la base de datos*/
require("conection.php");

//Validar que el boton de login para iniciar sesion haya sido presionado
if (isset($_POST['loginess'])) {
        //Obtener los valores enviados del login
        $email = $_POST['email'];
        $password = $_POST['password'];

        if($email != "" || $password != ""){ 
             if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                if((strlen($password) >= 8 ) && (preg_match('/[A-Za-z]+/', $password) && preg_match('/[0-9]+/', $password))){
                        $query = "SELECT * FROM usuario WHERE correo = '$email' AND clave = '$password' ";
                        $result = mysqli_query($conex, $query);
                        $val_query = mysqli_num_rows($result);

                        if($val_query =! 0){
                                ?>
                                <h3 class="success" >Entra a inicio.</h3>
                                <?php
                        }else{
                                ?>
                                <h3 class="error" >Error.</h3>
                                <?php
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