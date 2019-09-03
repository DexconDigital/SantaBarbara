
<?php
require_once 'conexion.php';

$nom_asesor=$_REQUEST["nom_asesor"];
$cel_asesor=$_REQUEST["cel_asesor"];
$cor_asesor= $_POST["cor_asesor"];
$imagen_asesor=$_FILES["imagena"]["name"];
$ruta=$_FILES["imagena"]["tmp_name"];
$nombre_foto = str_replace(" ","",$foto);
$destino="fotos/".$nombre_foto;
$fecha=$_REQUEST["fecha"];
$fecha = date("Y-m-d");
$id_inmo = 7;
/*


$nombre_ar = $_FILES['archivo']['name'];
$limite_kb = 850;
if($nombre_ar != ""){
    $tipo = $_FILES['archivo']['type'];
    $tamanio = $_FILES['archivo']['size'];
    $rutas = $_FILES['archivo']['tmp_name'];
    $nombre_archivo = str_replace(" ","",$nombre_ar);
    $destinos="archivo/".$nombre_archivo; 
    if($tamanio <= $limite_kb * 1024){
        $nombre_archivo = str_replace(" ","",$nombre_ar);
        $destinos="archivo/".$nombre_archivo; 
    }else{
        echo "Archivo demaciado Grande";
    }
    
    $con = Conect();
        copy($rutas,$destinos);
}
*/

$con = Conect();
    copy($ruta,$destino);

    
mysqli_query($con, "INSERT INTO `asesores` (`id`, `nombre`,`telefono`,`correo`,`imagen`,`id_inmobiliaria`,`fecha`) VALUES (NULL, '$nom_asesor','$cel_asesor','$cor_asesor','$imagen_asesor','$id_inmo','$fecha')");
header("Location: lista_asesores.php");
    
   
?>