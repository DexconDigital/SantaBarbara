<?php $page = "Agregar Noticia";
require("seguridad.php");
require_once("conexion.php");
include 'layout/layout.php';
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-9" style="    margin-top: 27px;">
            <h2 style="margin-bottom: 35px;" class="text-center">Agregar Publicación</h2>
            <form method="POST" action="guardar.php" enctype="multipart/form-data">
            
               <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Titulo Publicacion</label>
                    <div class="col-sm-10">
                <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Titulo Noticia"  required>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Descripcion Corta</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Descripcion Corta" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Publicacion:</label>
                    <div class="col-sm-10">
                        <textarea name="noticia" id="noticia"></textarea>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Imagen</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control-file" name="imagen" id="imagen" accept="image/*">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Archivo</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control-file" name="archivo" id="archivo" accept="application/pdf">
                    </div>
                </div>

                <input type="hidden" id="fecha" name="fecha">
                <div class="form-group row">
                    <div class="col-8 offset-2">
                        <button class="btn btn-dark" value="crear">Crear Publicacion</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'layout/layoutFooter.php'; ?>