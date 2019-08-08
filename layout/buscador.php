<!--Cuadro Nego-->
<div class="jumbotron  text-white bg-danger  ">
    <div class="container">
        <h1 class="display-4 text-center p-4"> Encuentra tu inmueble ideal </h1>

        <!--buscador-->
        <form>
            <div class="form-row justify-content-center">
                <div class="col-3 form-group ">
                    <input type="text" id='codigo_buscar' class="form-control rounded-0" placeholder="Código">
                </div>
                <div class="col-3 form-group">
                    <select id="ciudad_buscar" class="form-control rounded-0">
                        <option selected value="0">Ciudad</option>
                    </select>
                </div>
                <div class="col-3 form-group">
                    <select id="barrio_buscar" class="form-control rounded-0">
                        <option selected value="0">Barrio</option>
                    </select>
                </div>
                <div class="col-3 form-group">
                    <select id="tipo_inmueble_buscar" class="form-control rounded-0">
                        <option selected value="0"> Tipo de Inmueble</option>
                    </select>
                </div>
                <div class="col-4 form-group">
                    <select id="tipo_gestion_buscar" class="form-control rounded-0">
                        <option selected value="0">Tipo de gestión</option>
                    </select>
                </div>
                <div class="col-4 form-group">
                        <input type="text" id='precio_minimo_buscar' class="form-control rounded-0" placeholder="Precio Mínimo">
                </div>
                <div class="col-4 form-group">
                        <input type="text" id='precio_maximo_buscar' class="form-control rounded-0"placeholder="Precio Máximo">
                </div>
                <div class="col-4 form-group">
                    <button type="button" id="buscar" class="btn btn-dark btn-lg btn-block rounded-0">Buscar</button>
                </div>
        </form>
    </div>
    <!--fin del buscador-->
</div>

<!--Fin Cuadro negro-->