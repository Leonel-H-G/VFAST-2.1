<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/loader.css">
    <title>| VFAST | Lugares | Parques |</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mapa.css">

    <link rel="icon" type="image/png" sizes="16x16" href="img/Vfast.PNG.png">
</head>
<body>
  <!--<div class="contenedor_loader">
    <div class="loader"></div>
  </div>
-->
  <!--NAVBAR-->
    <?php include "navfree.php"; ?>
    <!--NAVBAR-->
    
    <!--EVENTO 1-->
    <div class="row row-cols-1 row-cols-md-2 g-4">
      <div class="col">
        <div class="mt-3 w-100 h-100" id="map"></div>
        <div class="card" style="background-color: transparent; border-color: transparent;">
          <div class="col">
            
    <!--<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15050.129382642193!2d-99.1332049!3d19.4326018!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4cff0c5cb291360c!2zWsOzY2Fsbw!5e0!3m2!1ses-419!2smx!4v1669860326181!5m2!1ses-419!2smx" style="border:0; height: auto; max-width: 100%; height: 400px; width: 900px; margin-top: 50px; border-radius: 30px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->
    </div>
    
  </div>
</div>
<!--EVENTO 1-->


<!--EVENTO 2-->
  <div class="col">
    <div class="card" style="background-color: transparent; border-color: transparent; ">
      <font color="crimson">
      <h5 class="card-title mt-2" style="font-size: 25px; font-weight: bold; text-align: center;">SELECCIÓN DE LUGAR</h5></font>

      <div class="contenedor bg-dark" style="height: auto; max-width: 100%; border-radius: 30px; width: 830px;">
        <ul class="nav nav-pills" style="display: flex; justify-content: center;">
          <li class="nav-item ">
            <a class="nav-link active bg-danger text-light"  aria-current="page" href="escritorio Lugar.html">VER TODO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="escritorio Fotos.html">FOTOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="escritorio Comentarios.html">COMENTARIOS</a>
          </li>
        </ul>
      </div>

      

      
      <div class="container" style="margin-top: 20px; height: auto; max-width: 100%;">
      <div class="contenedor" style="height: auto; max-width: 100%; "> 
        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups" id="modulos" style="margin-top: 5px; display: flex; justify-content: center;" >
        <div class="btn-group me-2" role="group" aria-label="First group">
          <a href="#">
          <button type="button" class="btn btn-light">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
            </svg>
          </button>
        </a>
        <a href="#">
          <button type="button" class="btn btn-light">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sign-turn-slight-right" viewBox="0 0 16 16">
              <path d="m8.335 6.982.8 1.386a.25.25 0 0 0 .451-.039l1.06-2.882a.25.25 0 0 0-.192-.333l-3.026-.523a.25.25 0 0 0-.26.371l.667 1.154-.621.373A2.5 2.5 0 0 0 6 8.632V11h1V8.632a1.5 1.5 0 0 1 .728-1.286l.607-.364Z"/>
              <path fill-rule="evenodd" d="M6.95.435c.58-.58 1.52-.58 2.1 0l6.515 6.516c.58.58.58 1.519 0 2.098L9.05 15.565c-.58.58-1.519.58-2.098 0L.435 9.05a1.482 1.482 0 0 1 0-2.098L6.95.435Zm1.4.7a.495.495 0 0 0-.7 0L1.134 7.65a.495.495 0 0 0 0 .7l6.516 6.516a.495.495 0 0 0 .7 0l6.516-6.516a.495.495 0 0 0 0-.7L8.35 1.134Z"/>
            </svg>
          </button>
        </a>
        <a href="#">
          <button type="button" class="btn btn-ligth">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-car-front-fill" viewBox="0 0 16 16">
              <path d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679c.033.161.049.325.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.807.807 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2Zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2ZM6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2H6ZM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17 1.247 0 3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z"/>
            </svg>
          </button>
          </a>
          <a href="#">
          <button type="button" class="btn btn-light">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-truck-front-fill" viewBox="0 0 16 16">
              <path d="M3.5 0A2.5 2.5 0 0 0 1 2.5v9c0 .818.393 1.544 1 2v2a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5V14h6v1.5a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-2c.607-.456 1-1.182 1-2v-9A2.5 2.5 0 0 0 12.5 0h-9ZM3 3a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v3.9c0 .625-.562 1.092-1.17.994C10.925 7.747 9.208 7.5 8 7.5c-1.208 0-2.925.247-3.83.394A1.008 1.008 0 0 1 3 6.9V3Zm1 9a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm8 0a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm-5-2h2a1 1 0 1 1 0 2H7a1 1 0 1 1 0-2Z"/>
            </svg>
          </button>
          </a>
          <a href="#">
          <button type="button" class="btn btn-light">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-universal-access" viewBox="0 0 16 16">
              <path d="M9.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0ZM6 5.5l-4.535-.442A.531.531 0 0 1 1.531 4H14.47a.531.531 0 0 1 .066 1.058L10 5.5V9l.452 6.42a.535.535 0 0 1-1.053.174L8.243 9.97c-.064-.252-.422-.252-.486 0l-1.156 5.624a.535.535 0 0 1-1.053-.174L6 9V5.5Z"/>
            </svg>
          </button>
          </a>
          <a href="#">
          <button type="button" class="btn btn-light">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bicycle" viewBox="0 0 16 16">
              <path d="M4 4.5a.5.5 0 0 1 .5-.5H6a.5.5 0 0 1 0 1v.5h4.14l.386-1.158A.5.5 0 0 1 11 4h1a.5.5 0 0 1 0 1h-.64l-.311.935.807 1.29a3 3 0 1 1-.848.53l-.508-.812-2.076 3.322A.5.5 0 0 1 8 10.5H5.959a3 3 0 1 1-1.815-3.274L5 5.856V5h-.5a.5.5 0 0 1-.5-.5zm1.5 2.443-.508.814c.5.444.85 1.054.967 1.743h1.139L5.5 6.943zM8 9.057 9.598 6.5H6.402L8 9.057zM4.937 9.5a1.997 1.997 0 0 0-.487-.877l-.548.877h1.035zM3.603 8.092A2 2 0 1 0 4.937 10.5H3a.5.5 0 0 1-.424-.765l1.027-1.643zm7.947.53a2 2 0 1 0 .848-.53l1.026 1.643a.5.5 0 1 1-.848.53L11.55 8.623z"/>
            </svg>
          </button>
          </a>
          <a href="#">
          <button type="button" class="btn btn-light">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-airplane-fill" viewBox="0 0 16 16">
              <path d="M6.428 1.151C6.708.591 7.213 0 8 0s1.292.592 1.572 1.151C9.861 1.73 10 2.431 10 3v3.691l5.17 2.585a1.5 1.5 0 0 1 .83 1.342V12a.5.5 0 0 1-.582.493l-5.507-.918-.375 2.253 1.318 1.318A.5.5 0 0 1 10.5 16h-5a.5.5 0 0 1-.354-.854l1.319-1.318-.376-2.253-5.507.918A.5.5 0 0 1 0 12v-1.382a1.5 1.5 0 0 1 .83-1.342L6 6.691V3c0-.568.14-1.271.428-1.849Z"/>
            </svg>
          </button>
          </a>
        </div>
      </div>
      </div>

      <div>

      <div class="container-fluid1">
        <form class="d-flex">
          <input class="form-control mx-5" style="border-radius: 50px; margin-top: 20px;" type="search" placeholder="Lugar" aria-label="Search">
        </form>
      </div>
      <div class="container-fluid1">
        <form class="d-flex">
          <input class="form-control mx-5" style="border-radius: 70px; margin-top: 30px;" type="search" placeholder="Ubicación" aria-label="Search">
        </form>
    </div>

        <div class="card" style="background-color: transparent; border-color: transparent; max-width: 550px; margin-top: 40px;" id="desc">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="img/parque.jpg" class="img-fluid rounded-start" alt="" width="300px" height="200px">
            </div>

            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Parque Hundido</h5>
                <p class="card-text">Hacienda de Pastejé 116, Hacienda de Echegaray, 53300 Naucalpan de Juárez, Méx. Tiempo aproximado de llegada en automóvil: 18 minutos. Costo aproximado $120-$180
                </p>
              </div>
            </div>
          </div>
        </div>




  
</div>
 </div> 

 <script>
  function findMe(){
    var output = document.getElementById('map');
    //Verficar si soporta geolocalización
    if (navigator.geolocation){
        output.innerHTML = "<p>Tu navegador soporta Geolocalización</p>";
    } else {
        output.innerHTML = "<p>Tu navegador no soporta Geolocalización</p>";
    }

    //Obtenemos Lat y Long
    function localizacion(posicion){
        var latitude = posicion.coords.latitude;
        var longitude = posicion.coords.longitude;

        output.innerHTML = "<p>Latitud: " + latitude + "<br> Longitud: " + longitude + "</br> </p>";
        const myLatLng = {
            lat: latitude,
            lng: longitude
        };
        const map = new google.maps.Map(document.getElementById("map"),{
            zoom: 15,
            center: myLatLng,
        });
        new google.maps.Marker({
        position: myLatLng,
        map,
        title: "Te encuentras aqui",
        });
    }

    function error(){
        output.innerHTML = "<p>No se pudo obtener tu ubicación</p>";
    }
    navigator.geolocation.getCurrentPosition(localizacion, error);
}
 </script>

 <!--EVENTO 2-->

 <script src="js/loader.js"></script>
 <script src="js/main.js"></script>
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9v7GKa_ArlrG0bHwW3NbQfSPjB5WsKdA&callback=initMap&v=weekly"
      defer
    >
    //AIzaSyC9v7GKa_ArlrG0bHwW3NbQfSPjB5WsKdA
  </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>   
</body>
</html>