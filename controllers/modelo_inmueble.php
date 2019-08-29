<?php
// modelo inmueble propiedades destacadas
function modelo_inmueble($r, $cantidad_inmuebles)
{
  for ($i = 0; $i < $cantidad_inmuebles; $i++) {
    $imagen = existeImagen(($r[$i]['foto1']));
    $codigo = str_ireplace("60-", "", $r[$i]['Codigo_Inmueble']);
    $api = $r[$i];

    echo '
            <div class="item">
            <div class="card" style="">
              <div class="property">
                <a href="detalle_inmueble.php?co=' . $codigo . '">
                  <div class="property-image">
                    <img alt="" src="' . $imagen . '"></div>
                  <div class="precio">';
    if ($api['Gestion'] == 'Arriendo/venta') {
      echo '$' . $api['Canon'] . ' <br>$' . $api['Venta'];
    } else if ($api['Gestion'] == 'Arriendo') {
      echo '$' . $api['Canon'];
    } else {
      echo '$' . $api['Venta'];
    }
    echo '
                  </div>
                  <div class="overlay">
                    <ul class="additional-info">
                      <li>
                        <header>Areá:</header>
                        <figure>' . $api['AreaConstruida'] . '<sup>2</sup></figure>
                      </li>
                      <li>
                        <header>Alcobas:</header>
                        <figure> ' . $api['Alcobas'] . '</figure>
                      </li>
                      <li>
                        <header>Baños:</header>
                        <figure>' . $api['banios'] . '</figure>
                      </li>
                      <li>
                        <header>Garaje:</header>
                        <figure>' . $api['garaje'] . '</figure>
                      </li>
                    </ul>
                  </div>
                </a>
              </div>
              <div class=" row col-12">
                <div class="col-12">
                  <p class="mb-1"><b>' . $api['Tipo_Inmueble'] . ' en ' . $api['Gestion'] . '</b></p>
                </div>
                <div class="col-12">
                  <p class="mb-1"><i class="fas fa-map-marker-alt mr-2"></i>' . $api['Barrio'] . ', ' . $api['Ciudad'] . '</p>
                </div>
                <hr>
                <div class="col-12">
                  <p class="mb-1"> <small>
                      Código:' . $codigo . '
                    </small>
                  </p>
                </div>
              </div>
            </div>

          </div>
            ';
  }
}
//modelo inmueble de la pagina de inmuebles.php
function modelo_inmueble2($r)
{
  for ($i = 0; $i < count($r); $i++) {
    $imagen = existeImagen(($r[$i]['foto1']));
    $codigo = str_ireplace("60-", "", $r[$i]['Codigo_Inmueble']);
    $api = $r[$i];
    
    $descripcion = $api['descripcionlarga'];
    $limite_de_cadena = 10;
    // recortar cadena
    if (strlen($descripcion) <= $limite_de_cadena) {
      $descripcion = substr($descripcion, 0, $limite_de_cadena) . '...';
    } else {
      $descripcion = $descripcion . '...';
    }
    // fin de recortar cadena
    echo '
                <div class="col-12">
                <div class="property-list">
                    <div class="row d-flex justify-content-around">
                        <div class="col-12 col-md-4">
                        <div style="margin-bottom: 13px;">
                          <figure style="height: 230px;">
                                <a href="detalle_inmueble.php?co='.$codigo.'">
                                    <img src="'.$imagen.'" alt="">
                                    <span class="overlay-1"></span>
                                </a>
                            </figure>
                        </div>
                           
                        </div>
                        <div class="col-12 col-md-6 row">
                            <div class="col-12 col-md-8">
                           <h5 class="mb-0 "> <strong>' . $api['Tipo_Inmueble'] . ' en ' . $api['Gestion'] . '</strong> </h5>
                                <h5 class="text-muted"> <small> ' . $api['Barrio'] . ', ' . $api['Ciudad'] . ' </small></h5>
                                <p style="text-align: justify;">' . $descripcion . '</p>
                            </div>
                            <div class="col-12 col-md-4 text-md-right">
                                <h6 class="pr-2">$';
    if ($api['Gestion'] == 'Arriendo') {
      echo $api['Canon'];
    } else if ($api['Gestion'] == 'Venta') {
      echo $api['Venta'];
    } else {
      echo $api['Canon'] . '/ $' . $api['Venta'];
    }
    echo '
                      </h6>
                            </div>
                            <div class="col-12">
                                <ul id="list" class="row contenedor_icon" style="padding: 0%;">
                                    <li class="col-6 col-md-6">Código: ' . $codigo . '</li>
                                    <li class="col-6 col-md-6 border-left"><i class="fas fa-ruler"></i> ' . $api['AreaConstruida'] . 'm<sup>2</sup></li>
                                    <li class="col-6 col-md-6 border-left"><i class="fas fa-bed mr-2"></i>' . $api['Alcobas'] . '</li>
                                    <li class="col-6 col-md-6 border-left"><i class="fas fa-bath mr-2"></i>' . $api['banios'] . '</li>
                                    <li class="col-12 col-md-auto ml-auto"><a href="detalle_inmueble.php?co='.$codigo.' class="btn btn-danger rounded-0">Ver más</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ';
  }
}

function modelo_inmueble_similares($r, $cantidad_inmuebles)
{

  for ($i = 0; $i < $cantidad_inmuebles; $i++) {
    $imagen = existeImagen(($r[$i]['foto1']));
    $codigo = str_ireplace("60-", "", $r[$i]['Codigo_Inmueble']);
    $api = $r[$i];

    echo '
          <div class="col-10">
          <div class="card" style="">
            <div class="property">
              <a href="">
                <div class="property-image">
                  <img alt="" src="' . $imagen . '"></div>
                <div class="precio">';
    if ($api['Gestion'] == 'Arriendo/venta') {
      echo '$' . $api['Canon'] . ' <br>$' . $api['Venta'];
    } else if ($api['Gestion'] == 'Arriendo') {
      echo '$' . $api['Canon'];
    } else {
      echo '$' . $api['Venta'];
    }
    echo '
                </div>
                <div class="overlay">
                  <ul class="additional-info">
                    <li>
                      <header>Areá:</header>
                      <figure>' . $api['AreaConstruida'] . '<sup>2</sup></figure>
                    </li>
                    <li>
                      <header>Alcobas:</header>
                      <figure> ' . $api['Alcobas'] . '</figure>
                    </li>
                    <li>
                      <header>Baños:</header>
                      <figure>' . $api['banios'] . '</figure>
                    </li>
                    <li>
                        <header>Garaje:</header>
                        <figure>' . $api['garaje'] . '</figure>
                      </li>
                  </ul>
                </div>
              </a>
            </div>
            <div class=" row col-12">
              <div class="col-12">
                <p class="mb-1">Ubicación: ' . $api['Barrio'] . ', ' . $api['Ciudad'] . '</p>
              </div>
              <div class="col-12">
                <p class="mb-1"> <small>
                    Tipo de gestión: ' . $api['Gestion'] . '
                  </small>
                </p>
              </div>
              <div class="col-12">
                <p class="mb-1"> <small>
                    Tipo de Inmueble: ' . $api['Tipo_Inmueble'] . '
                  </small>
                </p>
              </div>
              <div class="col-12">
                <p class="mb-1"> <small>
                    Código:' . $codigo . '
                  </small>
                </p>
              </div>
            </div>
          </div>

        </div>
          ';
  }
}

function existeImagen($r)
{
  if ($r == "") {
    $r = "images/no_image.png";
  }
  return $r;
}
