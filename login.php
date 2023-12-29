<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <!--Campo para el login del usuario-->
<form method="post" action="home.php">
        <h2>Formulario</h2>
        <p>Iniciar registro</p>
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
        <input class="btn" type="submit" name="loginess" value="Iniciar Sesion">
        
        
    </form>
    
</body>
</html>