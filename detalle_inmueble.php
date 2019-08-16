<?php require 'variables/variables.php';
require 'controllers/detalleInmuebleController.php';
$page = 'Inmuebles' ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include 'layout/archivosheader.php' ?>
    <link rel="stylesheet" href="css/carousel.inmueble.css">
    <title>Clientes</title>
</head>

<body>
    <?php include 'layout/menu.php' ?>
    <div id="contenido_total" class="contaider-fluid body">
        <div class="row col-12  d-flex justify-content-center p-4 ">
            <div class="col-5 ">
                <div class="property-title ">
                    <h4> <?php echo $r['Tipo_Inmueble'] . ' en ' . $r['Gestion']; ?>
                        <!-- Validar precio de venta y arriendo -->
                        <?php if ($r['Gestion'] == 'Arriendo') {
                            echo '<h3>$ ' . $r['ValorCanon'] . '</h3>';
                        } else if ($r['Gestion'] == 'Venta') {
                            echo '<h3>$ ' . $r['ValorVenta'] . '</h3>';
                        } else {
                            echo '<h3>$ ' . $r['ValorCanon'] . ' /$' . $r['ValorVenta'] . '</h3>';
                        }
                        ?>
                    </h4>
                    <h5><?php echo $r['barrio'] . ', ' . $r['ciudad'] ?></h5>
                    <div>
                        <div id="carouselExampleFade" class=" mt-3 carousel slide carousel-fade " data-ride="carousel">
                            <div class="carousel-inner">
                                <?php
                                if (!isset($r['fotos']) || count($r['fotos']) == 0) {
                                    echo 'div class="carousel-item ">
                                            <img src="images/no_image.png" class="" alt="...">
                                            </div>
                                        ';
                                } else {
                                    echo '<div class="carousel-item active">
                                            <img src="' . $r['fotos'][0]['foto'] . '" class="" alt="...">
                                            </div>
                                            ';
                                    for ($i = 1; $i < count($r['fotos']); $i++) {
                                        echo '<div class="carousel-item">
                                            <img src="' . $r['fotos'][$i]['foto'] . '" class="" alt="...">
                                            </div>
                                            ';
                                    }
                                }; ?>
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
                                <p class=""><?php echo $r['descripcionlarga']; ?></p>
                            </div>
                        </div>
                        <div class=" col-12 mt-5">
                            <div id="referencia_inmueble" class="property-detail-wrapper ">
                                <?php
                                if (count($r['caracteristicasInternas']) > 0) {
                                    echo '
                                            <h4 class="property-single-detail-title">Caracteristicas Internas</h4>
                                            <ul">';
                                    for ($i = 0; $i < count($r['caracteristicasInternas']); $i++) {
                                        $caracteristicas = ltrim($r['caracteristicasInternas'][$i]['Descripcion']);
                                        echo '<li>' . $caracteristicas . '</li>';
                                    }
                                    echo  '</ul>';
                                }
                                ?>
                            </div>
                        </div>
                        <div class=" col-12 mt-5">
                            <div id="referencia_inmueble" class="property-detail-wrapper ">
                                <?php
                                if (count($r['caracteristicasExternas']) > 0) {
                                    echo '
                                            <h4 class="property-single-detail-title">Caracteristicas Externas</h4>
                                                <ul">';
                                    for ($i = 0; $i < count($r['caracteristicasExternas']); $i++) {
                                        $caracteristicas = ltrim($r['caracteristicasExternas'][$i]['Descripcion']);
                                        echo '<li>' . $caracteristicas . '</li>';
                                    }
                                    echo  '</ul>';
                                }
                                ?>
                            </div>
                        </div>
                        <div class=" col-12 mt-5">
                            <div id="referencia_inmueble" class="property-detail-wrapper ">
                                <?php
                                if (count($r['caracteristicasAlrededores']) > 0) {
                                    echo '
                                            <h4 class="property-single-detail-title">Caracteristicas Alrededores</h4>
                                                <ul">';
                                    for ($i = 0; $i < count($r['caracteristicasAlrededores']); $i++) {
                                        $caracteristicas = ltrim($r['caracteristicasAlrededores'][$i]['Descripcion']);
                                        echo '<li>' . $caracteristicas . '</li>';
                                    }
                                    echo  '</ul>';
                                }
                                ?>
                            </div>
                        </div>
                        <?php if ($r['video'] != "") {
                            echo '
                            <div class=" col-12 mt-5">
                                    <h4 class="property-single-detail-title">Video Alrededores</h4>
                                            <div class="row">
                                                <div class="col-12 col-md-4">
                                                    <iframe src="' . $r['video'] . '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                </div>
                                    ';
                        } ?>
                    </div>
                </div>
            </div>

            <div id="buscador_inmueble" class="col-5  ">
                <div class="search-porperties text-left">
                    <h6 class="sidebar-title text-center"> Encuentra tu inmueble ideal</h6>
                    <form class="search-box">
                        <input type="text" id='codigo_buscar' class="form-control rounded-0" placeholder="codigo">
                        <select id="ciudad_buscar" class="form-control rounded-0">
                            <option selected>Ciudad</option>
                        </select>
                        <select id="barrio_buscar" class="form-control rounded-0">
                            <option selected>Barrio</option>
                        </select>
                        <select id="tipo_inmueble_buscar" class="form-control rounded-0">
                            <option selected> Tipo de Inmueble</option>
                        </select>
                        <select id="tipo_gestion_buscar" class="form-control rounded-0">
                            <option selected>Tipo de gestión</option>
                        </select>
                        <input type="text" id='area_minima_buscar' class="form-control rounded-0" placeholder="Area Minima">
                        <input type="text" id='area_maxima_buscar' class="form-control rounded-0"placeholder="Area Maxima">
                        <button type="submit" class="btn btn-dark rounded-0 col-12">Buscar</button>
                    </form>
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
                            <h4 class="mb-0">Propiedades similares</h4>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <?php similares($r['IdCiudad'], $r['IdTpInm']); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>


        <?php include 'layout/footer.php' ?>

        <?php include('layout/archivosfooter.php'); ?>


</body>

</html>