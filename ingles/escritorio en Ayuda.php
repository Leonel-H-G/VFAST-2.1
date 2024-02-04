<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

     <link rel="stylesheet" type="text/css" href="../css/traductor.css">
      <link rel="stylesheet" type="text/css" href="../css/loader.css">
    <title>| VFAST | Help |</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    
        <link rel="icon" type="image/png" sizes="16x16" href="img/Vfast.PNG.png">

</head>

<body>
<div class="contenedor_loader">
    <div class="loader"></div>
  </div>



     <!--NAVBAR-->

     <?php
     require "navfreein.php";
     ?>
    

     <!--NAVBAR-->


    <!--PARTE SUPERIOR-->

    <!--SUPERIOR-->
    <center><div class="card mt-2 py-3" style="width: 700px; height: auto; max-width: 100%; background-color: transparent; border-color: transparent;">
  <div class="card-body bg-dark text-light" style="font-weight: bold; border-radius: 30px; font-size: 45px;">
    <img src="img/ubicacion.png" alt="" width="40px">HAVE A PROBLEM?<img src="img/ubicacion.png" alt="" width="40px">
    <font color="crimson">
      <p class="card-title bg-light " style="font-weight: bold; border-radius: 30px; font-size: 30px;">WE ARE HERE TO HELP YOU...</p>
    </font>
  </div>
</div></center>
<!--SUPERIOR-->

    <center></center><center><div class="card" style="width: 600px; height: auto; max-width: 100%; background-color: transparent; border-color: transparent;">
  <img src="img/n1.jpg" class="card-img-top" alt="..." style="border-radius: 500px;">
  <div class="card-body">
      <h5 class="card-title mt-2" style="font-size: 33px; font-weight: bold; text-align: center;">HOW CAN WE HELP?</h5>
   <font color="crimson">
      <h5 class="card-title mt-2" style="font-size: 24px; text-align: center;">Choose the topic related to your case</h5></font>
        <div class="contenedor bg-dark" style="height: auto; max-width: 100%; border-radius: 30px; width: 830px;">
        <ul class="nav nav-pills" style="display: flex; justify-content: center;">
          <li class="nav-item ">
            <a class="nav-link active bg-danger text-light"  aria-current="page" href="escritorio en Ayuda.html">ACCOUNT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="escritorio en Tecnico.html">TECHNICAL</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="escritorio en Membresia.html">MEMBERSHIP</a>
          </li>
        </ul>
      </div>
  </div>
</div></center><!--PARTE SUPERIOR-->

 <center><div class="card" style=" background-color: transparent; border-color: transparent; width: 700px;">
<div class="container-fluid1">
 <form class="login" name="login">
  <h4 class="bg-warning" style="width: 300px; border-radius: 50px;">Username</h4>
        <input type="text" placeholder="Enter username" id="Name" class="form-control w-75 mx-auto" style="border-radius: 50px; margin-top: 20px; margin-bottom: 20px;">
    
        <h4 class="bg-warning" style="width: 300px; border-radius: 50px;">Email</h4>
        <input type="password" placeholder="Enter your email" id="Pass" class="form-control w-75 mx-auto" style="border-radius: 50px; margin-top: 20px; margin-bottom: 20px;">

        <h4 class="bg-warning" style="width: 300px; border-radius: 50px;">Problem</h4>
        <input type="text" placeholder="" id="Name" class="form-control w-75 mx-auto" style="border-radius: 20px; margin-top: 20px; margin-bottom: 20px; height: 80px;">

        <div class=" d-grid gap-2 col-6 mx-auto mb-5">
                      <button class="btn btn-danger" style="border-radius: 30px;" 50px;type="button" href="#" onclick="Contacto()">Send</button>
                    </div>
                     </form>

       
    </div>

    </div></center>










    <script src="js/loader.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/traductor.js"></script>
</body>
</html>