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
    <title>Detalle | Inmueble</title>
</head>

<body>
    <?php include 'layout/menu.php' ?>
    <div id="" class="contaider-fluid body">
        <div class="container" style="margin-top: 60px;" id="detalle_inmueble">
            <div class="row">
                <div class="col-md-12 col-lg-7">
                    <div class="col-md-12 d-flex bd-highlight">
                        <div class="col-6 mr-auto bd-highlight">
                            <h2 class="tipo_inm"><Strong><?php echo $r['Tipo_Inmueble'] . ' en ' . $r['Gestion']; ?></Strong></h2>
                            <h5 class="p_detalle"><?php echo $r['barrio'] . ', ' . $r['ciudad'] ?></h5>
                        </div>
                        <div class="col-6 bd-highlight precio text-right" style="color: red;">
                            <?php if ($r['Gestion'] == 'Arriendo') {
                                echo '<h3 class="precio">$ ' . $r['ValorCanon'] . '</h3>';
                            } else if ($r['Gestion'] == 'Venta') {
                                echo '<h3 class="precio">$ ' . $r['ValorVenta'] . '</h3>';
                            } else {
                                echo '<h3 class="precio">$ ' . $r['ValorCanon'] . ' /$' . $r['ValorVenta'] . '</h3>';
                            }
                            ?>
                        </div>
                    </div>
                    <div>
                        <div class="col-md-12 col-12 col-lg-12">
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner tamaño_cont_carrousel">
                                    <?php
                                    if (!isset($r['fotos']) || count($r['fotos']) == 0) {
                                        echo 'div  class="carousel-item ">
                                            <img style="    object-fit: contain;
                                            width: 100%;
                                            " src="images/no_image.png" class="" alt="...">
                                            </div>
                                        ';
                                    } else {
                                        echo '<div  class="carousel-item active">
                                            <img style="    object-fit: contain;
                                            width: 100%;
                                            " src="' . $r['fotos'][0]['foto'] . '" class="" alt="...">
                                            </div>
                                            ';
                                        for ($i = 1; $i < count($r['fotos']); $i++) {
                                            echo '<div  class="carousel-item">
                                            <img style="    object-fit: contain;
                                            width: 100%;
                                            " src="' . $r['fotos'][$i]['foto'] . '" class="" alt="...">
                                            </div>
                                            ';
                                        }
                                    }; ?>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-12 row  ">
                            <div class="col-md-6 col-lg-6 col-12 contenerdor_booton_conta">
                                <button style="margin-top: 18px;" type="button" class="btn btn-danger rounded-0 col-6 compartir_boton" name=""><a class="color_blanco_url" href="https://simicrm.app/mcomercialweb/fichas_tecnicas/fichatec3.php?reg=60-<?php echo $co ?>" target="_blank">Imprimir ficha</a></button>
                            </div>
                            <div class="col-md-4 col-lg-4 col-6 col-sm-1 mr-2 icon_foot row">
                                <h5 class="compartir">Compartir por :</h5>
                            </div>
                            <div class="col-md-2 row d-flex flex-row-reverse bd-highlight container_icon_compartir">
                                <div class="col-md-5 col-2 col-sm-1 mr-2 icon_foot  p-2 row"><a href="<?php echo 'https://twitter.com/intent/tweet?url=http%3A%2F%2Fwww.inmobiliariasantabarbara.com.co%2Fdetalle_inmueble.php%3Fco%3D' . $co . '&text=' . $r['Tipo_Inmueble'] . '%20en%20' . $r['Gestion'] . '%20en%20' . $r['ciudad'] . '-' . $r['depto'] ?>" target="_blank"><i class="fab fa-twitter "></i></a></div>
                                <div class="col-md-5 col-2 col-sm-1 mr-1 icon_foot  p-2 row"><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.inmobiliariasantabarbara.com.co%2FdetalleInmueble%3Fcodigo%3D<?php echo $co; ?>" target="_blank"><i class="fab fa-facebook-f "></i></a></div>
                            </div>

                        </div>

                        <div id="referencia_inmueble" class="col-md-12  ">
                            <h4 class="property-single-detail-title"><strong>Descripción</strong></h4>
                            <p style="text-align: justify;"><?php echo $r['descripcionlarga']; ?></p>
                        </div>

                        <!-- descripcion -->
                        <div class="col-md-12" style="margin-bottom: 12px;">
                            <h4 class="property-single-detail-title"><strong>Características</strong></h4>
                            <ul class="pl-4">
                                <li>Código: <?php echo $co; ?></li>
                                <li>Alcobas: <?php echo $alcobas; ?></li>
                                <li>Baños: <?php echo $banios; ?></li>
                                <li>Área Construida: <?php echo $area_construida; ?>m<sup>2<sup></li>
                                <li>Área Privada: <?php echo $area_privada; ?>m<sup>2<sup></li>
                                <li>Garaje: <?php echo $garaje; ?></li>
                                <li>Estrato: <?php echo $estrato; ?></li>
                                <li>Edad Inmueble: <?php echo $edad_inmueble; ?> años</li>
                                <?php if($administracion != ""){
                                    echo '<li>Administración: $'.$administracion.'</li>';
                                }?>
                            </ul>
                        </div>
                        <!-- fin de descripcion -->


                        <div class="col-md-12" style="margin-bottom: 12px;">
                            <?php
                            if (count($r['caracteristicasInternas']) > 0) {
                                echo '
                                            <h4 class="property-single-detail-title"><strong>Características Internas</strong></h4>
                                            <ul">';
                                for ($i = 0; $i < count($r['caracteristicasInternas']); $i++) {
                                    $caracteristicas = ltrim($r['caracteristicasInternas'][$i]['Descripcion']);
                                    echo '<li>' . $caracteristicas . '</li>';
                                }
                                echo  '</ul>';
                            }
                            ?>
                        </div>


                        <div class="col-md-12" style="margin-bottom: 12px;;">
                            <?php
                            if (count($r['caracteristicasExternas']) > 0) {
                                echo '
                                            <h4 class="property-single-detail-title"><strong>Características Externas</strong></h4>
                                            <ul">';
                                for ($i = 0; $i < count($r['caracteristicasExternas']); $i++) {
                                    $caracteristicas = ltrim($r['caracteristicasExternas'][$i]['Descripcion']);
                                    echo '<li>' . $caracteristicas . '</li>';
                                }
                                echo  '</ul>';
                            }
                            ?>
                        </div>
                        <div class="col-md-12" style="margin-bottom: 12px;">
                            <?php
                            if (count($r['caracteristicasAlrededores']) > 0) {
                                echo '
                                            <h4 class="property-single-detail-title"><strong>Características Alrededores</strong></h4>
                                            <ul">';
                                for ($i = 0; $i < count($r['caracteristicasAlrededores']); $i++) {
                                    $caracteristicas = ltrim($r['caracteristicasAlrededores'][$i]['Descripcion']);
                                    echo '<li>' . $caracteristicas . '</li>';
                                }
                                echo  '</ul>';
                            }
                            ?>
                        </div>
                        <div class="col-12  mb-3">
                            <?php if ($r['video'] != "") {
                                echo
                                    '<h4 class="property-single-detail-title"><strong>Video</strong></h4>
                                            <h5 class="card-title">Video</h5>
                                            <div class="row">
                                            <div class="col-12 col-md-4">
                                                    <iframe src="' . $r['video'] . '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            </div>
                                    </div>
                                </div>
                            </div>
                                ';
                            } ?>

                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-5">

                    <div class="search-porperties text-left">
                        <h6 class="sidebar-title text-center"> Encuentra tu inmueble ideal</h6>
                        <form class="search-box">
                            <input type="text" id='codigo_buscar' class="form-control rounded-0" placeholder="Código">
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
                            <input type="text" id='area_minima_buscar' class="form-control rounded-0" placeholder="Area Mínima">
                            <input type="text" id='area_maxima_buscar' class="form-control rounded-0" placeholder="Area Máxima">
                            <button type="button" style="background-color: gray;" class="btn  rounded-0 col-12" id="buscar">Buscar</button>
                        </form>
                    </div>
                    <div class="col-md-12">
                        <h6 class="sidebar-title text-center">Contacto con el asesor</h6>
                        <div class="side-bar-agent-detail mt-3">
                            <figure>
                                <img id="img_inmueble" src="<?php echo $asesor['FotoAsesor']; ?>" alt="">
                            </figure>
                            <ul class="side-bar-agent">
                                <li><?php echo $asesor['ntercero']; ?></li>
                                <li><i class="fa fa-phone pr-1"></i><a href="tel:+57<?php echo $asesor['celular']; ?>"><?php echo $asesor['celular']; ?></a></li>
                                <li><a><i class="fa fa-envelope pr-1"></i><?php echo $asesor['correo']; ?></a></li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-md-12">
                        <div class="search-box daily-email bg2 text-center">
                            <h5 class="mb-0">Propiedades similares</h5>
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
    </div>

    <?php include 'layout/footer.php' ?>

    <?php include('layout/archivosfooter.php'); ?>


</body>

</html>