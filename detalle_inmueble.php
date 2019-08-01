<?php require 'variables/variables.php' ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include 'layout/archivosheader.php' ?>

    <title>Clientes</title>
</head>

<body>
    <?php include 'layout/menu.php' ?>
    <div id="contenido_total" class="contaider-fluid body">
        <div class="row col-12  d-flex justify-content-center p-4 ">
            <div class="col-5 ">
                <div class="property-title ">
                    <h4>Tipo de inmueble y tipo de gestión
                        <h3>$Precio</h3>
                    </h4>
                    <h5>Ubicación</h5>
                    <div>
                        <div id="carouselExampleFade" class=" mt-3 carousel slide carousel-fade " data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/no_image.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/no_image.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/no_image.png" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <div class=" col-12 mt-5">
                            <div id="referencia_inmueble" class="property-detail-wrapper ">
                                <h4 class="property-single-detail-title">Descripción</h4>
                                <ul>
                                    <li>
                                        <div class="title">
                                            <p>Redes sociales</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="title">
                                            <p> imprimir ficha</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="title">
                                            <p>Características internas</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="title">
                                            <p>Alrededores</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="title">
                                            <p>Video</p>
                                        </div>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <div class="title">
                                            <p>Mapa de ubicación </p>
                                        </div>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="buscador_inmueble" class="col-5  ">
                <div class="search-porperties text-left">
                    <h6 class="sidebar-title text-center"> Encuentra tu inmueble ideal</h6>
                    <div class="search-box">
                        <input type="text" name="name" placeholder="Código">
                        <input type="text" name="name" placeholder="Ciudad">
                        <input type="text" name="name" placeholder="Barrio">
                        <input type="text" name="name" placeholder="Tipo de Inmueble">
                        <input type="text" name="name" placeholder="Precio">
                        <a href="detalle_inmueble.php" class="btn btn-dark rounded-0 col-12 "><span><i class="fa fa-search"></i> Buscar</span></a>
                    </div>
                </div>
                <div>
                    <div class="side-bar-agent-detail-wrapper p-4 ">
                        <h6 class="sidebar-title text-center">Contacto con el asesor</h6>
                        <div class="side-bar-agent-detail mt-3">
                            <figure>
                                <img id="img_inmueble" src="img/no_image.png" alt="">
                            </figure>
                            <ul class="side-bar-agent">
                                <li><i class="fa fa-map-marker"></i> Nombre</li>
                                <li><i class="fa fa-phone"></i> Teléfono</li>
                                <li><a href="mailto:angela@domain.com"><i class="fa fa-envelope"></i> Correo</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="side-bar-agent-detail-wrapper p-4 ">
                        <div class="search-box daily-email bg2 text-center">
                            <h4>Propiedades similares</h4>
                            <input type="email" name="email" placeholder="Tipo inmueble">
                            <input type="email" name="email" placeholder="Ciudad">
                            <a href="detalle_inmueble.php" class="btn btn-dark rounded-0 col-12 "><span><i class="fa fa-search"></i> Buscar</span></a>
                        </div>
                    </div>
                </div>
            </div>


        </div>


        <?php include 'layout/footer.php' ?>

        <?php include('layout/archivosfooter.php'); ?>


</body>

</html>