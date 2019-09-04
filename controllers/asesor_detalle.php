<?php 

require_once("conexion.php");

$link = Conect();
$array = array();

$sql = "SELECT * FROM asesor  where id_inmobiliaria = 7 order by id desc";
$result = mysqli_query($link, $sql) or die(mysqli_error($link));
while ($field = mysqli_fetch_array($result)) {
    $nombre = $field['nombre'];
    $id = $field['id'];
    $descripcion = $field['descripcion'];
    $imagen = $field['imagen'];
    $noticia = $field['noticia'];
    $fecha = $field['fecha'];
    $archivo = $field['archivo'];
    $noticias_array[] = array(
        'titulo' => $nombre,
        'id' => $id,
        'descripcion' => $descripcion,
        'imagen' => $imagen,
        'noticia' => $noticia,
        'fecha' => $fecha,
        'archivo' => $archivo
    );
}







function modelo_asesor($r)
{
    for ($i = 0; $i < count($r); $i++) {
        $ruta_imagen = "./SantaBarbara-Admin/admin/" . $r[$i]['imagen'];
        echo '
        <div class="card" style="">
        <div class="property">
          <a href="">
            <div class="property-image">
              <img src="' . $ruta_imagen . '" class="card-img-top" alt="..."></div>
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
    ';
    }
}