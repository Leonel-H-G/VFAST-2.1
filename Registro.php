<?php
error_reporting(0);
include "include/connect.php";
include "include/pregist.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="js/jquery-3.6.1.min,js.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="css/stilos.css" type="text/css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!-- archivo de validacion de los campos -->
  <link rel="stylesheet" href="js/validar_campos.js">

  <!--Fonts-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">


  <title>VFast | Registrarse</title>

</head>

<body>
  <!--Main-->
  <div class="container col-12 p-5 mt-5 ">
    <div class="mt-2">
      <?php echo $alerta; ?>
    </div>

    <div class="row">
      

      <!--Formulario-->
      <div class="container col-6 border shadow p-2">
        <div class="row">
        <div style="float: left; margin-left: 1rem; margin-top: 1rem;">
            <a href="Login.php" id="Regresar" style=" background-color: transparent; color: #D0312D; text-decoration: none; position: absolute; margin: -0rem;  ">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
              </svg>
                <span class="h6 mx-1">Regresar</span>
            </a>
          </div>
        </div>
        
        <h1 class="text-center mt-3"><img src="img/logo.png" alt="" height="150" width="200"></h1>
        <h3 class="text-center">Registrarse</h3>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

          <label for="N_user" class="form-label mt-4 ms-5">Nombre de Usuario</label>
          <input type="text" class="form-control w-75 mx-auto" id="nickname2" name="nick" placeholder="Ingresa tu nombre de usuario" required>

          <label for="Nombre" class="form-label mt-4 ms-5">Nombre(s)</label>
          <input type="text" class="form-control w-75 mx-auto" id="Nombres" name="nombre" placeholder="Ingresa tu nombre" required>

          <label for="Apeliidos" class="form-label mt-4 ms-5">Apellido Paterno</label>
          <input type="text" class="form-control w-75 mx-auto" id="ApellidoP" name="apellP" placeholder="Ingresa tu Apellido Paterno" required>

          <label for="Apeliidos" class="form-label mt-4 ms-5">Apellido Materno</label>
          <input type="text" class="form-control w-75 mx-auto" id="ApellidoM" name="apellM" placeholder="Ingresa tu Apellido Materno" required>

          <label for="fNac" class="form-label mt-4 ms-5">Fecha de nacimiento</label>
          <input type="date" name="fnac" class="form-control w-75 mx-auto">


          <label for="Apeliidos" class="form-label mt-4 ms-5">Genero</label>
          <select name="genero" id="" class="form-select form-control w-75 mx-auto">
            <option selected>Selecciona tu genero</option>
            <option value="1">Masculino</option>
            <option value="2">Femenino</option>
            <option value="3">Prefiero no decirlo</option>
          </select>

          <label for="telefono" class="form-label mt-4 ms-5">Telefono</label>
          <input type="text" name="telefono" class="form-control w-75 mx-auto" placeholder="555555555" required>

          <label for="Mail" class="form-label mt-4 ms-5">Correo Electronico</label>
          <input type="email" class="form-control w-75 mx-auto" id="mail" name="correo" placeholder="name@example.com" required>

          <label for="Password" class="form-label mt-4 ms-5">Contraseña</label>
          <input type="password" class="form-control w-75 mx-auto" id="password" name="passw" placeholder="Ingresa tu contraseña" required>

          <label for="Password" class="form-label mt-4 ms-5">Confirmar Contraseña</label>
          <input type="password" class="form-control w-75 mx-auto mb-4" id="passwor" name="passwverify" placeholder="Confirma tu contraseña" required>

          <div class="form-check form-switch mt-4 ms-5 mb-4 ">
            <input class="form-check-input" type="checkbox" role="switch" id="ver" onclick="verpass (this);">
            <label class="form-check-label mb-2" for="flexSwitchCheckDefault">Ver Contraseñas</label>
          </div>

          <div class="form-check form-switch mt-4 ms-5 mb-5">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" role="switch" id="aviso" onclick="validar(this);">
            <label class="form-check-label" for="flexSwitchCheckChecked">
              <label for="">

                <a href="include/terminos.php" class="text-decoration-none text-dark" data-bs-toggle="modal" data-bs-target="#exampleModalLong"> Acepto terminos y condiciones</a>
              </label>
            </label>
          </div>

          


          <div class=" d-grid gap-2 col-6 mx-auto ">
            <input type="submit" value="Registrar" name="bntregistrar" id="registro" class="btn btn-danger mb-5">

          </div>

          <!-- Modal -->
          <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Aviso de Privacidad</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  V.Fast conforme a lo establecido a la Ley Federal de Protección de Datos Personales en Posesión de los Particulares de Los Estados Unidos Mexicanos ponemos a disposición de nuestros clientes, el presente aviso de privacidad.
                  El objetivo de esta Política de Privacidad es informarte sobre qué datos recogemos, por qué los recogemos y cómo puedes actualizarlos, gestionarlos, exportarlos y eliminarlos.
                  Los datos personales ingresados serán utilizados únicamente para las actividades internas de la empresa.
                  Los datos que solicitamos a nuestros clientes son: Nombre, Apellidos, Correo Electrónico con la finalidad poder identificar a cada usuario dentro de la página ya que se realizan acuerdos entre usuario y proveedor, sin embargo nos proporcionas información personal que incluye tu nombre y tu contraseña. También puedes añadir un número de teléfono o datos de pago a tu cuenta.
                  También se recopila la actividad dentro de la plataforma lugares registrados, viajes, interacciones, búsquedas.
                  Dicha información es recopilada con el fin de ofrecer una experiencia personalizada dentro de la plataforma
                  El presente aviso esta propenso a modificaciones en tal caso se notificará previamente a los usuarios.
                  Recogemos información para proporcionar los mejores servicios a todos nuestros usuarios: desde determinar información básica, como el idioma que hablas, hasta datos más complejos
                  Al utilizar nuestros servicios, nos confías tus datos. Entendemos que es una gran responsabilidad y nos esforzamos al máximo para proteger tu información y permitirte controlarla.

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Aceptar</button>

                </div>
              </div>
            </div>
          </div>

          <!-- redes -->

        </form>
      </div>
      <?php echo $mensaje; ?>
    </div>

  </div>

  <?php include 'terminos.php'; ?>

  <script src="js/bootstrap.js"></script>
  <script src="js/validar_campos.js"></script>
  <script src="js/evireen.js"></script>

  <script type="text/javascript">
    function verpass(cd) {
      if (cd.checked)
        $('#password,#passwor').attr("type", "text");
      else {
        $('#password,#passwor').attr("type", "password");
      }

    }

    document.getElementById('registro').disabled = true;

    function validar(cb) {
      if (cb.checked)
        document.getElementById('registro').disabled = false;
      else
        document.getElementById('registro').disabled = true;
    }
  </script>
</body>

</html>