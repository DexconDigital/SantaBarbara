<?php $page = "Agregar Acesor";
require("seguridad.php");
require_once("conexion.php");
include 'layout/layout.php';
?>
<style>
.color_fondo{
    background-color: white;

    
}
.boton_centro{
        text-align: center;
    }
    textarea:focus, textarea[type]:focus, input:focus, input[type]:focus{
    border-color: red; !important;
    box-shadow: 0 1px 1px rgba(229, 103, 23, 0.075)inset, 0 0 8px red; !important;
    outline: 0 none;
    }

</style>
<div class="container color_fondo">
    <div class="row justify-content-center">
        <div class="col-9" style="    margin-top: 27px;">
            <h2 style="margin-bottom: 35px;" class="text-center">Agregar Asesor</h2>
            <form method="POST" action="agregar_asesor.php" enctype="multipart/form-data">
            
               <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Nombre y apellido:</label>
                    <div class="col-sm-9">
                <input type="text" class="form-control" name="nom_asesor" id="nom_asesor" placeholder="Nombre y apellido"  required>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Celular:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="cel_asesor" id="cel_asesor" placeholder="Celular" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Correo:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="cor_asesor" id="cor_asesor" placeholder="ejemplo@dominio.com" required>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Foto del asesor</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control-file" name="imagen" id="imagen" accept="image/*">
                    </div>
                </div>

         
                <input type="hidden" id="fecha" name="fecha">
                <div class="form-group row">
                    <div class="col-8 offset-2 mt-4 boton_centro">
                        <button class="btn btn-danger" value="crear">Agregar Asesor</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'layout/layoutFooter.php'; ?> 