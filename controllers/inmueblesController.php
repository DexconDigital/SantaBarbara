<?php

require_once 'variables/config.php';
require_once 'modelo_inmueble.php';

$pag = 1;
$ciudad = 0;
$barrio = 0;
$gestion = 0;
$inmueble = 0;
$precio_minimo = 0;
$precio_maximo = 0;
$area_minimo = 0;

if(isset($_GET['pag'])){
    $pag = $_GET['pag'];
}
if(isset($_GET['ci'])){
    $ciudad = $_GET['ci'];
    $barrio = $_GET['bar'];
    $gestion = $_GET['ge'];
    $inmueble = $_GET['in'];
    $precio_minimo = $_GET['premin'];
    $precio_maximo = $_GET['premax'];
}

$ch = curl_init();
    $headers =  'Authorization:' . TOKEN;
    curl_setopt($ch, CURLOPT_URL, 'http://www.simi-api.com/ApiSimiweb/response/v2.1.1/filtroInmueble/limite/'.$pag.'/total/9/departamento/0/ciudad/'.$ciudad.'/zona/0/barrio/'.$barrio.'/tipoInm/'.$inmueble.'/tipOper/'.$gestion.'/areamin/0/areamax/0/valmin/'.$precio_minimo.'/valmax/'.$precio_maximo.'/campo/0/order/0/banios/0/alcobas/0/garajes/0/sede/0/usuario/0');
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_USERPWD, $headers);
    $result = curl_exec($ch);
    curl_close($ch);
    $api = json_decode($result, true);

    
function listar_inmuebles($r)
{
    if (is_array($r)) {
            modelo_inmueble2($r);
    } else {
        echo '<h2 class="text-center" >No se encontraron inmuebles</h2>';
    }
}
