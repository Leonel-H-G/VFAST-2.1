<?php
error_reporting(0);
session_start();
include "connect.php"; //cambiar a required parameter

if(isset($_POST['btnentrar'])){

    //agregar campos de acciones

    $accion1 = "Ingreso a la Plataforma";
    $accion2 = "Salida de la plataforma";


    $usuari= $conecta->real_escape_string($_POST['nick']);
    $passw=$conecta->real_escape_string(md5($_POST['passwordd']));

//consulta donde se extrae los datos de BD

//agregar campo de status y online

$consul= "SELECT * FROM usuarios WHERE User_Nickname = '$usuari' and Password = '$passw'";
if ($res=$conecta->query($consul)) {
    while ($row = $res->fetch_array()) {
        $userok=$row['User_Nickname'];
        $pasok=$row['Password'];
    }

    $res->close();
}
$conecta->close();
if (isset($usuari) && isset($passw)) {
    if ($usuari==$userok && $passw==$pasok) {
        $_SESSION['login']=TRUE;
        $_SESSION['User_Nickname'] =$usuari;
        header("location:app.php");
    }
    else{
        /*header("location:recuperar.html");*/
        $alerta .= "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
        <strong>Tus datos son incorrectos, verifica tu información.</strong>
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
        
    }
}
}


?>
<script src="js/evireen.js"></script>