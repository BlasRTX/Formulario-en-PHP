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
            <input type="text" name="name" placeholder="Nombre"
        </div>

        <div class="input-wrapped">
            <input type="text" name="add" placeholder="Apellido"
        </div>

        <div class="input-wrapped">
            <input type="text" name="address" placeholder="Direccion"
        </div>

        <div class="input-wrapped">
            <input type="text" name="phone" placeholder="Telefono"
        </div>

        <div class="input-wrapped">
            <input type="text" name="email" placeholder="Correo electronico"
        </div>

        <div class="input-wrapped">
            <input type="text" name="password" placeholder="Contrasenia"
        </div>

        <input class="btn" type="submit" namespace="register" value="Enviar">

    </form>




</body>

</html>