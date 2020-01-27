<?php

require_once("conexion.php");

$link = Conect();
$array = array();

$sql = "SELECT * FROM noticias  where id_inmobiliaria2 = 7 order by id desc";
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


function modelo_noticia($r)
{
    for ($i = 0; $i < count($r); $i++) {
        $nombre = $r[$i]['titulo'];
        $descrip = $r[$i]['descripcion'];
        $limite_de_cadena1 = 100;
        $limite_de_cadena2 = 20;
        $ruta_imagen = "./SantaBarbara-Admin/admin/" . $r[$i]['imagen'];
         //pedniente recortar cadena de descripcion corta
           if (strlen($nombre) >= $limite_de_cadena2) {
              $nombre = substr($nombre, 0, $limite_de_cadena2) . '...';
          }else {
              $nombre = $nombre . '...';
          }if (strlen($descrip) >= $limite_de_cadena1) {
              $descrip = substr($descrip, 0, $limite_de_cadena1) . '...';
          }else {
              $descrip = $descrip . '...';
          }
        echo '
        <div class="col-11 col-md-6 col-lg-4">
            <div class="card" style="height: 53%; width: 100%;">
                <img style="object-fit: cover;width: 100%;height: 100%;"; src="' . $ruta_imagen . '" class="card-img-top" alt="...">  
                <div class="col-12">
                    <h4 style="margin-top: 12px;" class="card-title">' . $nombre .'</h4>
                    <p class="card-text">' . $descrip . '</p>
                    <div class="w-100 d-flex justify-content-center">
                    <a href="./detalle-noticia.php?co=' . $r[$i]['id'] . '" class="btn btn-danger rounded-0 text-center">Ver más</a>
                    </div>
                    <div class="col-12 col-md-5">
                </div>
                    <p style="margin-top: 28px; " class="card-text"><small class="text-muted">Publicado el: ' . $r[$i]['fecha'] . '</small></p>
                </div>
            </div>
        </div>
    ';
    }
}
