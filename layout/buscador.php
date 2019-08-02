<!--Cuadro Nego-->
<div class="jumbotron  text-white bg-danger  ">
    <div class="container">
        <h1 class="display-4 text-center p-4"> Encuentra tu inmueble ideal </h1>

        <!--buscador-->
        <form>
            <div class="form-row justify-content-center">
                <div class="col-3 form-group ">
                    <input type="text" id='codigo_buscar' class="form-control rounded-0" placeholder="codigo">
                </div>
                <div class="col-3 form-group">
                    <select id="ciudad_buscar" class="form-control rounded-0">
                        <option selected>Ciudad</option>
                    </select>
                </div>
                <div class="col-3 form-group">
                    <select id="barrio_buscar" class="form-control rounded-0">
                        <option selected>Barrio</option>
                    </select>
                </div>
                <div class="col-3 form-group">
                    <select id="tipo_inmueble_buscar" class="form-control rounded-0">
                        <option selected> Tipo de Inmueble</option>
                    </select>
                </div>
                <div class="col-4 form-group">
                    <select id="tipo_gestion_buscar" class="form-control rounded-0">
                        <option selected>Tipo de gestión</option>
                    </select>
                </div>
                <div class="col-4 form-group">
                        <input type="text" id='area_minima_buscar' class="form-control rounded-0" placeholder="Area Minima">
                </div>
                <div class="col-4 form-group">
                        <input type="text" id='area_maxima_buscar' class="form-control rounded-0"placeholder="Area Maxima">
                </div>
                <div class="col-4 form-group">
                    <button type="submit" class="btn btn-dark btn-lg btn-block rounded-0">Buscar</button>
                </div>
        </form>

    </div>
    <!--fin del buscador-->
</div>

<!--Fin Cuadro negro-->