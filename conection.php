<?php

/*Conexion base de datos */
$conex = mysqli_connect("localhost" , "root" , "", "formulario");
/*Verificar conexion conla funcion mysqli_connect  */
if(!$conex){
/*Si falla la conexion, se muestra un error y se cierra la ejecucion  */
die("Conexion erronea: ". mysqli_connect_error());
}
/*Cerrar conexion con la base de datos MySQL  */
//mysqli_close($conex);

?>