<?php

require_once("conexion.php");

$con = Conect();
$array = array();

$sql = "SELECT * FROM noticias  where id_inmobiliaria2 = 7 order by id desc";
$result = $con->prepare( $sql );
$result->execute();

$resultado = $result->fetchAll( PDO::FETCH_OBJ );

foreach ( $resultado as $key => $field ) {
    $id = $field->id;
    $nombre = $field->nombre;
    $descripcion = $field->descripcion;
    $imagen = $field->imagen;
    $archivo = $field->archivo;
    $noticia = $field->noticia;
    $fecha = $field->fecha;
    $noticias_array[] = array(
        'titulo' => $nombre,
        'id' => $id,
        'descripcion' => $descripcion,
        'imagen' => 'SantaBarbara-Admin/admin/' . $imagen,
        'noticia' => $noticia,
        'fecha' => $fecha,
        'archivo' => $archivo,
    );
}

function modelo_noticia($r)
{
    for ($i = 0; $i < count($r); $i++) {
        $nombre = $r[$i]['titulo'];
        $descrip = $r[$i]['descripcion'];
        $limite_de_cadena1 = 100;
        $limite_de_cadena2 = 25;
        $ruta_imagen = $r[$i]['imagen'];
        echo '
        <div class="col-11 col-md-6 col-lg-4 d-flex">
            <div class="card mb-4 w-100">
                <img style="object-fit: cover;width: 100%;height: 15rem;"; src="' . $ruta_imagen . '" class="card-img-top" alt="...">  
                <div class="col-12">
                    <h4 style="margin-top: 12px;" class="card-title text-truncate">' . $nombre .'</h4>
                    <p class="card-text text-truncate">' . $descrip . '</p>
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
