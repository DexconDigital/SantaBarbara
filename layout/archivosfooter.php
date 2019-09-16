<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src= 'js/scripts.js'></script>


<script>
  new WOW().init();
</script>


<?php if($page == 'Inicio' || $page="Inmuebles" || $page = 'Quienes'){
    echo '<script src="conexion_api/token_api.js"></script>';
    echo '<script src="conexion_api/validadores.js"></script>';
    echo '<script src="conexion_api/buscador.js"></script>';
}?>


