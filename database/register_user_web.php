<?php
include("../database/conection.php");

    $nameError = null;
    $addressError = null;
    $phoneError=null;
    $emailError = null;
    $passwordError = null;
    $success = null;
    $errorError = null;

    if (!empty($_POST["btncreate"]) ) {
        $nameCreate = ($_POST['nameCreate']);
        $addressCreate = ($_POST['addressCreate']);
        $phoneCreate = ($_POST['phoneCreate']);
        $emailCreate = ($_POST['emailCreate']);
        $passwordCreate = ($_POST['passwordCreate']);
        $dateCreate = date("d/m/y");

        if($nameCreate != "" || $addressCreate != "" || $phoneCreate != "" ||  $emailCreate != "" ||  $passwordCreate != ""){
            if($nameCreate){
                if($addressCreate){
                    if($phoneCreate){
                        if($emailCreate){
                            if($passwordCreate){

                            }else{
                                ?>
                                <h3 class="error" >Clave no fue ingresado correctamente</h3>
                                <?php
                                $passwordError = "Clave no fue ingresado correctamente";
                            }

                        }else{
                            ?>
                            <h3 class="error" >Correo no fue ingresado correctamente</h3>
                            <?php
                            $emailError= "Correo no fue ingresado correctamente";
                        }

                    }else{
                        ?>
                        <h3 class="error" >Telefono no fue ingresado correctamente</h3>
                        <?php
                        $phoneError = "Telefono no fue ingresado correctamente";
                    }

                }else{
                    ?>
                    <h3 class="error" >Clave no fue ingresado correctamente</h3>
                    <?php
                    $addressCreate =  "Clave no fue ingresado correctamente";
                }

            }else{
                ?>
                <h3 class="error" >Nombre no fue ingresado correctamente</h3>
                <?php
                $nameError = "Nombre no fue ingresado correctamente";
            }

        }else{
            ?>
            <h3 class="error" >Debe rellenar todos los campos</h3>
            <?php

           $errorError = 'Debe rellenar todos los campos';

        }
    }
?>