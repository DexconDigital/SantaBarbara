<!--Cuadro Nego-->
<div class="jumbotron  text-white bg-danger" style="border-radius: inherit;">
    <div class="container">
        <div class="col-lg-12 col-md-12  col-sm-12" >
            <h4 style="font-size: 1.7rem;    margin-bottom: 26px;" class="display-4 text-center "> Encuentra tu inmueble ideal </h4>
        </div>
        <!--buscador-->
        <form>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6  col-sm-12 form-group ">
                    <input type="text" id='codigo_buscar' class="form-control rounded-0" placeholder="Código">
                </div>
                <div class="col-lg-3 col-md-6  col-sm-12 form-group">
                    <select id="ciudad_buscar" class="form-control rounded-0">
                        <option selected value="0">Ciudad</option>
                    </select>
                </div>
                <div class="col-lg-3 col-md-6  col-sm-12 form-group">
                    <select id="barrio_buscar" class="form-control rounded-0">
                        <option selected value="0">Barrio</option>
                    </select>
                </div>
                <div class="col-lg-3 col-md-6  col-sm-12 form-group">
                    <select id="tipo_inmueble_buscar" class="form-control rounded-0">
                        <option selected value="0"> Tipo de Inmueble</option>
                    </select>
                </div>
                <div class="col-lg-4 col-md-4 form-group">
                    <select id="tipo_gestion_buscar" class="form-control rounded-0">
                        <option selected value="0">Tipo de gestión</option>
                    </select>
                </div>
                <div class="col-lg-4  col-md-4 form-group">
                        <input type="text" id='precio_minimo_buscar' class="form-control rounded-0" placeholder="Precio Mínimo">
                </div>
                <div class="col-lg-4  col-md-4 form-group">
                        <input type="text" id='precio_maximo_buscar' class="form-control rounded-0"placeholder="Precio Máximo">
                </div>
                <div class="col-lg-6  col-md-12 form-group">
                    <button type="button" id="buscar" class="btn btn-dark btn-lg btn-block rounded-0">Buscar</button>
                </div>
        </form>
    </div>
    <!--fin del buscador-->
</div>

<!--Fin Cuadro negro-->

