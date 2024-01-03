<?php
/*Llama la conexion de la base de datos*/
require("conection.php");

/*1 Llama al metodo post en donde se encuentran las casillas*/
if (isset($_POST['regist'])) {
        $name = ($_POST['name']);
        $address = ($_POST['address']);
        $phone = ($_POST['phone']);
        $email = ($_POST['email']);
        $password = ($_POST['password']);
        $date = date("d/m/y");

        /*Validar si los campos no se encuentren vacios*/
        if($name != "" ||  $address != "" || $phone != "" || $email != "" || $password != ""){   
             /*Validar si el nombre fue inscrito correctamente*/  
            if(preg_match('/^[a-zA-Z\s]+$/', $name)){
                 /*Validar si la direccion fue inscrita correctamente**/
                if(preg_match('/^[a-zA-Z0-9\s\.,#\-]+$/', $address)){
                    /*Validar si el telefono fue inscrito correctamente**/
                    if(preg_match('/^(\+?56)?(\s?)(0?9)(\s?)[1-9]\d{3}(\s?)\d{4}$/', $phone) || preg_match('/^\+?\d{1,3}[-\s]?\d{3,14}$/', $phone) ){
                        /*Validar si el correo fue inscrito correctamente**/
                        if( (strpos($email, "@") == false) || filtrer_var(FILTER_VALIDATE_EMAIL, $email)){
                            /*Validar si la clave fue inscrita correctamente**/
                            /*Valor minimo de caracteres: 8**/
                            /*Mayuscula: 1**/
                            /*Minuscula: 4**/
                            /*Numeros disponibles: 3**/
                            /*Ejemplo: Holaa123**/
                            if((strlen($password) >= 8 ) && preg_match('/[A-Za-z]+/', $password) && preg_match('/[0-9]+/', $password)){
                                ?>
                                <h3 class="success" >YESSS.</h3>
                                <?php

                            }else{
                                ?>
                                <h3 class="error" >clave no fue rellenado correctamente.</h3>
                                <?php
                            }
                        }else{
                            ?>
                            <h3 class="error" >Correo no fue rellenado correctamente.</h3>
                            <?php
                        }
                    }else{
                        ?>
                        <h3 class="error" >Numero no fue rellenado correctamente.</h3>
                        <?php
                    }
                }else{
                    ?>
                    <h3 class="error" >Direccion no fue rellenado correctamente.</h3>
                    <?php
                }
            }else{
                ?>
                <h3 class="error" >Nombre no fue rellenado correctamente.</h3>
                <?php
            }          
        }else{
            ?>
            <h3 class="error" >Rellene el formulario para continuar.</h3>
            <?php
        }
}
 
?>