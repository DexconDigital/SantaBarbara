<?php

require_once 'variables/config.php';
require_once 'modelo_inmueble.php';

$ch = curl_init();
    $headers =  'Authorization:' . TOKEN;
    curl_setopt($ch, CURLOPT_URL, 'http://www.simi-api.com/ApiSimiweb/response/v2.1.1/filtroInmueble/limite/1/total/9/departamento/0/ciudad/0/zona/0/barrio/0/tipoInm/0/tipOper/0/areamin/0/areamax/0/valmin/0/valmax/0/campo/0/order/0/banios/0/alcobas/0/garajes/0/sede/0/usuario/0');
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
