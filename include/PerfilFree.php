
    <!-- <nav class="navbar navbar-expand-lg navbar-ligth bg-ligth">
        <div class="container-fluid col-md-8 d-flex justify-content-end">
            <a href="" id="Regresar" style="font-size: 25px; margin-top: 5px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                    <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                  </svg>
                  Regresar
            </a>
            <a href="appEditarPerfil.php" id="Editar" style="font-size: 25px; margin-top: 5px;" class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                  </svg>
                  Editar
            </a>
        </div>
    </nav> -->
    <!-- <div >
      <a href="#" id="Free">
          Usuario Free
      </a>
    </div>
      <div>
      <a href="PerfilPremium.html" id="Premium">
          Usuario Premium
      </a>
    </div>
      <div>
      <a href="PerfilSistem.html" id="Sistem">
          Usuario Sistemas
      </a>
    </div> -->
    <div id="lista" class="mt-5">
        <a href="">
        <img src="img/perfil.jpg" class="rounded mx-auto d-block" alt="" width="20%">
        </a>
    </div>
    <div class="mb-5">
    <h5 style="font-size: 30px; font-weight: bold;"><?php echo $lista['Nombre'];  ?></h5>
    <h5 style="font-size: 30px; font-weight: bold;"><?php echo $lista['User_Nickname']; ?></h5>
        <h5><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
          </svg>
            De Naucalpan, EDOMEX</h5>
        <h5>Busco lugares interesantes y tranquilos para poder disfrutar en compañía.
        </h5>
    </div>
 