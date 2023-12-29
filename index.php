<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<!--Formulario para registrar usuario-->
    <form method="post">
        <h2>Formulario</h2>
        <p>Iniciar registro</p>
        <div class="input-wrapped">
            <!--Campo para el nombre del usuario-->
            <input type="text" name="name" placeholder="Nombre" required>
            <img class="input-icon" src="icon/usuario.png" alt="">
        </div>
        <div class="input-wrapped">
            <!--Campo para el direccion del usuario-->
            <input type="text" name="address" placeholder="Direccion" required>
            <img class="input-icon" src="icon/marcador.png" alt="">
        </div>
        <div class="input-wrapped">
            <!--Campo para el telefono del usuario-->
            <input type="text" name="phone" placeholder="Telefono" required>
            <img class="input-icon" src="icon/llamada-telefonica.png" alt="">
        </div>
        <div class="input-wrapped">
            <!--Campo para el correo del usuario-->
            <input type="text" name="email" placeholder="Correo electronico" required>
            <img class="input-icon" src="icon/email.png" alt="">
        </div>
        <div class="input-wrapped">
            <!--Campo para el password del usuario-->
            <input type="text" name="password" placeholder="Contrasenia" required>
            <img class="input-icon" src="icon/email.png" alt="">
        </div>

        <!--Boton para registrar el usuario-->
        <input class="btn" type="submit" name="regist" value="Enviar">
        <a href="login.php">Ya tienes una cuenta? Iniciar Sesion.</a>
    </form>
<!--llamar al archivo que contiene el registro de los datos a la base de datos-->
    <?php
    include("register.php");
    include("login.php");
    ?>




</body>

</html>