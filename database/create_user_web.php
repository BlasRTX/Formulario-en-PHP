<?php
    /*Llama la conexion de la base de datos*/
    include("../database/conection.php");

    /*Variables para declaracion de errores en crear usuarios nuevos*/
    $nameError = null;
    $addressError = null; 
    $phoneError=null;
    $emailError = null;
    $passwordError = null;
    $success = null;
    $errorError = null;
    $email_exist = null;

    /* Llama al metodo post del modal form_create_user.php*/
    if (isset($_POST["btncreate"]) ) {
        $nameCreate = ($_POST['nameCreate']);
        $addressCreate = ($_POST['addressCreate']);
        $phoneCreate = ($_POST['phoneCreate']);
        $emailCreate = ($_POST['emailCreate']);
        $passwordCreate = ($_POST['passwordCreate']);
        $dateCreate = date("d/m/y");
        
        /*Validar si los campos no se encuentren vacios*/
        if($nameCreate != "" || $addressCreate != "" || $phoneCreate != "" ||  $emailCreate != "" ||  $passwordCreate != ""){

            if(preg_match('/^[a-zA-Z\s]+$/', $nameCreate)){

                if(preg_match('/^[a-zA-Z0-9\s\.,#\-]+$/', $addressCreate)){

                    if((preg_match('/^(\+?56)?(\s?)(0?9)(\s?)[1-9]\d{3}(\s?)\d{4}$/', $phoneCreate) || preg_match('/^\+?\d{1,3}[-\s]?\d{3,14}$/', $phoneCreate))){

                        if($emailCreate){

                            if(filter_var($passwordCreate, FILTER_VALIDATE_EMAIL)){

                                     $query = "SELECT * FROM usuario WHERE correo = 'email' ";
                                     $querycons = mysqli_query($conex, $query);
                                     $resultquery = mysqli_num_rows($querycons);
                                     if($resultquery > 0){

                                     $email_exist = "Existe un usuario con dicho correo asociado.";
                                 }else{

                                 }

                            }else{
                                $passwordError = "Clave no fue ingresado correctamente";
                            }

                        }else{
                            $emailError= "Correo no fue ingresado correctamente";
                        }

                    }else{
                        $phoneError = "Telefono no fue ingresado correctamente";
                    }

                }else{
                    $addressCreate =  "Clave no fue ingresado correctamente";
                }

            }else{
                $nameError = "Nombre no fue ingresado correctamente";
            }
        }else{
            $errorError = "Rellene los campos para continuar";
        }
    }
?>