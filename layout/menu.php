<!-- Codigo del preloader -->
<style>
  #wrap-preload {
    position: fixed;
    z-index: 10;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: #fff;
    opacity: 1;
    visibility: visible;
    transition: opacity .5s ease, visibility .5s ease;
    z-index: 998;
  }

  #wrap-preload.close {
    opacity: 0;
    visibility: hidden;
  }

  .fixed-top {
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    z-index: 10;
  }

  #wrap-preload>img.gif {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate3d(-50%, -50%, 0);
    z-index: 1032;
  }
</style>
<div id="wrap-preload">
  <img src="img/preloader.gif" alt="gif" class="gif" id="gif">
</div>
<script>
  var loader = document.getElementById("wrap-preload");
  window.addEventListener("load", function() {
    loader.style.visibility = "hidden";
  });
</script>
<!-- Fin de codigo preloader -->

<!-- Inicio menu -->
<nav id="medida_nav" class="navbar navbar-expand-xl navbar-light bg-light">
  <div class=" row col-lg-5 col-md-5 col-5">
    <a href="index.php">
      <img style=" object-fit: contain;width: 100%;" src="<?php echo $logo; ?>" alt="" height="100px">
    </a>
  </div>

  <button class="navbar-toggler boton_nogg" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item <?php if ($page == 'Inicio') {
                            echo 'active';
                          } ?>">
        <a class="nav-link" href="index.php"> Inicio </a>
      </li>
      <li class="nav-item <?php if ($page == 'Quienes') {
                            echo 'active';
                          } ?>">
        <a class="nav-link" href="quienes_somos.php">Quiénes Somos</a>
      </li>
      <li class="nav-item <?php if ($page == 'Servicios') {
                            echo 'active';
                          } ?>">
        <a class="nav-link" href="servicios.php"> Servicios</a>
      </li>
      <li class="nav-item <?php if ($page == 'Inmuebles') {
                            echo 'active';
                          } ?> ">
        <a class="nav-link" href="inmueble.php?"> Inmuebles</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Clientes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Arrendatarios</a>
          <a class="dropdown-item" href="#">Propietarios</a>
      </li>
      <li class="nav-item <?php if ($page == 'Noticias') {
                            echo 'active';
                          } ?>">
        <a class="nav-link" href="noticia.php">Noticias</a>
      </li>
      <li class="nav-item <?php if ($page == 'Contacto') {
                            echo 'active';
                          } ?>">
        <a class="nav-link" href="contactos.php">Contáctanos</a>
      </li>
    </ul>
    <a class="navbar-brand" href="#">
      <img style="width: 50px;height: auto;" src="img/logopse.png" width="50" height="50" alt="">
    </a>
  </div>
</nav>

<!-- Espacio menu -->
<div class="w-100px" id="espacio-menu">
</div>

<script>
  var altomenu = document.getElementById('medida_nav').offsetHeight;
  altomenu = altomenu + 'px';
  var espacio_menu = document.getElementById('espacio-menu').style.height = altomenu;
</script>