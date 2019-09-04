<?php require 'variables/variables.php';
$page = 'Quienes' ?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php include 'layout/archivosheader.php' ?>

  <title>Quienes Somos</title>
</head>

<body>
  <?php include 'layout/menu.php' ?>

  <div class="contaider-fluid body">

    <section class="fifth-banner-wrapper index">
      <figure>
        <span class="efecto_somos">
        </span>
        <h1 class="text-center">Quiénes Somos </h1>
      </figure>
    </section>

    <div class="col-12  section-padding p-5">
      <div class="container">
        <h2 class="text-center titulo main-title"><?php echo $texto_quienes_somos['titulo'] ?></h2>
        <div class="row ">
          <div style="text-align: justify;" id="texto_reseña" class="col-12 col-md-12 ">
            <?php for ($i = 0; $i < count($texto_quienes_somos['parrafos']); $i++) {
              echo '<p>' . $texto_quienes_somos['parrafos'][$i] . '</p> ';
            } ?>
          </div>

          <div class="col-12 col-md-12 row data text-center">
            <div class="col-12 col-md-6 wow tada"  data-wow-delay="3s" data-wow-duration="2s" data-wow-iteration="2">
              <div class="counter-wrapper bg4 ">
                <h1 class="counter-experence "></h1>
                <h2>Años de Experiencia</h2>
              </div>
            </div>
            <div class="col-12 col-md-6 wow tada" data-wow-delay="3s" data-wow-duration="2s" data-wow-iteration="2" >
              <div class=" counter-wrapper bg4">
                <h1 class="counter-propertys"></h1>
                <h2>Total Inmuebles</h2>
              </div>
            </div>
            <div class="col-12 col-md-4 wow tada "data-wow-delay="3s" data-wow-duration="2s" data-wow-iteration="2">
              <div class="counter-wrapper bg4">
                <h1 class="counter-rent"></span>
                <h2>Inmuebles en arriendo</h2>
              </div>
            </div>
            <div class="col-12 col-md-4 wow tada " data-wow-delay="3s" data-wow-duration="2s" data-wow-iteration="2">
              <div class="counter-wrapper bg4">
                <h1 class="counter-sale"></h1>
                <h2>Inmuebles en venta</h2>
              </div>
            </div>
            <div class="col-12 col-md-4 wow  tada"  data-wow-delay="3s" data-wow-duration="2s" data-wow-iteration="2">
              <div class="counter-wrapper bg4 pl-0 pr-0">
                <h1 class="counter-sale-rent"></h1> 
                <h2>Inmuebles en Arriendo/venta</h2>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>

    <div id='parallax' class="img_static ">
      <section>
        <figure>
          <span class="efecto_somos2">
          </span>
          <h1 class="text-center tex_parallax2 main-title2"> Respaldo, Seguridad y confianza</h1>
        </figure>
      </section>
    </div>

    <div class="container" style="margin-bottom: 15px;">
      <h2 class="main-title contenido_completo text-center p-4"> Misión y Visión</h2>
      <div class="col-12">
        <div class="row">
          <div class="col-12 col-md-6 col-sm-12">
            <div class="text_img texto_misi_visio">
              <?php for ($i = 0; $i < count($texto_quienes_somos['mision']); $i++) {
                echo '<p>' . $texto_quienes_somos['mision'][$i] . '</p> ';
              }
              ?>
              <?php for ($i = 0; $i < count($texto_quienes_somos['mision']); $i++) {
                echo '<p>' . $texto_quienes_somos['vision'][$i] . '</p> ';
              }
              ?>
            </div>
          </div>
          <div class="col-12 col-md-6 col-sm-12">
            <?php $r = $imagenes['banner_mision_vision'];
            echo '
          <img src="' . $r['imagen'] . '" class="w-100" alt="' . $r['alt'] . '">'; ?>
          </div>
        </div>


      </div>






    </div>


  </div>


  <?php include 'layout/footer.php' ?>

  <?php include('layout/archivosfooter.php'); ?>
  <script src="js/counter-propertys.js"></script>

</body>

</html>