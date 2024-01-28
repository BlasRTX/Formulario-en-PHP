<?php
include("../database/conection.php");


$nameError = "";
$addressError = "";
$phoneError="";
$emailError = "";
$passwordError = "";

$errorInput = "";

    if (isset($_POST["btncreate"]) ) {
        $nameCreate = ($_POST['nameCreate']);
        $addressCreate = ($_POST['addressCreate']);
        $phoneCreate = ($_POST['phoneCreate']);
        $emailCreate = ($_POST['emailCreate']);
        $passwordCreate = ($_POST['passwordCreate']);
        $dateCreate = date("d/m/y");

        if( (empty($nameCreate)) && (empty($addressCreate)) && (empty($phoneCreate)) && (empty($emailCreate)) && (empty($passwordCreate)) ) {
            $errorInput = "Rellenar TODOS los campos para continuar. ";
        }else{
        //Informacion para validar
        //Nombre
        //Si el nombre ingresado esta vacio o nulo
        if(empty($nameCreate)){
            $nameError = "El nombre es requerido. ";
        }else{
            //Si el nombre ingresado cumple con los caracteres
            if(!preg_match('/^[a-zA-Z\s]+$/', $nameCreate)){
                $nameError = "El nombre ingresado posee caracteres invalidos. ";
            }
        }
        //Direccion
        //Si direccion fue ingresada esta vacio o nulo
        if(empty($addressCreate)){
            $addressError = "La direccion es requerido. ";
        }else{
            //Si direccion ingresada cumple con los caracteres
            if(!preg_match('/^[a-zA-Z0-9\s\.,#\-]+$/', $addressCreate)){
                $addressError = "La direccion ingresada posee caracteres invalidos. ";
            }
        }
        //Telefono
        //Si el telefono ingresada esta vacio o nulo
        if(empty($phoneCreate)){
            $phoneError = "El numero de telefono es requerido. ";
        }else{
            //Si direccion ingresada cumple con los caracteres
            if(!preg_match('/^(\+?56)?(\s?)(0?9)(\s?)[1-9]\d{3}(\s?)\d{4}$/', $phoneCreate)){
                $phoneError = "El numero ingresado posee caracteres invalidos. ";
            }
        }
        //Email
        //Si direccion fue ingresada esta vacio o nulo
        if(empty(emailCreate)){
            $emailError = "El numero de telefono es requerido. ";
        }else{
        //Si direccion ingresada cumple con los caracteres
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $emailError= "El correo ingresado posee caracteres invalidos. ";
                }else{
                    //validar si el correo ya existe/esta en uso BD
                }
        }
        //Clave
        //Si la clave fue ingresada esta vacio o nulo
        if(empty($passwordCreate)){
            $passwordError = "La clave es requerida. ";
        }else{
        //Si la clave ingresada cumple con los caracteres
            if(strlen($passwordCreate) < 8){
                $passwordError = "El tamanio de la clave son 8 caracteres. ";
            }             
            if(!preg_match('/[A-Za-z]+/', $passwordCreate)){
                $passwordError = "Debe iniciar con 1 Mayuscula. ";
            }
            if(!preg_match('/[0-9]+/', $password)){
                $passwordError = "Cantidad de numeros recomendada: 3. ";
            }            
        }
        
      }//Fin else inicial

    }//Fin del if inicial
    
?>
