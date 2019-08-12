<?php require 'variables/variables.php';
$page = 'Servicios' ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include 'layout/archivosheader.php' ?>

    <title>Servicios</title>
</head>

<body>
    <?php include 'layout/menu.php' ?>
    <div class="pricing-wrapper index inner-section-padding text-center">
        <div class="container">
            <div class="col-12 p-4  ">
                <h2 class="main-title text-center"> Nuestros Servicios</h2>
            </div>
            
            <div class="row">
            <div class="col-12 col-md-6 p-4">
                    <div class="pricing">
                        <figure>
                            <i class="<?php echo $iconos_servicios['ventas'] ?> mr-2 " id="estilo_icono_foot2"></i>
                        </figure>
                        <h6 class="titulos_servicio">
                            <?php echo $texto_servicios['ventas']['titulo'] ?> </h6>
                        <div class="rate">
                        </div>
                        <div class="container" style="text-align: justify;">
                            <?php echo $texto_servicios['ventas']['parrafo'] ?> </h6>
                        </div>
                        <div style="margin-top: 10px;    margin-bottom: 8px;">
                            <?php echo $texto_servicios['requisitos']['titulo'] ?>
                        </div>
                        <ul style="text-align: -webkit-auto;">
                            <li style="color: #dc3545;"><a style="color:black"><?php echo $texto_servicios['requisitos'][0]; ?></a></li>
                            <li style="color: #dc3545;"><a style="color:black"><?php echo $texto_servicios['requisitos'][1]; ?></a></li>
                            <li style="color: #dc3545;"><a style="color:black"><?php echo $texto_servicios['requisitos'][2]; ?></a></li>
                            <li style="color: #dc3545;"><a style="color:black"><?php echo $texto_servicios['requisitos'][3]; ?></a></li>
                            <li style="color: #dc3545;"><a style="color:black"><?php echo $texto_servicios['requisitos'][4]; ?></a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-12  col-md-6 p-4">
                    <div class="pricing">
                        <figure>
                            <i class="<?php echo $iconos_servicios['arriendos'] ?> mr-2 " id="estilo_icono_foot2"></i>
                        </figure>
                        <h6 class="titulos_servicio">
                            <?php echo $texto_servicios['arriendos']['titulo'] ?>
                        </h6>
                        <div class="rate"></div>
                        <div class="container venta_container">
                            <?php echo $texto_servicios['arriendos']['parrafo'] ?> </h6>

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