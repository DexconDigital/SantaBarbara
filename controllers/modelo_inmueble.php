<?php 
    function modelo_inmueble($r, $cantidad_inmuebles){
        for ($i = 0; $i < $cantidad_inmuebles; $i++) {
            $imagen = existeImagen(($r[$i]['foto1']));
            $codigo = str_ireplace("60-", "", $r[$i]['Codigo_Inmueble']);
            $api = $r[$i];

            echo'
            <div class="item">
            <div class="card" style="">
              <div class="property">
                <a href="">
                  <div class="property-image">
                    <img alt="" src="'.$imagen.'"></div>
                  <div class="precio">';
                    if($api['Gestion'] == 'Arriendo/venta'){
                        echo '$'.$api['Canon'].' <br>$'.$api['Venta'];
                    }else if($api['Gestion']== 'Arriendo'){
                        echo '$'.$api['Canon'];
                    }else{
                        echo '$'.$api['Venta'];
                    }
                echo '
                  </div>
                  <div class="overlay">
                    <ul class="additional-info">
                      <li>
                        <header>Areá:</header>
                        <figure>'.$api['AreaConstruida'].'<sup>2</sup></figure>
                      </li>
                      <li>
                        <header>Alcobas:</header>
                        <figure> '.$api['Alcobas'].'</figure>
                      </li>
                      <li>
                        <header>Baños:</header>
                        <figure>'.$api['banios'].'</figure>
                      </li>
                      <li>
                        <header>Código:</header>
                        <figure>'.$codigo.'</figure>
                      </li>
                    </ul>
                  </div>
                </a>
              </div>
              <div class=" row col-12">
                <div class="col-12">
                  <p class="mb-1">Ubicación: '.$api['Barrio'].', '.$api['Ciudad'].'</p>
                </div>
                <div class="col-12">
                  <p class="mb-1"> <small>
                      Tipo de gestión: '.$api['Gestion'].'
                    </small>
                  </p>
                </div>
                <div class="col-12">
                  <p class="mb-1"> <small>
                      Tipo de Inmueble: '.$api['Tipo_Inmueble'].'
                    </small>
                  </p>
                </div>
              </div>
            </div>

          </div>
            ';
        }
    }

    function existeImagen($r) {
            if ($r == "") {
                $r = "images/no_image.png";
            }
            return $r;
        }
