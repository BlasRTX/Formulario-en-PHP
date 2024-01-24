<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="stylelogin.css">
</head>
<body>
    <!--Campo para el login del usuario-->
<form method="post">
        <h2>Bienvenido.</h2>
        <p>Iniciar Sesion</p>
        <div class="input-wrapped">
            <!--Campo para el correo del usuario-->
            <input type="text" name="email" placeholder="Correo electronico" required>
            <img class="input-icon" src="icon/email.png" alt="">
        </div>
        <div class="input-wrapped">
            <!--Campo para la clave del usuario-->
            <input type="password" name="password" placeholder="Contrasenia" required>
            <img class="input-icon" src="icon/cerrar.png" alt="">
        </div>
        <!--Boton para registrar el usuario-->
        <input class="btn" type="submit" name="loginis" value="Iniciar Sesion">
        <a href="index.php" > No tienes cuenta? Registrar.<a/>     
    </form>   

    <?php
    include("validate.php");
    ?>

</body>
</html>