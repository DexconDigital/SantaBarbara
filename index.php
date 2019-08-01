<?php require 'variables/variables.php' ?>
<!doctype html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php include 'layout/archivosheader.php' ?>

  <title>Inicio</title>
</head>

<body>
  <?php include 'layout/menu.php' ?>

  <div class="container-fluid body">

    <section id="hero">
      <div style="position: relative;" id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <?php
          // Colocarle un nombre más corto al array
          $r = $imagenes_slide_principal[0];
          // Declarar el primer item del carousel con la clase active
          echo '<div class="carousel-item active">
                    <img src="' . $r['imagen'] . '" class="w-100" alt="' . $r['alt'] . '">
                  </div>';
          //iterar el array para imprimir todos los valores
          for ($i = 1; $i < count($r) - 1; $i++) {
            $r = $r[$i];
            echo '<div class="carousel-item">
                        <img src="' . $r['imagen'] . '" class="w-100" alt="' . $r['alt'] . '">
                      </div>';
          } ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

    </section>

    <section id="buscador">
      <?php include 'layout/buscador.php' ?>
    </section>

    <section id="propiedades" class="container mt-4 ">
      <div class="row">
        <div class="col-12 p-4  ">
          <h2 class="main-title text-center"> Propiedades destacadas</h2>
        </div>
        <div class=" col-12 text center text-center ">
          <h6>RESIDENCIAL</h6>
        </div>
        <div class="col-12">
          <p class="text-center"> Nuestros inmuebles destacados en este momento</p>
        </div>
        <div class="col-12 row justify-content-center">
          <div class="col-12 col-md-6 col-lg-4 p-4 ">
            <div class="card" style="">
              <div class="property">
                <a href="">
                  <div class="property-image">
                    <img alt="" src="img/no_image.png"></div>
                  <div class="precio">
                    precio
                  </div>
                  <div class="overlay">
                    <ul class="additional-info">
                      <li>
                        <header>Areá:</header>
                        <figure>0<sup>2</sup></figure>
                      </li>
                      <li>
                        <header>Alcobas:</header>
                        <figure></figure>
                      </li>
                      <li>
                        <header>Baños:</header>
                        <figure></figure>
                      </li>
                      <li>
                        <header>Código:</header>
                        <figure></figure>
                      </li>

                    </ul>
                  </div>
                </a>
              </div>
              <div class=" row col-12">
                <div class="col-12">
                  <p class="mb-1">Ubicación:</p>
                </div>
                <div class="col-12">
                  <p class="mb-1"> <small>
                      Tipo de gestión:
                    </small>
                  </p>
                </div>
                <div class="col-12">
                  <p class="mb-1"> <small>
                      Tipo de Inmueble:
                    </small>
                  </p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section id="" class="separador-p bg-gris">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="extra-info separador">
              <figure id="targeta" class="extra-info-image pull-right">
                <img id="card_img" src="img/no_image.png">
              </figure>
              <div id="cuadro_cards" class="extra-info-text margin-control">
                <h3> Inmobiliaria Santa Bárbara</h3>
                <p> Somos una Empresa con más de 30 años de
                  experiencia en el sector Inmobiliario, arrendando y vendiendo en Bogotá, nos caracterizamos por la
                  honestidad y cumplimiento en nuestras actividades y por prestar de manera personalizada y cordial
                  un servicio profesional a nuestros clientes.</p>
                <a href="quienes_somos.php" class="btn btn-dark rounded-0">Ver más</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="extra-info separador">
              <figure id="targeta2" class="extra-info-image pull-right">
                <?php $r = $imagenes['banner_servicios_home'];
                echo '
               <img src="' . $r['imagen'] . '" class="w-100" alt="' . $r['alt'] . '">'; ?>
              </figure>
              <div id="cuadro_cards2" class="extra-info-text margin-control">
                <h3> Nuestros servicios, cerca de ti</h3>
                <p>Todo lo que necesitas para encontrar un hogar u oficina. Buscas propiedades en venta y alquiler en
                  nuestro buscador de inmuebles.</p>
                <a href="servicios.php" class="btn btn-dark rounded-0">Ver más</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="asesores" class="container mt-4">
      <div class="row">
        <div class="col-12 p-4  ">
          <h2 class="main-title text-center"> Nuestros Asesores</h2>
        </div>
        <div class="col-12">
          <p class="text-center"> Nadie conoce nuestras ciudades tan bien como nosotros</p>
        </div>
        <div class="col-12 row justify-content-center">
          <div class="col-12 col-md-6 col-lg-4 p-4 ">
            <div class="card" style="">
              <div class="property">
                <a href="">
                  <div class="property-image">
                    <img alt="" src="img/no_image.png"></div>
                </a>
              </div>
              <div class=" row col-12 p-4">
                <div class="col-12">
                  <p class="mb-1">Nombre:</p>
                </div>
                <div class="col-12">
                  <p class="mb-1">Apellido:</p>
                </div>
                <div class="col-12">
                  <p class="mb-1">Celular:</p>
                </div>
                <div class="col-12">
                  <p class="mb-1">Correo:</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row justify-content-around  bg-gris" style="margin-bottom: 41px;">
          <div class="col-12 p-4  ">
            <h2 class="main-title text-center"> Zona Clientes</h2>
          </div>
          <div class="col-12">
            <p class="text-center"> Te facilitamos todas las operaciones, sin que salgas de casa accede a nuestros servicios con un solo clic y de forma segura.</p>
          </div>

          <section class="container mt-5 ">
            <div class="card-deck">
              <div class="card">
                <?php $r = $imagenes['banner_clientes_home']['propietarios'];
                echo '
               <img src="' . $r['imagen'] . '" class="w-100" alt="' . $r['alt'] . '">'; ?>

              </div>
              <div class="card">
                <?php $r = $imagenes['banner_clientes_home']['arrendatarios'];
                echo '
               <img src="' . $r['imagen'] . '" class="w-100" alt="' . $r['alt'] . '">'; ?>

              </div>
              <div class="card">
                <?php $r = $imagenes['banner_clientes_home']['pagos_pse'];
                echo '
               <img src="' . $r['imagen'] . '" class="w-100" alt="' . $r['alt'] . '">'; ?>

              </div>
            </div>
          </section>

        </div>
      </div>
    </section>

    <section id='parallax'>
      <div class="overlay">
      </div>
      <div class="contenedor" id="noticia">
        <div class="card" style="width: 18rem;">
          <h3 id="titulo_not" class="text-center">Noticias de interés</h3>
          <div class="card-body">
            <p class="card-text"> Entérate de todas las novedades que tenemos para ti. Accede a nuestras noticias y demás temas de interés.</p>
            <a href="noticias.php" class="btn btn-dark rounded-0">Ver más</a>
          </div>
        </div>
      </div>
    </section>

    <section id="aliados">

      <div class="row d-flex justify-content-around p-4">
        <div class="col-12 p-4  ">
          <h2 class="main-title text-center">Nuestros Aliados</h2>
        </div>
        <div class="col-12">
          <p class="text-center"> Contamos con aliados de primer nivel para asegurar una
            experiencia de servicio confiable.</p>
        </div>
        <div class="col-12">
          <div class="owl-carousel owl-theme" id="aliados_slide">
            <div class="item" style="height: 150px;">
              <img style="height: 100%; object-fit: contain;" src="img/no_image.png" alt="">
            </div>
            <div class="item" style="height: 150px;">
              <img style="height: 100%; object-fit: contain;" src="img/no_image.png" alt="">
            </div>
            <div class="item" style="height: 150px;">
              <img style="height: 100%; object-fit: contain;" src="img/no_image.png" alt="">
            </div>
            <div class="item" style="height: 150px;">
              <img style="height: 100%; object-fit: contain;" src="img/no_image.png" alt="">
            </div>
            <div class="item" style="height: 150px;">
              <img style="height: 100%; object-fit: contain;" src="img/no_image.png" alt="">
            </div>
          </div>
        </div>
      </div>


    </section>

  </div>

  <?php include 'layout/footer.php' ?>

  <?php include('layout/archivosfooter.php'); ?>


</body>

</html>