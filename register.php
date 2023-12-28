<?php
/*<!--llamar al archivo que contiene la conexion a la base de datos-->*/
include("conection.php");

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
        /*Insertar variables en la base de datos*/
        $queryinsert = "INSERT INTO usuario(nombre, direccion, telefono, correo, clave, fecha)
                  VALUES('$name', '$address', '$phone', '$email', '$password', '$date')";
        /*Consultar insercion de los datos*/
        $result = mysqli_query($conex, $queryinsert);
        /*Si realizar*/
        if($result){
            /*Insercion correcta.*/    
            ?>  
            <h3 class="success" >Registro realizado con exito.</h3>
            <?php
            }else{
                /*Insercion erronea.*/
                ?>
                <h3 class="error" >Que pasa master? Ocurrio un error. Volver a intentar.</h3>
                <?php
            }
        }
        else{
            /*Insercion incompleta por falta de datos en formulario.*/  
            ?>
            <h3 class="error" >Rellene el formulario correctamente.</h3>
            <?php
        }
    }
 
?>
