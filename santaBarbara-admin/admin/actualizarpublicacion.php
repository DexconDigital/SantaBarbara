<?php $page = "Lista de Noticias";
require( "seguridad.php" );
require_once( "conexion.php" );
include 'layout/layout.php';
$id = (isset($_GET["id"])) ? $_GET["id"] : 0;
$con = Conect();
$qry = "SELECT * FROM noticias where id ='$id' and id_inmobiliaria2 = 7";
$result = $con->prepare( $qry );
$result->execute();
$res = $result->fetch( PDO::FETCH_OBJ );
?>
<style>
    .contenedor_color {
        background-color: white;
    }

    .conct_botton {
        text-align: center;

    }

    .botonarchivo {
        margin-left: 25.66667%;
    }

    input[type]:focus {
        border-color: red;
         !important;
        box-shadow: 0 1px 1px rgba(229, 103, 23, 0.075)inset, 0 0 8px red;
         !important;
        outline: 0 none;
    }

</style>
<?php
if ( $res ) { ?>
<div class="container contenedor_color">
    <div class="row justify-content-center">
        <div class="col-9" style=" margin-top: 27px;">
            <h2 class="text-center">Editar Noticia</h2>
            <form method="post" action="uptade.php" enctype="multipart/form-data">
                <input type="hidden" name="id" id="id" value="<?php echo $res->id; ?>">
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Titulo Noticia</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="titulo" id="titulo" value="<?php echo $res->nombre; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Descripcion Corta</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="descripcion" id="descripcion" value="<?php echo $res->descripcion; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Noticia:</label>
                    <div class="col-sm-10">
                        <textarea name="noticia" id="noticia"><?php echo $res->noticia;?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Imagen Actual</label>
                    <div class="col-sm-10">
                        <img src="<?php echo $res->imagen; ?>" alt="" width="200px" height="auto">
                    </div>
                    <div class="col-sm-10 offset-2">
                        <input type="file" class="form-control-file" name="imagen" id="imagen" accept="image/*">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Archivo Actual</label>
                    <label for="" class="col-sm-10 col-form-label"><?php echo $res->archivo;?></label>
                    <div class="col-sm-8 offset-2">
                        <input type="file" class="form-control-file" name="archivo" id="archivo" accept="application/pdf">
                    </div>
                </div>
                <input type="hidden" id="fecha" name="fecha">
                <div class="form-group row">
                    <div class="col-8 offset-2 conct_botton">
                        <button class="btn btn-danger">Actualizar Noticia</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php 
} else {
    echo "<h1> No se encontró ningun registro</h1>";
}
include 'layout/layoutFooter.php';?>
