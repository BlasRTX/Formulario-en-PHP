--Consulas SQL PHPMyAdmin --

--Select --
SELECT * FROM `usuario` WHERE 1

SELECT `id`, `nombre`, `direccion`, `telefono`, `correo`, `clave`, `fecha` FROM `usuario` WHERE 1

--Insertar --
INSERT INTO `usuario`(`id`, `nombre`, `direccion`, `telefono`, `correo`, `clave`, `fecha`) VALUES c

--Actualizar--
UPDATE `usuario` SET `id`='[value-1]',`nombre`='[value-2]',`direccion`='[value-3]',`telefono`='[value-4]',`correo`='[value-5]',`clave`='[value-6]',`fecha`='[value-7]' WHERE 1

--Eliminar--
DELETE FROM `usuario` WHERE 0

--Creacion de consultas dentro del proyecto--

--Consultar cuenta existente utilizando correo y clave--
SELECT * FROM usuario WHERE correo = '$email' AND clave = '$password' ";

--Insertar nueva cuenta--
"INSERT INTO usuario(nombre, direccion, telefono, correo, clave, fecha) VALUES --('$name', '$address', '$phone', '$email', '$password', '$date')";


--Creacion de consultas SQL con NUEVAS TABLAS--