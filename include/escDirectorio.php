<center>
    <div class="card" style="width: 500px; height: auto; max-width: 100%; background-color: transparent; border-color: transparent;">
        <div class="card-body mt-3 d-flex flex-column align-items-center">
            <div class="container p-3">
                <h1 class="card-title bg-dark text-light" style="font-weight: bold; border-radius: 20px; font-size: 55px;">
                    DIRECTORIO
                </h1>
            </div>
            <div class="container m-3">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="d-flex">
                    <input class="form-control me-2" type="text" name="Buscar" placeholder="Buscar por nombre, estado, municipio o categoria..." aria-label="Search">

                    <button type="submit" class="btn btn-primary" name="btnBuscar">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</center>

<div class="galeria">
    <!-- <h1 class="bg-dark text-light col-2 mx-auto d-block" style="border-radius:8px;">Lugares</h1> -->
    <!-- <div class="linea"></div> -->
    <div class="contenedor-imagenes">
        <?php
        echo $tabla;
        ?>

    </div>
</div>



