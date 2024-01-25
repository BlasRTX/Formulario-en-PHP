-- Modifiacion de tablas--
--Nuevas tablas--
--Usuario--
CREATE TABLE Usuario (
    Id int(10) NOT NULL AUTO_INCREMENT, 
    Nombre varchar(255), 
    Direccion varchar(255), 
    Telefono varchar(255), 
    Correo varchar(255), 
    Clave int(10) NOT NULL, 
    Fecha date, 
    Estado bit(1), 
    NivelId int(10) NOT NULL, 
    PRIMARY KEY (Id));

SELECT Id, Nombre, Direccion, Telefono, Correo, Clave, Fecha, Estado, NivelId FROM Usuario;
INSERT INTO Usuario(Id, Nombre, Direccion, Telefono, Correo, Clave, Fecha, Estado, NivelId) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);
UPDATE Usuario SET Nombre = ?, Direccion = ?, Telefono = ?, Correo = ?, Clave = ?, Fecha = ?, Estado = ?, NivelId = ? WHERE Id = ?;
DELETE FROM Usuario WHERE Id = ?;

DROP TABLE IF EXISTS Usuario;
--Nivel--
CREATE TABLE Nivel (
    Id int(10) NOT NULL AUTO_INCREMENT, 
    Nombre varchar(255), 
    PRIMARY KEY (Id));

    SELECT Id, Nombre FROM Nivel;
    INSERT INTO Nivel(Id, Nombre) VALUES (?, ?);
    UPDATE Nivel SET Nombre = ? WHERE Id = ?;
    DELETE FROM Nivel WHERE Id = ?;

    DROP TABLE IF EXISTS Nivel;
--Usuario_Producto --
CREATE TABLE Usuario_Producto (
    UsuarioId int(10) NOT NULL, 
    ProductoId int(10) NOT NULL, 
    PRIMARY KEY (UsuarioId, ProductoId));

    SELECT UsuarioId, ProductoId FROM Usuario_Producto;
    INSERT INTO Usuario_Producto(UsuarioId, ProductoId) VALUES (?, ?);
    UPDATE Usuario_Producto SET  WHERE UsuarioId = ? AND ProductoId = ?;
    DELETE FROM Usuario_Producto WHERE UsuarioId = ? AND ProductoId = ?;

    DROP TABLE IF EXISTS Usuario_Producto;

--Producto --
CREATE TABLE Producto (
    Id int(10) NOT NULL AUTO_INCREMENT, 
    Nombre varchar(255), 
    Descripcion varchar(255), 
    PRIMARY KEY (Id));

    SELECT Id, Nombre, Descripcion FROM Producto;
    INSERT INTO Producto(Id, Nombre, Descripcion) VALUES (?, ?, ?);
    UPDATE Producto SET Nombre = ?, Descripcion = ? WHERE Id = ?;
    DELETE FROM Producto WHERE Id = ?;

    DROP TABLE IF EXISTS Producto;

-- Categoria --
CREATE TABLE Categoria (
    Id int(10) NOT NULL AUTO_INCREMENT, 
    Nombre int(10), 
    ProductoId int(10) NOT NULL, 
    PRIMARY KEY (Id));

    SELECT Id, Nombre, ProductoId FROM Categoria;
    INSERT INTO Categoria(Id, Nombre, ProductoId) VALUES (?, ?, ?);
    UPDATE Categoria SET Nombre = ?, ProductoId = ? WHERE Id = ?;
    DELETE FROM Categoria WHERE Id = ?;

    DROP TABLE IF EXISTS Categoria;

