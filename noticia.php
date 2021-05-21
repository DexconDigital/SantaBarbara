<?php $page = 'Noticias';
require 'variables/variables.php';
//require 'controllers/noticiasController.php' ?>
<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include 'layout/archivosheader.php' ?>

    <title>Noticias</title>
</head>

<body>
    <?php include 'layout/menu.php' ?>

    <div class="contaider-fluid body">
        <div class="row d-flex justify-content-around  p-4  ">
            <div id="main-title titulo_noticias" style="margin-bottom: 26px;" class="col-12 ">
                <h2 class="main-title text-center">Noticias</h2>
            </div>
            <div class=" container">
                <div class="row">
                    <?php if(isset($noticias_array)){
                        modelo_noticia($noticias_array);
                    }else{
                        echo '<div class="col 12">
                        <h3 class="text-center">Muy pronto publicaremos contenido para ti<h3>
                        </div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <?php include 'layout/footer.php' ?>

    <?php include('layout/archivosfooter.php'); ?>


</body>

</html>