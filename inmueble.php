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

    <div class="contaider-fluid body">
        <?php include 'layout/buscador.php' ?>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12 ">
        <div class="property-list">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4" style=" max-width: 43.333333%;">
                    <figure>
                        <a href="#">
                            <img src="img/no_image.png" alt="">
                            <span class="overlay-1"></span>
                        </a>
                    </figure>
                </div>
                <div class="col-xs-12 col-sm-5 col-md-6">
                    <div class="property-list-detail text-left p-4">
                        <h5>Tipo de inmueble _ tipo de ubicación</h5>
                        <p>(añadir una pequeña descripción)</p>
                        <ul id="list" class="row contenedor_icon">
                            <li  class="col-12 d-flex">Código:</li>
                            <li  class="col-12 d-flex">Ciudads:</li>
                            <li  class="col-12 d-flex">Barrio:</li>
                            <li class="col-12 d-flex">Casa</li>
                        </ul>
                        <a href="detalle_inmueble.php" class="btn btn-dark rounded-0 col-4 ">Ver más</a>
                    </div>
                </div>
                <div class="row">
                    <h6><i class="fa">$</i> Precio</h6>
                    <div class="talk-to text-center">
                    </div>

                </div>

            </div>
        </div>
    </div>


    <?php include 'layout/footer.php' ?>

    <?php include('layout/archivosfooter.php'); ?>


</body>

</html>