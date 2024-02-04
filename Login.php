<?php
require "include/plogin.php";
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content=" dlyp diseño de marketing digital ">
    <meta name="Keyword" content="....">
    <meta name="description" content="165">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.6.1.min,js.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/logins.css">

    <title>Login VFAST</title>
</head>

<body>
<div class="mt-2">
          <?php echo $alerta; ?>
        </div>

    <div class="mx-auto d-block col-sm-12 col-md-12 col-lg-4 shadow p-3 mb-5 bg-body rounded position-absolute top-50 start-50 translate-middle">
        <form name="login" id="login" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <h1 class="text-center">Inicio De Sesión</h1>
            <img class="mx-auto d-block" src="img/logo.png" alt="" height="150" width="200">

            <div class="mx-auto d-block col-10">
                <label for="N_user" class="form-label">Nombre De Usario</label>
                <input type="text" class="form-control mb-4" id="nickname" name="nick" placeholder="Ingresa Tu Usuario">


                <label for="Password" class="form-label">Contraseña</label>
                <input type="password" class="form-control mb-4" id="password" name="passwordd" placeholder="Ingresa Tu Contraseña">

                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="ver" onclick="verpass (this);">
                    <label class="form-check-label mb-4" for="flexSwitchCheckDefault">Ver Contraseña</label>
                </div>


                <input type="submit" class="btn btn-danger mx-auto d-block col-sm-12 col-md-6 mb-3" name="btnentrar" value="Iniciar Sesión "  onclick="validar();">
            </div>

            <div class="row">
                <ul class="mt-3">
                    <li class="mb-4"><a href="recuperar.html" class="link-danger text-decoration-none ">¿Olvidaste Tu Contraseña?</a></li>
                    <li><a href="Registro.php" class="link-danger text-decoration-none">Crear cuenta</a></li>
                </ul>

            </div>

        </form>

    </div>

    <script type="text/javascript">
        function verpass(cd) {
            if (cd.checked)
                $('#password').attr("type", "text");
            else {
                $('#password').attr("type", "password");
            }

        };

         //Validacion de los campos //
         function validar(){
            let nic=document.getElementById('nickname').value;
            let passw=document.getElementById('password').value;

            if(nic==""){
                alert("Falta ingresar campos");
            }
            else if(passw==""){

                alert("Falta rellenar campos");
            }

            
        };
        

    </script>


</body>

</html>