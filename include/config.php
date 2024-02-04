<?php

error_reporting(0);
session_start();

$usari = $_SESSION['User_Nickname'];

if(!isset($usari)){
    header("location:Login.php");
}

$q = "SELECT u.Id_usuarios, u.Nombre, u.ApellidosP, u.ApellidoM, u.Id_Genero, u.Email, u.User_Nickname, u.Password, u.Id_Tusuario, u.F_nac, u.Id_estatus, u.Longitud, u.Latitud, u.Telefono, u.Online, u.img_user, t.Id_Tusuario, t.NombreTusu, t.Descripcion 
    FROM usuarios u INNER JOIN tusuario t ON u.Id_Tusuario = t.Id_Tusuario WHERE User_Nickname = '$usari'";
$ejeq = $conecta->query($q);
$lista = $ejeq->fetch_assoc();

// agregar validacion de tiempo de inicio de sesion
ini_Set('date.timezone','America/Mexico_City');
$fecha = date('Y-m-d');
$tiempo = date('H:i:s', time());
$hora = date("H");
$dia = 7;
$tarde = 13;
$noche = 20;
$saludo = "";
$Accion = "Ingreso a la plataforma";
$Accion1 = "Salida de la plataforma";
if($hora > $tarde){
  $saludo = "Buenos dias";
}
else if($hora > $tarde){
  $saludo = "Buenas tardes";
}
else if($hora > $noche){
  $saludo = "Buenas noches";
}

$consulta = "SELECT * FROM usuarios WHERE User_Nickname = '$usari'";
$r = $conecta->query($consulta);
$extraer = $r->fetch_array();
if($extraer > 0){
  $user = $extraer;
  $Online = $user['Id_Usuarios'];
  $on = "UPDATE usuarios SET Online = '1' WHERE Id_Usuarios = '$Online'";
  $line = $conecta->query($on);
}

// validacion de tiempo expirado dentro de la sesion
// if(isset($_SESSION['time'])){
//   damos el timepo e segundos para determinar cuando expira la sesion
//   $inactivo = 500; // 15 minutos
//   calculo tiempo y se resta lo inactivo
//   $tiempo = time() - $_SESSION['time'];
//   verificar el tiempo inactivo dentro del aplicativo
//   if($tiempo > $inactivo){
//     actualizar el campo online
//     $on = "UPDATE usuarios SET Online = '0' WHERE Id_Usuario = $Online";
//     $line = $conecta->query($on);
//     registrar dentro del historial 
//     $historialS = "INSERT INTO Historial(Id_Usuario, FechaH, Accion, HoraH)VALUES('$Online','$fecha','$Accion1','$tiempo')";
//     $insertHistoS = $conect->query($historialS);
//     olvidar la sesion
//     session_unset();
//     destruyo la sesion
//     session_destroy();
//     rederigir la pagina al login
//     header("location:Login.php");
//     exit();
//   }
// }
// $_SESSION['time'] = time();





//Configuracion de la zona horaria 







/*$q = "SELECT U.Id_Usuario, U.Nombre, U.ApellidoP, U.ApellidoM, U.Id_Genero, U.Email, U.Nick, U.Password, G.Id_Genero, G.NomGenero 
        FROM usuarios U INNER JOIN genero G ON U.Id_Genero = G.Id_Genero WHERE Nick = '$usari'";
$ejq = $conecta->query($q);
$list = $ejq->fetch_assoc();*/
?>