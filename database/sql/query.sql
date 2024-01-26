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

--Consultar cuenta existente utilizando correo--
SELECT correo FROM usuario WHERE correo = '$email' ";

--Insertar nueva cuenta--
"INSERT INTO usuario(nombre, direccion, telefono, correo, clave, fecha) VALUES --('$name', '$address', '$phone', '$email', '$password', '$date')";

-- Consultar usuarios basado en ID--
sql = "SELECT * FROM `usuario` WHERE ID='$id' ";

--Actualizar usuarios--
sql = ($conex, " UPDATE `usuario` SET `nombre`='',`direccion`='',`telefono`='',`correo`='',`clave`='',`fecha`='' WHERE `id`='' ");

--Eliminar--
sql = " DELETE FROM `usuario` WHERE `id`='' ";