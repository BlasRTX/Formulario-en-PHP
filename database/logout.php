<?php
include("../database/conection.php");

//Cerrar sesion y volver a la pagina de inicio de sesion

session_start(); //Iniciar o reaundar sesion
session_unset(); //Libera todos los datos de la sesion
session_destroy(); //Desttruye los datos de la sesion()

header('Location: ../web/login.php'); //Regresar a iniciar sesion
exit;
?>