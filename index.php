<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <form method="post">
        <h2>Formulario</h2>
        <p>Iniciar registro</p>

        <div class="input-wrapped">
            <input type="text" name="name" placeholder="Nombre">
            <img class="input-icon" src="icon/usuario.png" alt="">
        </div>

        <div class="input-wrapped">
            <input type="text" name="address" placeholder="Direccion">
            <img class="input-icon" src="icon/marcador.png" alt="">
        </div>

        <div class="input-wrapped">
            <input type="text" name="phone" placeholder="Telefono">
            <img class="input-icon" src="icon/llamada-telefonica.png" alt="">
        </div>

        <div class="input-wrapped">
            <input type="text" name="email" placeholder="Correo electronico">
            <img class="input-icon" src="icon/email.png" alt="">
        </div>

        <div class="input-wrapped">
            <input type="text" name="password" placeholder="Contrasenia">
            <img class="input-icon" src="icon/cerrar.png" alt="">
        </div>

        <input class="btn" type="submit" namespace="register" value="Enviar">

    </form>




</body>

</html>