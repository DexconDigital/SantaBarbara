<?php require 'variables/variables.php';
require 'controllers/inmueblesController.php'; 
$page='Inmuebles'?>

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
                <div class="col-12">
                    <h1 class="text-center mb-4">Lista de Inmuebles</h1>
                </div>
                <!-- propiedades -->
               <?php 
                listar_inmuebles($api['Inmuebles']);
               ?>
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