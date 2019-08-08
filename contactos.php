<?php require 'variables/variables.php';
$page = 'Contacto' ?>
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
  <div class="contaider body">
    <div class="col-12 p-4 " id="contenedor_contacto">
      <h2 class="main-title text-center">Escríbenos</h2>
    </div>
    <div class="col-12 d-flex justify-content-around">
      <p class="text-center"> Pronto un asesor se contactará contigo:</p>
    </div>
    <div class="container-fluid ">
      <div class="row">
        <div class="col-md-12">
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
                    Teléfono (Opcional:)
                  </label>
                  <input type="password" class="form-control rounded-0" id="exampleInputPassword1" />
                </div>

            </div>
            <div class="col-md-2 ">
            </div>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                  <label id="label">Mesaje</label>
                  <textarea id="texarea_contacto"></textarea>
                </div>
                <div>

                </div>
                
              </div>
            </div>
            <div class="col-7 container" style="margin-left: 246px;">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Confimo que he leído, entendido y acepto la política de tratamiento de datos personales.</label>
                </div>
            <div class="col-md-12 d-flex justify-content-center p-4">
              <button id="estilo_button_contacto" type="submit" class="btn-1 flat-btn ">
                <span>ENVIAR</span>
              </button>
            </div>
            </form>
          </div>
          <div class="row" >
          
            <div class="" >
            <iframe style="object-fit: contain; background-attachment: fixed;    position: absolute;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.387477550989!2d-74.04512468555325!3d4.702562842951571!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9ab269c06361%3A0xdca8e05035cfdad4!2sAk.+15+%23124-17%2C+Bogot%C3%A1!5e0!3m2!1ses-419!2sco!4v1565293824670!5m2!1ses-419!2sco" width="1350" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
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
          <div class="container" style=" margin-top: 265px;">
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
        <div id="enviar_contactos" style="" class="mt-4 ">
          <div class="container ">
            <div class="row d-flex justify-content-center">
              <div style="margin-top:-22px; margin-right: -55px;">
                <p class="tit_foot2 text-white justify-content-center">Suscríbete a nuestro boletín</p>
              </div>
              <div class="col-6 d-flex align-items-center justify-content-center">
                <div>
                  <div class="form-group border border-secondary">
                    <input type="email" class="col-12" placeholder="ejemplo@dominio.com" id="supscrp_foot">

                  </div>
                </div>
                <div class="form-group border border-secondary">
                  <button style=" padding: 12px;" type="button" class="btn btn-dark rounded-0 " name=""><span>Enviar</span></button>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



    <?php include 'layout/footer.php' ?>

    <?php include('layout/archivosfooter.php'); ?>


</body>

</html>