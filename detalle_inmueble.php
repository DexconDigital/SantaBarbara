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
        <div class="container" style="margin-top: 60px;">
            <div class="row">
                <div class="col-md-12 col-lg-7">
                    <div class="col-md-12 d-flex bd-highlight">
                        <div class="col-6 mr-auto bd-highlight">
                            <h2 class="tipo_inm"><Strong><?php echo $r['Tipo_Inmueble'] . ' en ' . $r['Gestion']; ?></Strong></h2>
                            <h5 class="p_detalle"><?php echo $r['barrio'] . ', ' . $r['ciudad'] ?></h5>
                        </div>
                        <div class="col-6 bd-highlight precio" style="color: red;">
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
                                            <img style="    object-fit: cover;
                                            width: 100%;
                                            " src="images/no_image.png" class="" alt="...">
                                            </div>
                                        ';
                                    } else {
                                        echo '<div  class="carousel-item active">
                                            <img style="    object-fit: cover;
                                            width: 100%;
                                            " src="' . $r['fotos'][0]['foto'] . '" class="" alt="...">
                                            </div>
                                            ';
                                        for ($i = 1; $i < count($r['fotos']); $i++) {
                                            echo '<div  class="carousel-item">
                                            <img style="    object-fit: cover;
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
                                <button style="margin-top: 18px;" type="button" class="btn btn-danger rounded-0 col-6 compartir_boton" name=""><a></a><span class="letra_booton">Imprimir ficha</span></button>
                            </div>
                            <div class="col-md-4 col-lg-4 col-6 col-sm-1 mr-2 icon_foot row">
                                <h5 class="compartir">Compartir por :</h5>
                            </div>
                            <div class="col-md-2 row  d-flex flex-row-reverse bd-highlight container_icon_compartir">
                                <div class="col-md-5 col-2 col-sm-1 mr-2 icon_foot  p-2 row"><a href="<?php echo 'https://twitter.com/intent/tweet?url=http%3A%2F%2Fwww.dimensionesempresariales.com.co%2Fdetalle_inmueble.php%3Fco%3D' . $co . '&text=' . $r['Tipo_Inmueble'] . '%20en%20' . $r['Gestion'] . '%20en%20' . $r['ciudad'] . '-' . $r['depto'] ?>" target="_blank"><i class="fab fa-twitter "></i></a></div>
                                <div class="col-md-5 col-2 col-sm-1 mr-1 icon_foot  p-2 row"><a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.dimensionesempresariales.com.co%2Fdetalle_inmueble.php%3Fco%3D<?php echo $co; ?>" target="_blank"><i class="fab fa-facebook-f "></i></a></div>
                            </div>

                        </div>

                        <div id="referencia_inmueble" class="col-md-12  ">
                            <h4 class="property-single-detail-title"><strong>Descripción</strong></h4>
                            <p style="text-align: justify;"><?php echo $r['descripcionlarga']; ?></p>
                        </div>
                        <div class="col-md-12" style="margin-bottom: 12px;;">
                            <?php
                            if (count($r['caracteristicasInternas']) > 0) {
                                echo '
                                            <h4 class="property-single-detail-title"><strong>Caracteristicas Internas</strong></h4>
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
                                            <h4 class="property-single-detail-title"><strong>Caracteristicas Externas</strong></h4>
                                            <ul">';
                                for ($i = 0; $i < count($r['caracteristicasExternas']); $i++) {
                                    $caracteristicas = ltrim($r['caracteristicasExternas'][$i]['Descripcion']);
                                    echo '<li>' . $caracteristicas . '</li>';
                                }
                                echo  '</ul>';
                            }
                            ?>
                        </div>
                        <div class="col-md-12" style="margin-bottom: 12px;;">
                            <?php
                            if (count($r['caracteristicasAlrededores']) > 0) {
                                echo '
                                            <h4 class="property-single-detail-title"><strong>Caracteristicas Alrededores</strong></h4>
                                            <ul">';
                                for ($i = 0; $i < count($r['caracteristicasAlrededores']); $i++) {
                                    $caracteristicas = ltrim($r['caracteristicasAlrededores'][$i]['Descripcion']);
                                    echo '<li>' . $caracteristicas . '</li>';
                                }
                                echo  '</ul>';
                            }
                            ?>
                        </div>
                        <div class="col-md-12  p-0">
                            <div class="row">
                                <div style="width: 100%;">
                                    <iframe style="width: 100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.387477550989!2d-74.04512468555325!3d4.702562842951571!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9ab269c06361%3A0xdca8e05035cfdad4!2sAk.+15+%23124-17%2C+Bogot%C3%A1!5e0!3m2!1ses-419!2sco!4v1565293824670!5m2!1ses-419!2sco" width="" height="600" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                                </div>
                                
                    
                            </div>

                        </div>

                    </div>
                </div>

                <div class="col-lg-5 col-md-12 col-12 ">

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
                            <button type="submit" style="background-color: gray;" class="btn  rounded-0 col-12">Buscar</button>
                        </form>
                    </div>
                    <div class="col-md-12">
                        <h6 class="sidebar-title text-center">Contacto con el asesor</h6>
                        <div class="side-bar-agent-detail mt-3">
                            <figure>
                                <img id="img_inmueble" src="img/no_image.png" alt="">
                            </figure>
                            <ul class="side-bar-agent">
                                <li><i class="fa fa-map-marker"></i> Nombre</li>
                                <li><i class="fa fa-phone"></i> Teléfono</li>
                                <li><a><i class="fa fa-envelope"></i> Correo</a></li>
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