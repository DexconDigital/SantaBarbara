<?php

require_once("conexion.php");

$link = Conect();
$array = array();

$sql = "SELECT * FROM asesores  where id_inmobiliaria2 = 8 order by id desc";
$result = mysqli_query($link, $sql) or die(mysqli_error($link));
while ($field = mysqli_fetch_array($result)) {
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
        <div class="col-12 col-md-6 col-lg-4  ">
            <div class="card" style="">
              <div class="property">
                <a href="">
                  <div class="property-image">
                  <img style="object-fit: cover;width: 100%;height: 100%;"; src="' . $ruta_imagen . '" class="card-img-top" alt="...">  
                </a>
              </div>
              <div class=" row col-12 p-4">
                <div class="col-12">
                  <p class="mb-1">Nombres : ' . $r[$i]['nombre'] .'</p>
                </div>
                <div class="col-12">
                  <p class="mb-1">Celular: ' . $r[$i]['telefono'] .'</p>
                </div>
                <div class="col-12">
                  <p class="mb-1">Correo: ' . $r[$i]['correo'] .'</p>
                </div>
              </div>
            </div>
          </div>
        
    ';
    }
}
