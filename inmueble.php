<?php require 'variables/variables.php' ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include 'layout/archivosheader.php' ?>

    <title>Inmueble</title>
</head>

<body>
    <?php include 'layout/menu.php' ?>
    <div class="container-fluid body">
        <?php include 'layout/buscador.php' ?>
    </div>
    <div id="propiedades">
        <div class="container">
            <div class="row">
                <!-- propiedades -->
                <div class="col-12">
                    <div class="property-list">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <figure>
                                    <a href="#">
                                        <img src="img/no_image.png" alt="">
                                        <span class="overlay-1"></span>
                                    </a>
                                </figure>
                            </div>
                            <div class="col-12 col-md-6 row">
                                <div class="col-12 col-md-8">
                                    <h5 class="mb-0">Tipo de inmueble</h5>
                                    <h5 class="text-muted"> <small> Barrio, Ciudad </small></h5>
                                    <p>(añadir una pequeña descripción)</p>
                                </div>
                                <div class="col-12 col-md-4 text-md-right">
                                    <h6 class="pr-2">$ Precio</h6>
                                </div>
                                <div class="col-12">
                                    <ul id="list" class="row contenedor_icon" style="padding: 0%;">
                                        <li class="col-6 col-md-auto">Código:</li>
                                        <li class="col-6 col-md-auto border-left"><i class="fas fa-ruler"></i> m<sup>2</sup></li>
                                        <li class="col-6 col-md-auto border-left"><i class="fas fa-bed mr-2"></i></li>
                                        <li class="col-6 col-md-auto border-left"><i class="fas fa-bath mr-2"></i></li>
                                        <li class="col-12 col-md-auto ml-auto"><a href="detalle_inmueble.php" class="btn btn-dark rounded-0">Ver más</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin de propiedades -->
                <div class="col-12">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#">Atras</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">Siguiente</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>




    <?php include 'layout/footer.php' ?>

    <?php include('layout/archivosfooter.php'); ?>


</body>

</html>