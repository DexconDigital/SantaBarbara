<?php $page = 'Noticias'; require 'variables/variables.php';
require 'controllers/noticiasController.php' ?>
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
            <div id="titulo_noticias" class="col-12  ">
                <h2 class="main-title text-center">Noticias</h2>
            </div>
            <section class="container mt-5 ">
                <div class="card-deck">
                    <div class="card">
                        
                        <div class="col-12">
                        <?php modelo_noticia($noticias_array);?>  
                        </div>
                    </div>
                   
                    
                    </div>
                </div>
            </section>

        </div>

    </div>


    <?php include 'layout/footer.php' ?>

    <?php include('layout/archivosfooter.php'); ?>


</body>

</html>