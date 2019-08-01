<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php include 'layout/archivosheader.php' ?>

  <title>Contacto</title>
</head>

<body>
  <?php include 'layout/menu.php' ?>

  <div class="contaider body border border-secondary">
    <div class="col-12 p-4 " id="contenedor_contacto">
      <h2 class="main-title text-center">Escríbenos</h2>
    </div>
    <div class="col-12 d-flex justify-content-around">
      <p class="text-center"> Pronto un asesor se contactará contigo, formulario de contacto con los campos:</p>
    </div>
    <div class="container-fluid ">
      <div class="row">
        <div class="col-md-12 border border-secondary">
          <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-4">
              <form role="form">
                <div class="form-group">
                  <label id="label" for="exampleInputEmail1">
                    Nombre:
                  </label>
                  <input type="text" class="form-control rounded-0" id="exampleInputEmail1" />
                </div>
                <div class="form-group">
                  <label id="label" for="exampleInputEmail1">
                    Correo electrónico:
                  </label>
                  <input type="email" class="form-control rounded-0" id="exampleInputEmail1" />
                </div>
              </form>
            </div>
            <div class="col-md-4">
              <form role="form">
                <div class="form-group">
                  <label id="label" for="exampleInputEmail1">
                    Apellido:
                  </label>
                  <input type="email" class="form-control rounded-0" id="exampleInputEmail1" />
                </div>
                <div class="form-group">
                  <label id="label" for="exampleInputPassword1">
                    Telefono (Opcional:)
                  </label>
                  <input type="password" class="form-control rounded-0" id="exampleInputPassword1" />
                </div>

            </div>
            <div class="col-md-2">
            </div>
            <div class="container-fluid border border-secondary">
              <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                  <label id="label">Mesaje</label>
                  <textarea id="texarea_contacto"></textarea>
                </div>
              </div>
            </div>
            <div class="col-md-12 d-flex justify-content-center p-4">
              <button id="estilo_button_contacto" type="submit" class="btn-1 flat-btn ">
                <span>ENVIAR</span>
              </button>
            </div>
            </form>
          </div>
          <div id='parallax'>
            <div class="overlay">
            </div>
            <div class="contenedor" id="noticia">
              <div class="card" style="width: 18rem;">
                <h3 id="titulo_not" class="text-center">Horario de atención </h3>
                <div class="card-body">
                  <p class="card-text"></p>
                </div>
              </div>
            </div>
          </div>
          <div class="container border border-secondary">
            <div class="col-12 p-4 mt-4 ">
              <h2 class="main-title text-center"> Datos de Contacto</h2>
            </div>
            <div class="row mt-5">
              <div class="col-xs-12 col-sm-4 col-md-3">
                <h5>Dirección:</h5>
                <p>Contact our Corporate HQ.</p>
                <a href="mailto:press@domain.com" class="link">ejemplo@dominio.com</a>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-3">
                <h5>Telefono:</h5>
                <p>Send a request to our Communications team.</p>
                <a href="#" class="link">+012.822.9058</a>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-3">
                <h5>Correo:</h5>
                <p>Report a technical issue with our site or apps.</p>
                <a href="mailto:feedback@domain.com" class="link">ejemplo@dominio.com</a>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-3">
                <h5>Celular:</h5>
                <p>WhatsApp:</p>
                <a href="#" class="link">+012.822.9058</a>
              </div>
            </div>
          </div>
        </div>
        <div style="padding: 40px 0px; background-color: #2f2f2f; width: 100%;" class="mt-4">
          <div class="container">
            <p class="tit_foot2 text-white">Suscríbete a nuestro boletín</p>
            <div class="subscribe">
              <input type="email" class="" placeholder="ejemplo@dominio.com" id="supscrp_foot">
              <button type="button" class="btn btn-dark rounded-0 " name=""><span>Enviar</span></button>
            </div>
          </div>
        </div>
      </div>
    </div>



    <?php include 'layout/footer.php' ?>

    <?php include('layout/archivosfooter.php'); ?>


</body>

</html>