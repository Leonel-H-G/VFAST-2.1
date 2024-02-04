<?php
include "include/connect.php";
//require "query.php";

$consulta="SELECT * FROM lugares ORDER BY NomLugar ASC   ";
$ejconsul=$conecta->query($consulta);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>tabla dinamica</title>
  
</head>
<body>
  <div class="conrainer">
    <div class="col-sm-12 col-md-12 col-lg-12">
      <h2 class=" text-center"> Tabla Directorios</h2>

      <div class="table-responsive table-hover">
        <table name="tabla" class="td_tabla">
          <thead class="text-muted">
            <th class="text-center"> Nombre</th>
    
            <th class="text-center"> Descripcion</th>

    
            <th class="text-center"> Calle</th>
    
            <th class="text-center"> Telefono </th>

            

            <th class="text-center"> Opciones</th>
            
    
          </thead>
          <tbody>
          <?php while($row=$ejconsul->fetch_assoc()){?>
            <tr>
              <td><?php  echo $row ['NomLugar']; ?></td>
              <td><?php  echo $row ['DescripcionL']; ?></td>
              <td><?php  echo $row ['CalleL']; ?></td>
              <td><?php  echo $row ['TelefonoL']; ?></td>
              <td><?php  echo $row ['EmailLugar']; ?></td>

              <td> <img src="./img/img_lugares/<?php echo $row ['Img']; ?>" style="width: 100px; "></td>

                
            </tr>

            <?php }?>
          </tbody>
         </table>
      

    </div>
  </div>



  </div>
</body>
</html>