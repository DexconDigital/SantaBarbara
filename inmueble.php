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
               if(is_array($api)){
                   listar_inmuebles($api['Inmuebles']);
                } else {
                    echo '<div class="col-12">
                        <h2 class="text-center" >No se encontraron inmuebles</h2>
                    </div>';
                }
               ?>
                <!-- Fin de propiedades -->
                <div class="col-12 row">
                    <div class="col-12 text-center">
                        <?php if (is_array($api)) : ?>
                            <div class="pagination-box text-center">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination align-items-end justify-content-center">
                                        <?php if ($paginator->getPrevUrl()) : ?>
                                            <li class="page-item"><a href="<?php echo $paginator->getPrevUrl(); ?>" class="page-link">&laquo;</a></li>
                                        <?php endif; ?>
                                        <?php foreach ($paginator->getPages() as $page) :?>
                                            <?php if ($page['url']) : ?>
                                                <li <?php echo $page['isCurrent'] ? 'class="page-item active"' : ''; ?>>
                                                    <a href="<?php echo $page['url']; ?>" class="page-link"><?php echo $page['num']; ?></a>
                                                </li>
                                            <?php else : ?>
                                                <li class="page-item disabled"><span><?php echo $page['num']; ?></span></li>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                        <?php if ($paginator->getNextUrl()) : ?>
                                            <li class="page-item"><a href="<?php echo $paginator->getNextUrl(); ?>" class="page-link"> &raquo;</a></li>
                                        <?php endif; ?>
                                    </ul>
                                </nav>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <?php include 'layout/footer.php' ?>

    <?php include('layout/archivosfooter.php'); ?>
    <script src="js/responsive-paginate.js"></script>


</body>

</html>