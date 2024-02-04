<?php
session_start();
include 'connect.php';

$usari = $_SESSION['User_Nickname'];

if(empty($usari)){ 
    header("location:Login.php");
    exit;
}

$q = "SELECT * FROM usuarios WHERE User_Nickname = '$usari'";
$ejq = $conecta->query($q);
$result = $ejq->fetch_array();

if(!empty($result)){
    $online = $result['Id_Usuarios'];
    $qry = "UPDATE usuarios SET Online = '0' WHERE Id_Usuarios = '$online'";
    $r = $conecta->query($qry);
}

session_unset();
session_destroy();
header("location:../Login.php");
exit;

?>