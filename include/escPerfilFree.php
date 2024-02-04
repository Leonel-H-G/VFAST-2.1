<div class="container col-6 p-2 " style="border: 10px solid; border-color: #900D09; height: 600px; width: 600px; margin-top: 40px; border-radius: 30px;">


    <div id="lista">
        <a href="">
            <img src="img/perfil.jpg" class="rounded mx-auto d-block" alt="" width="350px" height="350px">
        </a>
    </div>





    <div class="text-center " style="margin-right: 10px; margin-left: 10px;">
        <h5 style="font-size: 30px; font-weight: bold;"><?php echo $lista['Nombre'];  ?></h5>

        <h5 style="font-size: 30px; font-weight: bold;"><?php echo $lista['User_Nickname']; ?></h5>
        <font color="#D0312D">
            <h5 style="font-size: 22px;"> <?php echo $lista['Email'] ?></h5>
        </font>

    </div>

</div>

<nav class="navbar navbar-expand-lg navbar-ligth bg-ligth">
    <div class="container-fluid col-md-8">
        <a href="app.php" id="Regresar" style="font-size: 25px; margin-top: 5px; background-color: transparent; color: #D0312D; text-decoration: none;">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
            </svg>
            Regresar
        </a>
        <a href="include/cerrar.php" id="cerrar" style="font-size: 25px; margin-top: 5px; background-color: transparent; color: #D0312D; text-decoration: none; ">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
            </svg>
            cerrar sesion
        </a>


        <a href="appEditarPerfil.php" id="Editar" style="font-size: 25px; margin-top: 5px; background-color: transparent; color: #D0312D; text-decoration: none;">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
            </svg>
            Editar
        </a>
    </div>

</nav>