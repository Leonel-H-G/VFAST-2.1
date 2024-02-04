<?php
include "include/connect.php";
include 'include/config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="css/loader.css">
     <link rel="stylesheet" href="css/animation.css">
    <title>| VFAST | Perfil |</title>
    <link rel="stylesheet" href="css/estiloC.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/perfil.css">
  
    <link rel="icon" type="image/png" sizes="16x16" href="img/Vfast.PNG.png">
</head>
<body>
    <div class="contenedor_loader">
    <div class="loader"></div>
  </div>


  <?php
    $tUser = $lista['Id_Tusuario'];

    $freeUser = "2";
    $premiumUser = "1";

    if ($tUser == $freeUser) {
        include 'include/navFree.php';
        include 'include/PerfilFree.php';
        include 'public slider.php';
    } elseif ($tUser == $premiumUser) {

        include 'include/navPremium.php';
        include 'include/PerfilPremium.php';
    }


    ?>


<script src="js/loader.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/traductor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>