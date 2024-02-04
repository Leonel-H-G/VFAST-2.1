
  <?php 
include "include/img.php";
?>
  
  <!--PARTE SUPERIOR-->

  <center>
    <div class="card" style="width: 700px; height: auto; max-width: 100%; background-color: transparent; border-color: transparent;">
      <!-- <div class="card-body">
        <h1 class="card-title bg-dark text-light" style="font-weight: bold; border-radius: 30px;">EVENTOS DE TEMPORADAA</h1>
      </div> -->
    </div>
  </center>

  <center>
    <div class="card" style="width: 700px; height: auto; max-width: 100%; background-color: transparent; border-color: transparent;">
      <div class="card-body">
        <font color="crimson">
          <h1 class="card-title bg-light " style="font-weight: bold; border-radius: 30px; font-size: 36px;">¿Quieres un fin de semana increíble?</h1>
        </font>
      </div>
    </div>
  </center>

  <center></center>
  <center>
    <div class="card" style="width: 900px; height: auto; max-width: 100%; background-color: transparent; border-color: transparent;">
      <div>
        <?php include './slilug.php'; ?>
        <!-- <div class="card-body">
          <p class="card-text" style="font-size: 20px;">El Desfile de Día de Muertos, como parte de la tradición mexicana, busca recordar y conmemorar los difuntos.</p>
        </div> -->
      </div>

    </div>
  </center><!--PARTE SUPERIOR-->



  <hr color="#900603" style="border: 6px solid;">

  <!--EVENTO 1-->
  <div class="row row-cols-1 row-cols-md-2 g-4">
    <div class="col">
      <div class="card shadow" style="background-color: transparent; border-color: transparent;">
        <!-- <a href="#">
          <button type="button" class="btn btn-dark" style="font-size: 20px; font-weight: bold;">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-airplane-fill" viewBox="0 0 16 16">
              <path d="M6.428 1.151C6.708.591 7.213 0 8 0s1.292.592 1.572 1.151C9.861 1.73 10 2.431 10 3v3.691l5.17 2.585a1.5 1.5 0 0 1 .83 1.342V12a.5.5 0 0 1-.582.493l-5.507-.918-.375 2.253 1.318 1.318A.5.5 0 0 1 10.5 16h-5a.5.5 0 0 1-.354-.854l1.319-1.318-.376-2.253-5.507.918A.5.5 0 0 1 0 12v-1.382a1.5 1.5 0 0 1 .83-1.342L6 6.691V3c0-.568.14-1.271.428-1.849Z" />
            </svg>
            - 15 Dic -
          </button>
        </a> -->
        <h5 class="card-title bg-danger text-center text-light mt-2 p-1" style="border-radius: 8px; font-size: 25px;">Festividad Zocalo CDMX</h5>
          <img src="img/img_lugares/<?php echo $funct['Img']; ?>" class="card-img-top mx-auto d-block img-fluid" alt="..." style="width:480px; heigth:100px;  padding: 20px;">
        <div class="card-body">

          <p class="card-text text-center text-wrap">El alumbrado decorativo navideño en el Zócalo de la Ciudad de México se encendió este lunes. Estará todo diciembre y hasta el Día de Reyes.<br>
            En un breve mensaje la Jefa de Gobierno, se haran actividades en el Centro Histórico con una visión ecológica.</p>
          <center><a href="bodyanimated.php" class="btn btn-warning" style=" border-radius: 8px; width: 240px; font-weight: bold;">Mas sobre...</a></center>
        </div>
      </div>
    </div>
    <!--EVENTO 1-->



    <!--EVENTO 2-->
    <div class="col">
      <div class="card shadow" style="background-color: transparent; border-color: transparent;">
        <!-- <a href="#">
          <button type="button" class="btn btn-dark" style="font-size: 20px; font-weight: bold;">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-airplane-fill" viewBox="0 0 16 16">
              <path d="M6.428 1.151C6.708.591 7.213 0 8 0s1.292.592 1.572 1.151C9.861 1.73 10 2.431 10 3v3.691l5.17 2.585a1.5 1.5 0 0 1 .83 1.342V12a.5.5 0 0 1-.582.493l-5.507-.918-.375 2.253 1.318 1.318A.5.5 0 0 1 10.5 16h-5a.5.5 0 0 1-.354-.854l1.319-1.318-.376-2.253-5.507.918A.5.5 0 0 1 0 12v-1.382a1.5 1.5 0 0 1 .83-1.342L6 6.691V3c0-.568.14-1.271.428-1.849Z" />
            </svg>
            - 20 Dic -
          </button>
        </a> -->
        <h5 class="card-title bg-danger text-center text-light mt-2 alig p-1" style="border-radius: 8px; font-size: 25px; ">Festividad Monumento a la Revolución</h5>
        <img src="img/img_lugares/<?php echo $tier['Img']; ?>" class="card-img-top mx-auto d-block img-fluid" alt="..." style="width:480px; heigth:100px;  padding: 20px;">
        <div class="card-body">

          <p class="card-text text-center">Este año la Pista de Hielo que mide 200 metros cuadrados que se instalo en la explanada del Monumento a la Revolución, a un costado se coloco un árbol navideño y adornos navideños.<br>
            La pista de hielo tiene un horario de 9:30 a 21:15 horas, y estará hasta el 11 de enero.</p>
          <center><a href="bodyanimated.php" class="btn btn-warning mt-4" style="border-radius: 8x; width: 240px; font-weight: bold;">Mas sobre...</a></center>
        </div>
      </div>
    </div>
  </div>
  <!--EVENTO 2-->


  <!--BOTON MAS-->
  <center>
    <a href="bodyanimated.php" class="btn btn-dark mt-3" style="width: 300px;border-radius: 8px; font-size: 25px; font-weight: bold;">Ver más eventos...</a>
  </center>
  <!--BOTON MAS-->

  <hr color="#900603" style="border: 6px solid;">
