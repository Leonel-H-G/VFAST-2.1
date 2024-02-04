
  <!--NAVBAR-->
  <nav class="navbar sticky-top navbar-expand-lg navbar-light" style="background-image: linear-gradient(to left, rgb(255, 243, 0), rgb(243, 54, 66));">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold text-light" href="app.php">
        <img src="img/logo2.png" alt="" width="130" height="50" class="d-inline-block align-text-top">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="app.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="appCategorias.php">Categorías</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="appNovedades.php">Novedades</a>

          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="appRecomendaciones.php">Recomendaciones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="appDirectorio.php">Buscar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" data-bs-toggle="offcanvas" href="#offcanvasExample">Ayuda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" data-bs-toggle="offcanvas" href="../../GAME/index.html">GAME</a>
          </li>
          <!--apartado del perfil-->
          <div class="dropdown ">
            <button class="btn text-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              <svg class="bi text-light" width="20" height="25" fill="currentColor">
                <use xlink:href="library/icons/bootstrap-icons.svg#globe" />
              </svg>
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Español</a></li>
              <li><a class="dropdown-item" href="bodyanimated.php">Inglés</a></li>
            </ul>
          </div>

          <div class="flex-shrink-0 dropdown" style="margin-top: 5px;">
            <a href="#" class="d-block link-light text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">

            <span class="mx-2">Hola: &nbsp;<?php echo $lista['Nombre']; ?></span>
              <svg class="bi text-light" width="23" height="28" fill="currentColor">
                <use xlink:href="library/icons/bootstrap-icons.svg#person-fill" />
              </svg>
            </a>
            <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2" style="width: 300px;">
              <div class="row">
                <div class="col">
                </div>
              </div>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li>
                <a class="dropdown-item" href="appPerfil.php">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16>
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                  </svg> Perfil</a></li>


              <li>
                <hr class="dropdown-divider">
              </li>

              <li>
                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#CSesion">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-forward" viewBox="0 0 16 16">
                    <path d="M9.502 5.513a.144.144 0 0 0-.202.134V6.65a.5.5 0 0 1-.5.5H2.5v2.9h6.3a.5.5 0 0 1 .5.5v1.003c0 .108.11.176.202.134l3.984-2.933a.51.51 0 0 1 .042-.028.147.147 0 0 0 0-.252.51.51 0 0 1-.042-.028L9.502 5.513zM8.3 5.647a1.144 1.144 0 0 1 1.767-.96l3.994 2.94a1.147 1.147 0 0 1 0 1.946l-3.994 2.94a1.144 1.144 0 0 1-1.767-.96v-.503H2a.5.5 0 0 1-.5-.5v-3.9a.5.5 0 0 1 .5-.5h6.3v-.503z" />
                  </svg>Cerrar Sesion </a></li>
            </ul>
          </div>
        </ul>
        <!-- termina apartado del perfil-->



        <div class="col">
          <div class="row text-end">
            <div class="col mt-2">
              <a href="https://web.facebook.com/profile.php?id=100082946942193" target="_blank" class="text-decoration-none">
                <svg class="bi text-light" width="20" height="25" fill="currentColor">
                  <use xlink:href="library/icons/bootstrap-icons.svg#facebook" />
                </svg>
              </a>&nbsp;&nbsp;

              <a href="https://mobile.twitter.com/dlyp_md" target="_blank" class="text-decoration-none">
                <svg class="bi text-light" width="20" height="25" fill="currentColor">
                  <use xlink:href="library/icons/bootstrap-icons.svg#twitter" />
                </svg>
              </a>&nbsp;&nbsp;

              <a href="https://www.instagram.com/dlyp_marketingdigital/" target="_blank" class="text-decoration-none">
                <svg class="bi text-light" width="20" height="25" fill="currentColor">
                  <use xlink:href="library/icons/bootstrap-icons.svg#instagram" />
                </svg>
              </a>&nbsp;&nbsp;
            </div>
          </div>
        </div>

      </div>

    </div>
    <!--<nav class="navbar bg-danger">
      <div class="container-fluid">
        <form class="d-flex" role="search">
          <input class="form-control me-2" style="width: 250px;" type="search" placeholder="Buscar" aria-label="Search">
          <button class="btn btn-outline-success" style="background-color:rgb(255,255, 255); color: black;" type="submit">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
            </svg>
          </button>


        </form>
      </div>
    </nav>-->

  </nav>

  <!--NAVBAR-->





  <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasExampleLabel">Consulta nuestras Redes sociales  </h5>
  
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div>
      
      <li class="m-2" >    <svg class="bi text-primary" width="20" height="25" fill="currentColor">
                  <use xlink:href="library/icons/bootstrap-icons.svg#facebook" />
                </svg>
                <a href="" style="margin-left: 10px; text-decoration:none;">https//www.facebook.com</a>
              </li>

              <li class="m-2" >    <svg class="bi text-info" width="20" height="25" fill="currentColor">
                  <use xlink:href="library/icons/bootstrap-icons.svg#twitter" />
                </svg>
                <a href="" class="text-info" style="margin-left: 10px; text-decoration:none;">https//www.twitter.com</a>
              </li>


      </div>
     
    </div>
  </div>


  <!--modal Cerrar Sesion-->

  <div class="modal fade" id="CSesion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Cerrar Sesión</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container text-center">

        </div>
        <span class="text-center py-4">¿Estas seguro de cerrar sesión?</span>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="include/csesion.php" class="btn btn-danger">Cerrar Sesión</a>
      </div>
    </div>
  </div>
</div>
