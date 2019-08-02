<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/owl.carousel.min.js"></script>

<?php if($page == 'Inicio'){
    echo '<script src="conexion_api/token_api.js"></script>';
    echo '<script src="conexion_api/validadores.js"></script>';
    echo '<script src="conexion_api/buscador.js"></script>';
}?>

<script>
    $('#aliados_slide').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:4
        }
    }
})
</script>