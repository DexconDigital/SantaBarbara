<?php

require_once("conexion.php");

$link = Conect();
$array = array();

$sql1 = "SELECT * FROM asesores  where id_inmobiliaria = 7 order by id desc";
$result1 = mysqli_query($link, $sql1) or die(mysqli_error($link));
while ($field = mysqli_fetch_array($result1)) {
    $nombre = $field['nombre'];
    $id = $field['id'];
    $telefono = $field['telefono'];
    $correo = $field['correo'];
    $imagen = $field['imagen'];
    $fecha = $field['fecha'];
   
    $asesor_array[] = array(
        'nombre' => $nombre,
        'id' => $id,
        'telefono' => $telefono,
        'correo' => $correo,
        'imagen' => $imagen,
        'fecha' => $fecha,
    );
}


function modelo_asesor($r)
{
    for ($i = 0; $i < count($r); $i++) {
        $ruta_imagen = "./SantaBarbara-Admin/admin/" . $r[$i]['imagen'];
        echo '
         
        <div class=" col-md-6 col-12 col-lg-4 mt-2">
            <div class="card tamaño_targeta">
            <div class="property">
            <div class="property-image">
            <img style="object-fit:cover;width: 100%;height: 100%;"; src="' . $ruta_imagen . '" class="card-img-top">
            </div>
              <div class="card-body">
                <div class="col-12 p-2">
                  <div class="col-12">
                  <p class="mb-1"><strong>Nombres:</strong> ' . $r[$i]['nombre'] .'</p>
                  </div>
                  <div class="col-12">
                  <p class="mb-1"><strong>Celular: </strong>   <a class="color_black" href="tel:' . $r[$i]['telefono'] .'" target="_blank"> ' . $r[$i]['telefono'] .'</a></p>
                  </div>
                  <div class="col-12">
                  <p class="mb-1"><strong>Correo: </strong> <a class="color_black" href="mailto:' . $r[$i]['correo'] .'" target="_blank"> ' . $r[$i]['correo'] .'</a></p>
                  </div>
                </div>
                </div>
              </div>
            </div>
          </div>
    ';
    }
}
