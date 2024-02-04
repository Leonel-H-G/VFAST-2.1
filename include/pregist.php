 <?php
  include "connect.php";
  if (isset($_POST['bntregistrar'])) {

    $nombres = $conecta->real_escape_string($_POST['nombre']);
    $apellido1 = $conecta->real_escape_string($_POST['apellP']);
    $apellido2 = $conecta->real_escape_string($_POST['apellM']);
    $genero = $conecta->real_escape_string($_POST['genero']);
    $correo = $conecta->real_escape_string($_POST['correo']);
    $nickname = $conecta->real_escape_string($_POST['nick']);
    $tusuario = 2;
    $fnac = $conecta->real_escape_string($_POST['fnac']);
    $estatus = 1;
    $long = 19.451482;
    $lat = 99.249833;
    $telefono = $conecta->real_escape_string($_POST['telefono']);
    $contra = $conecta->real_escape_string($_POST['passw']);
    $verifContra = $conecta->real_escape_string($_POST['passwverify']);

    $contraM = md5($contra);

    $online = 0;

    $img_user = "imagen_user_2.png";



    $validar = "SELECT * FROM usuarios WHERE Email = '$correo' or User_Nickname = '$nickname'";
    $validacon = $conecta->query($validar);
    if ($validacon->num_rows>0) {

      $alerta.= "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
      <strong>  Tu Nickname y/o Correo ya se encuentran registrados </strong>
      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";

    } else {

      if ($contra == $verifContra) {

        $conin = "INSERT INTO usuarios(Nombre, ApellidosP, ApellidoM, Id_Genero, Email, User_Nickname, Password, Id_Tusuario, 
        F_nac, Id_estatus, Longitud, Latitud, Telefono, Online, img_user) 
        VALUES ('$nombres', '$apellido1', '$apellido2', '$genero', '$correo', '$nickname', '$contraM', '$tusuario', '$fnac', 
        '$estatus', '$long', '$lat', '$telefono', '$online', '$img_user')";
        $guarcon = $conecta->query($conin);

        if ($guarcon > 0) {

          //alerta de registro exitoso y redirigir
          $alerta.= "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
          <strong>  Registro exitoso</strong>
          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
          </div>";

          header("refresh:2;Login.php");

        } else {

          //alerta de registro fallido

          $alerta.= "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
          <strong>  Registro fallido</strong>
          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
          </div>";

          header("refresh:2; Registro.php");
        }
      }
    }
  }


?>