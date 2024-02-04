<?php
include 'include/connect.php';
include 'include/config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

     <link rel="stylesheet" type="text/css" href="css/traductor.css">
      <link rel="stylesheet" type="text/css" href="css/loader.css">
      <link rel="stylesheet" href="css/animation.css">
	<link rel="stylesheet" href="css/reset.css"><!--slider-->
    <title>| VFAST | Eventos |</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/gh/askask11/multi-language@0.1.4/dist/multi-language.min.js" integrity="sha256-xL5PbSBwYLKYaUvdDP2S/lnF9s3oAPm/92GnACZBe2c=" crossorigin="anonymous"></script>
    
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

if($tUser == $freeUser){
    include 'include/navFree.php';
    include 'escFree.php';
    include 'public slider.php';
}elseif($tUser == $premiumUser){

    include 'include/navPremium.php';
    include 'escFree.php';
}


?>

<script src="js/loader.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/traductor.js"></script>    
</body>
</html>