<?php

$servidor= "localhost"; //servidor
$usuario="root"; //usuario del host
$pass=""; //contraseña 
$bd="dlyp"; //base de datos

$conecta=mysqli_connect($servidor, $usuario, $pass, $bd);
if($conecta -> connect_errno){
    die ('error al conectar la base de datos'.$conecta->connect_errno);
 
}

    

?>

