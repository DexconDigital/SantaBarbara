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
        <div class="container contenedor_servicio">
        <div class="col-12 p-4  ">
          <h2 class="main-title text-center"> Nuestros Servicios</h2>
        </div>
        <div class="col-12">
          <p class="text-center"> enviado por el cliente</p>
        </div>
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4 p-4">
                    <div class="pricing">
                        <figure>
                            <img src="img/no_image.png" alt="">
                        </figure>
                        <h6 class="titulos_servicio">
                        <?php echo $texto_servicios['ventas']['titulo'] ?> </h6>
                        <div class="rate">
                        </div>
                       <div class="container">
                       <?php echo $texto_servicios['ventas']['parrafo'] ?> </h6>
                       </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 p-4">
                    <div class="pricing">
                    <figure>
                            <img src="img/no_image.png" alt="">
                        </figure>   
                        <h6 class="titulos_servicio">Nombre del servicio</h6>
                        <div class="rate"></div>
                        <p>Parrafo enviado por el cliente</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 p-4">
                    <div class="pricing">
                        <figure>
                            <img src="img/no_image.png " alt="">
                        </figure>
                        <h6 class="titulos_servicio">
                        <?php echo $texto_servicios['arriendos']['titulo'] ?>
                        </h6>
                        <div class="rate"></div>
                        <div class="container">
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