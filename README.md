# Formulario Web Basica PHP y MySQL

Formulario web básico realizado en PHP y MySQL.

![ ](https://github.com/BlasRTX/Formulario-en-PHP/blob/main/images/images/Logo/PHPMySQL%20LOGOS.png)

## Herramientas de desarrollo para la página web:
* **Visual Studio Code**
* **XAMPP**
* **PHP**
* **MySQL**


#### Visual Studio Code
Editor de código fuente gratuito que **permite trabajar con diversos lenguajes de programación**, admite gestionar tus propios atajos de teclado y refactorizar el código.

![ ](https://github.com/BlasRTX/Formulario-en-PHP/blob/main/images/images/Logo/VS%20Code%20LOGO.png)


#### XAMPP
Es un **paquete de instalación independiente de plataformas**, software libre que consiste principalmente en el sistema de gestión de base de datos MySQL, el servidor web Apache y los interpretes para el lenguaje srcipt: PHP y Perl.

Su nombre es un acrónimo de los programas que este mismo está conformado:
* Linux
* Apache
* MySQL
* PHP
* Perl


![ ](https://github.com/BlasRTX/Formulario-en-PHP/blob/main/images/images/Logo/XAMPP%20LOGO.png)

#### PHP
Este lenguaje se utiliza generalmente para **desarrollar el backend de una web**, el lado del servidor. 

Aun así, tiene numerosas utilidades en frontend. Es por esto que es uno de los principales lenguajes de programación en el mundo de la programación web. PHP del inglés Hypertext Preprocessor. 

#### MySQL
Es un sistema de **gestión de base de datos relacionales** de código abierto utilizando el modelo cliente-servidor.

En otras palabras, es una **colección de datos estructurados**.

#### CSS
Lenguaje que maneja el **diseño y presentación de las páginas web**, es decir, cómo lucen cuando un usuario las visita. Usado en el formulario.

#### Bootstrap 5
Framework CSS de código abierto que **favorece el desarrollo web** de un modo más sencillo y rápido. 

Incluye **plantillas de diseño basadas en HTML, CSS y JavaScript** con la que es posible **modificar tipografías, formularios, botones, tablas, navegaciones, menús desplegables**, etc.

## Herramientas de desarrollo
#### 1. Instalacion y uso de XAMPP
Para ejecutar el formulario web en un equipo de desarrollo local, hay que **instalar el paquete XAMPP**.

> [!NOTE]
>  Antes de iniciar la instalación de XAMPP, al trabajar con un servidor web gratuito es importante tener en cuenta que **no exista otro instalado anteriormente**.

Para ejecutar el formulario web en un equipo de desarrollo local, hay que instalar el paquete XAMPP disponible en su **plataforma web**: https://www.apachefriends.org/es/download.html

![ ](https://github.com/BlasRTX/Formulario-en-PHP/blob/main/images/images/XAMPP%20Instaler.png)

Una vez instalado y ejecutado XAMPP procedemos a iniciar los servicios de Apache y MySQL únicamente para el proyecto su **Panel de Control**. La primera vez Windows pedirá autorización.

![ ](https://github.com/BlasRTX/Formulario-en-PHP/blob/main/images/images/XAMPP%20Control%20Panel.png)

Deberá presionar el botón **Star** para iniciar, que luego cambiará a **Stop**, habilitando ambos servicios.


#### 2.  Desarrollo en Visual Studio Code
> [!NOTE]
>  Antes de trabajar con PHP en VS Code, **debe ser configurado manual** debido a que VS Code al ser un editor liviano no posee soporte para PHP directamente, si para otros lenguajes.

![ ](https://github.com/BlasRTX/Formulario-en-PHP/blob/main/images/images/VS%20Code%20PHP%20Extention.png)

Cualquier proyecto desarrollado en VS Code esta estructurado en un **directorio** para alojar los scripts PHP, CSS y todo lo relacionado con la configuración general de la plataforma web.

En este caso, el directorio para crear, configurar y guardar el formulario es bajo el mismo nombre.

Se crean los siguientes scripts para trabajar a continuación:
* Icon: Carpeta con iconos para formulario.
* connection.php : Conexión a la base de datos MySQL.
* index.php : Inicio de la página.
* register.php : Registro de datos a la base de datos.
* style.css : Estilos personalizados para el formulario.

![ ](https://github.com/BlasRTX/Formulario-en-PHP/blob/main/images/images/VS%20Code%20files%20form.png)

Código de scripts:

**index.php**

```php
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
        <input class="btn" type="submit" name="regist" value="Enviar">
    </form>
```
Boton
```php
<input class="btn" type="submit" name="regist" value="Enviar">
```
#### Instalar Bootstrap 5

Si vas a usar Bootstrap para crear tu sitio web, el primer paso será instalar el framework.

Para utilizar las herramientas proporcionadas, es importante seguir los pasos a través de su página web oficial: https://getbootstrap.com/docs/5.3/getting-started/introduction/

El resultado debería ser algo como esto:

```php
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
```

#### 3. Base de Datos

Una vez iniciado los servicios de Apache y MySQL, nos dirigimos a uno de los exploradores de internet disponibles y accedemos al siguiente link: http://localhost:8080/form/ en el cual, nos dirigirá al panel de administración web de XAMPP, conocida también como **phpMyAdmin**.

![ ](https://github.com/BlasRTX/Formulario-en-PHP/blob/main/images/images/phpmyadmin/phpmyadmin%20Pagina%20Web%201.png)

En el **panel izquierdo**, en la opción nueva para crear una base de datos.

![ ](https://github.com/BlasRTX/Formulario-en-PHP/blob/main/images/images/phpmyadmin/phpmyadmin%20Pagina%20Web%202.png)

Definir un **nombre** para la base de datos y dar click izquierdo para crear.

![ ](https://github.com/BlasRTX/Formulario-en-PHP/blob/main/images/images/phpmyadmin/phpmyadmin%20Pagina%20Web%203.png)


Se crea un script en PHP llamada conection.php la cual conectara el servidor de XAMPP con la base de datos previamente creada.

Conexión MySQL en VS Code:

**connection.php**
```php
<?php
/*Conexion base de datos */
$conex = mysqli_connect("localhost" , "root" , "", "formulario");
?>
```
**register.php**
```php
include("conection.php");
```
```php
if (isset($_POST['regist'])) {
    /*Llama al registro en donde se encuentran las casillas*/
    if (
        strlen($_POST['name'])    >= 1 &&
        strlen($_POST['address']) >= 1 &&
        strlen($_POST['phone'])   >= 1 &&
        strlen($_POST['email'])   >= 1 &&
        strlen($_POST['password']) >= 1
        ){
```
```php
/*Almacenar en variables*/
        //$name = trim($_POST['id']);
        $name = trim($_POST['name']);
        $address = trim($_POST['address']);
        $phone = trim($_POST['phone']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $date = date("d/m/y");
```
```php
 /*Insertar variables en la base de datos*/
        $queryinsert = "INSERT INTO usuario(nombre, direccion, telefono, correo, clave, fecha)
                  VALUES('$name', '$address', '$phone', '$email', '$password', '$date')";
```
```php
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
 
```

#### 5. Resultado
Luego de realizar los diferentes procesos para el desarrollo de la plataforma web, como ejecutar y configurar XAMPP para trabajar en conjunto con la base de datos en MySQL y elaborar la estructura del formulario en VS Code.

A continuación, se muestra el resultado funcional final:


![ ](https://github.com/BlasRTX/Formulario-en-PHP/blob/main/images/images/test/test1.png)

![ ](https://github.com/BlasRTX/Formulario-en-PHP/blob/main/images/images/test/test2.png)

![ ](https://github.com/BlasRTX/Formulario-en-PHP/blob/main/images/images/test/test3.png)



#### 4. Pruebas
Es importante trabajar en un entorno de pruebas, ya que al trabajar en un entorno aislado en el que el software presenta errores dentro de la ejecución, **este no recibirá ninguna repercusión y previniendo un error en tiempo real**.

Hacer pruebas de la página web en el mismo entorno en el que este alojado **garantiza una compatibilidad total al publicar el proyecto** y sus actualizaciones.

![ ](https://github.com/BlasRTX/Formulario-en-PHP/blob/main/images/images/test/test4.png)

Formulario no completado por casilla incompleta

## Conclusión
Aunque existen diferentes herramientas para el desarrollo de paginas web en la actualidad y que ofrecen a la vez más opciones enriquecedoras para el trabajo, no hay que olvidar que más del 50% de las plataformas web trabajan con PHP.

Además, es uno de los primeros lenguajes que se aprende para encaminar a una persona que aspira al desarrollo web.

Concluyendo, si bien existen nuevas herramientas y lenguajes para desarrollar paginas web, PHP sigue siendo una elección eficaz para muchos debido a su evolución constante y una gran cantidad de recursos, soporte extendido en línea que ayuda a resolver problemas y mantenimiento de páginas dinámicas.
