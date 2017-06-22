<?php
  require("functions.php");
  get_header();
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section>
    <div class="container-fluid nomargin">
      <div class="col-md-6 col-md-offset-3 titulo-perfil">
        <p>
          LISTA DE INVITADOS
        </p>
        <img src="images/recursos/linea-greca.png" alt="The Wedding Board">
      </div>
      <!---->
      <form action="">
      <div class="col-md-12 top-50 dotted-down">
        <div class="col-md-3 col-lg-2">
          <a data-toggle="modal" data-target="#añadirContacto" data-whatever="@mdo">
            <p class="detalle">
              <img src="images/recursos/añadir-invitado.png" alt="The Wedding board"> Añadir Invitados
            </p>
          </a>
        </div>
        <div class="col-md-2 col-lg-1">
          <a href="#!">
            <p class="editar">
              <i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar
            </p>
          </a>
        </div>
        <div class="col-md-3 col-lg-2">
          <a data-toggle="modal" data-target="#enviarInvitacion" data-whatever="@mdo">
            <p class="editar">
              <img src="images/recursos/enviar-invitacion.png" alt="The Wedding Board"> Enviar mi invitación
            </p>
          </a>
          <!-- <button type="button" class="editar" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
            <img src="images/recursos/enviar-invitacion.png" alt="The Wedding Board"> Enviar mi invitación
          </button> -->
        </div>
        <div class="col-md-3 col-lg-2">
          <a href="#!">
            <p class="editar">
              <img src="images/recursos/nueva-invitacion.png" alt="The Wedding Board"> Crear una invitación
            </p>
          </a>
        </div>
      </div>
      <!--Empieza cuadro-->
      <div class="col-md-12 col-sm-12 col-xs-12 confirma dotted-down">
        <div class="col-md-1 col-sm-1 col-xs-1 centers ocultar">
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
            </label>
          </div>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-5">
          <p>
            <strong>NOMBRE</strong>
          </p>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-3">
          <p>
            <strong>MAIL</strong>
          </p>
        </div>
        <div class="col-md-1 col-sm-2 col-xs-4">
          <p>
            <strong>CONFIRMACIÓN</strong>
          </p>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-4 centers margin-izq confirma">
          <p>
            <strong>ACOMPAÑANTES</strong>
          </p>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-3">
          <p class="nomargin">
            <strong>CONFIRMACIÓN</strong>
          </p>
          <p class="nomargin">
            <strong>ACOMPAÑANTES</strong>
          </p>
        </div>
      </div>
      <div class="col-md-12 col-sm-12 col-xs-12 dotted-down">
        <div class="col-md-1 col-sm-1 col-xs-1 centers ocultar">
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
            </label>
          </div>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-6 nomargin nombre-oculto centrar">
          <span>Nombre</span>
          <input class="form-control no-border centrar" type="text" value="Armando Cantona" id="example-text-input">
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 nomargin email-oculto">
          <span>Mail</span>
          <input class="form-control no-border" type="text" value="armando@webmail.mx" id="example-text-input">
        </div>
        <div class="col-md-1 col-sm-1 col-xs-4 centers confirmar-check">
          <div class="form-check">
            <label class="form-check-label check-cuadro">
              <span><br>CONFIRMACIÓN<br></span>
              <input type="checkbox" class="form-check-input">
            </label>
          </div>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-3 acompañante-oculto center">
          <div class="form-group centrar">
            <span><br>Acompañantes</span>
            <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4 nomargin left-move">
              <input class="form-control margin-izq" style="border:none !important;" type="number" value="0" id="example-number-input">
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-3 margin-izq1 confirma-acompañante-oculto">
          <div class="form-group centrar">
            <span>Confirmación <br>acompañante</span>
            <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-1 col-lg-4 col-lg-offset-4 left-move1 nomargin">
              <input class="form-control margin-izq" style="border:none !important;" type="number" value="1" id="example-number-input">
            </div>
          </div>
        </div>
        <div class="col-md-1 col-sm-6 col-xs-6 guardar-right nomargin">
          <p class="save">
            <i class="fa fa-floppy-o" aria-hidden="true"></i> Guardar
          </p>
        </div>
        <div class="col-md-1 col-sm-6 col-xs-6 nomargin">
          <p class="save">
            <i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar
          </p>
        </div>
      </div>
      <!---->
      <div class="col-md-12 col-sm-12 col-xs-12 dotted-down">
        <div class="col-md-1 col-sm-1 col-xs-1 centers ocultar">
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
            </label>
          </div>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-6 nomargin nombre-oculto centrar">
          <span>Nombre</span>
          <input class="form-control no-border centrar" type="text" value="Manuel Gómez" id="example-text-input">
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 nomargin email-oculto">
          <span>Mail</span>
          <input class="form-control no-border" type="text" value="manuel@webmail.mx" id="example-text-input">
        </div>
        <div class="col-md-1 col-sm-1 col-xs-4 centers confirmar-check">
          <div class="form-check">
            <label class="form-check-label check-cuadro">
              <span><br>CONFIRMACIÓN<br></span>
              <input type="checkbox" class="form-check-input">
            </label>
          </div>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-3 acompañante-oculto center">
          <div class="form-group centrar">
            <span><br>acompañante</span>
            <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4 left-move nomargin">
              <input class="form-control margin-izq" style="border:none !important;" type="number" value="2" id="example-number-input">
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-3 margin-izq1 confirma-acompañante-oculto">
          <div class="form-group centrar">
            <span>Confirmación <br>acompañante</span>
            <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-1 col-lg-4 col-lg-offset-4 left-move1 nomargin">
              <input class="form-control margin-izq" style="border:none !important;" type="number" value="1" id="example-number-input">
            </div>
          </div>
        </div>
        <div class="col-md-1 col-sm-6 col-xs-6 guardar-right nomargin">
          <p class="save">
            <i class="fa fa-floppy-o" aria-hidden="true"></i> Guardar
          </p>
        </div>
        <div class="col-md-1 col-sm-6 col-xs-6 nomargin">
          <p class="save">
            <i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar
          </p>
        </div>
      </div>
      <!---->
      <div class="col-md-12 col-sm-12 col-xs-12 dotted-down">
        <div class="col-md-1 col-sm-1 col-xs-1 centers ocultar">
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
            </label>
          </div>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-6 nomargin nombre-oculto centrar">
          <span>Nombre</span>
          <input class="form-control no-border centrar" type="text" value="Perla Alvear" id="example-text-input">
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 nomargin email-oculto">
          <span>Mail</span>
          <input class="form-control no-border" type="text" value="perla@webmail.mx" id="example-text-input">
        </div>
        <div class="col-md-1 col-sm-1 col-xs-4 centers confirmar-check">
          <div class="form-check">
            <label class="form-check-label check-cuadro">
              <span><br>CONFIRMACIÓN<br></span>
              <input type="checkbox" class="form-check-input">
            </label>
          </div>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-3 acompañante-oculto center">
          <div class="form-group centrar">
            <span><br>acompañante</span>
            <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4 left-move nomargin">
              <input class="form-control margin-izq" style="border:none !important;" type="number" value="2" id="example-number-input">
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-3 margin-izq1 confirma-acompañante-oculto">
          <div class="form-group centrar">
            <span>Confirmación <br>acompañante</span>
            <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-1 col-lg-4 col-lg-offset-4 left-move1 nomargin">
              <input class="form-control margin-izq" style="border:none !important;" type="number" value="1" id="example-number-input">
            </div>
          </div>
        </div>
        <div class="col-md-1 col-sm-6 col-xs-6 guardar-right nomargin">
          <p class="save">
            <i class="fa fa-floppy-o" aria-hidden="true"></i> Guardar
          </p>
        </div>
        <div class="col-md-1 col-sm-6 col-xs-6 nomargin">
          <p class="save">
            <i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar
          </p>
        </div>
      </div>
      <!---->
      <div class="col-md-12 col-sm-12 col-xs-12 dotted-down">
        <div class="col-md-1 col-sm-1 col-xs-1 centers ocultar">
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
            </label>
          </div>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-6 nomargin nombre-oculto centrar">
          <span>Nombre</span>
          <input class="form-control no-border centrar" type="text" value="Sofía Domínguez" id="example-text-input">
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 nomargin email-oculto">
          <span>Mail</span>
          <input class="form-control no-border" type="text" value="sofia@webmail.mx" id="example-text-input">
        </div>
        <div class="col-md-1 col-sm-1 col-xs-4 centers confirmar-check">
          <div class="form-check">
            <label class="form-check-label check-cuadro">
              <span><br>CONFIRMACIÓN<br></span>
              <input type="checkbox" class="form-check-input">
            </label>
          </div>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-3 acompañante-oculto center">
          <div class="form-group centrar">
            <span><br>acompañante</span>
            <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4 left-move nomargin">
              <input class="form-control margin-izq" style="border:none !important;" type="number" value="2" id="example-number-input">
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-3 margin-izq1 confirma-acompañante-oculto">
          <div class="form-group centrar">
            <span>Confirmación <br>acompañante</span>
            <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-1 col-lg-4 col-lg-offset-4 left-move1 nomargin">
              <input class="form-control margin-izq" style="border:none !important;" type="number" value="1" id="example-number-input">
            </div>
          </div>
        </div>
        <div class="col-md-1 col-sm-6 col-xs-6 guardar-right nomargin">
          <p class="save">
            <i class="fa fa-floppy-o" aria-hidden="true"></i> Guardar
          </p>
        </div>
        <div class="col-md-1 col-sm-6 col-xs-6 nomargin">
          <p class="save">
            <i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar
          </p>
        </div>
      </div>
      <!---->
      <div class="col-md-12 col-sm-12 col-xs-12 dotted-down">
        <div class="col-md-1 col-sm-1 col-xs-1 centers ocultar">
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
            </label>
          </div>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-6 nomargin nombre-oculto centrar">
          <span>Nombre</span>
          <input class="form-control no-border centrar" type="text" value="Martha Gómez" id="example-text-input">
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 nomargin email-oculto">
          <span>Mail</span>
          <input class="form-control no-border" type="text" value="martha@webmail.mx" id="example-text-input">
        </div>
        <div class="col-md-1 col-sm-1 col-xs-4 centers confirmar-check">
          <div class="form-check">
            <label class="form-check-label check-cuadro">
              <span><br>CONFIRMACIÓN<br></span>
              <input type="checkbox" class="form-check-input">
            </label>
          </div>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-3 acompañante-oculto center">
          <div class="form-group centrar">
            <span><br>acompañante</span>
            <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4 left-move nomargin">
              <input class="form-control margin-izq" style="border:none !important;" type="number" value="2" id="example-number-input">
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-3 margin-izq1 confirma-acompañante-oculto">
          <div class="form-group centrar">
            <span>Confirmación <br>acompañante</span>
            <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-1 col-lg-4 col-lg-offset-4 left-move1 nomargin">
              <input class="form-control margin-izq" style="border:none !important;" type="number" value="1" id="example-number-input">
            </div>
          </div>
        </div>
        <div class="col-md-1 col-sm-6 col-xs-6 guardar-right nomargin">
          <p class="save">
            <i class="fa fa-floppy-o" aria-hidden="true"></i> Guardar
          </p>
        </div>
        <div class="col-md-1 col-sm-6 col-xs-6 nomargin">
          <p class="save">
            <i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar
          </p>
        </div>
      </div>
      <!---->
      <div class="col-md-12 col-sm-12 col-xs-12 dotted-down">
        <div class="col-md-1 col-sm-1 col-xs-1 centers ocultar">
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
            </label>
          </div>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-6 nomargin nombre-oculto centrar">
          <span>Nombre</span>
          <input class="form-control no-border centrar" type="text" value="Marco Ibargüen" id="example-text-input">
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 nomargin email-oculto">
          <span>Mail</span>
          <input class="form-control no-border" type="text" value="marco@webmail.mx" id="example-text-input">
        </div>
        <div class="col-md-1 col-sm-1 col-xs-4 centers confirmar-check">
          <div class="form-check">
            <label class="form-check-label check-cuadro">
              <span><br>CONFIRMACIÓN<br></span>
              <input type="checkbox" class="form-check-input">
            </label>
          </div>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-3 acompañante-oculto center">
          <div class="form-group centrar">
            <span><br>acompañante</span>
            <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4 left-move nomargin">
              <input class="form-control margin-izq" style="border:none !important;" type="number" value="2" id="example-number-input">
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-3 margin-izq1 confirma-acompañante-oculto">
          <div class="form-group centrar">
            <span>Confirmación <br>acompañante</span>
            <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-1 col-lg-4 col-lg-offset-4 left-move1 nomargin">
              <input class="form-control margin-izq" style="border:none !important;" type="number" value="1" id="example-number-input">
            </div>
          </div>
        </div>
        <div class="col-md-1 col-sm-6 col-xs-6 guardar-right nomargin">
          <p class="save">
            <i class="fa fa-floppy-o" aria-hidden="true"></i> Guardar
          </p>
        </div>
        <div class="col-md-1 col-sm-6 col-xs-6 nomargin">
          <p class="save">
            <i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar
          </p>
        </div>
      </div>
      <!---->
      <div class="col-md-12 col-sm-12 col-xs-12 dotted-down">
        <div class="col-md-1 col-sm-1 col-xs-1 centers ocultar">
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
            </label>
          </div>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-6 nomargin nombre-oculto centrar">
          <span>Nombre</span>
          <input class="form-control no-border centrar" type="text" value="José Gonzáles" id="example-text-input">
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 nomargin email-oculto">
          <span>Mail</span>
          <input class="form-control no-border" type="text" value="jose@webmail.mx" id="example-text-input">
        </div>
        <div class="col-md-1 col-sm-1 col-xs-4 centers confirmar-check">
          <div class="form-check">
            <label class="form-check-label check-cuadro">
              <span><br>CONFIRMACIÓN<br></span>
              <input type="checkbox" class="form-check-input">
            </label>
          </div>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-3 acompañante-oculto center">
          <div class="form-group centrar">
            <span><br>acompañante</span>
            <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4 left-move nomargin">
              <input class="form-control margin-izq" style="border:none !important;" type="number" value="2" id="example-number-input">
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-3 margin-izq1 confirma-acompañante-oculto">
          <div class="form-group centrar">
            <span>Confirmación <br>acompañante</span>
            <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-1 col-lg-4 col-lg-offset-4 left-move1 nomargin">
              <input class="form-control margin-izq" style="border:none !important;" type="number" value="1" id="example-number-input">
            </div>
          </div>
        </div>
        <div class="col-md-1 col-sm-6 col-xs-6 guardar-right nomargin">
          <p class="save">
            <i class="fa fa-floppy-o" aria-hidden="true"></i> Guardar
          </p>
        </div>
        <div class="col-md-1 col-sm-6 col-xs-6 nomargin">
          <p class="save">
            <i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar
          </p>
        </div>
      </div>
      <!---->
      <div class="col-md-12 col-sm-12 col-xs-12 dotted-down">
        <div class="col-md-1 col-sm-1 col-xs-1 centers ocultar">
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
            </label>
          </div>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-6 nomargin nombre-oculto centrar">
          <span>Nombre</span>
          <input class="form-control no-border centrar" type="text" value="Daniel Júarez" id="example-text-input">
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 nomargin email-oculto">
          <span>Mail</span>
          <input class="form-control no-border" type="text" value="daniel@webmail.mx" id="example-text-input">
        </div>
        <div class="col-md-1 col-sm-1 col-xs-4 centers confirmar-check">
          <div class="form-check">
            <label class="form-check-label check-cuadro">
              <span><br>CONFIRMACIÓN<br></span>
              <input type="checkbox" class="form-check-input">
            </label>
          </div>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-3 acompañante-oculto center">
          <div class="form-group centrar">
            <span><br>acompañante</span>
            <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4 left-move nomargin">
              <input class="form-control margin-izq" style="border:none !important;" type="number" value="2" id="example-number-input">
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-3 margin-izq1 confirma-acompañante-oculto">
          <div class="form-group centrar">
            <span>Confirmación <br>acompañante</span>
            <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-1 col-lg-4 col-lg-offset-4 left-move1 nomargin">
              <input class="form-control margin-izq" style="border:none !important;" type="number" value="1" id="example-number-input">
            </div>
          </div>
        </div>
        <div class="col-md-1 col-sm-6 col-xs-6 guardar-right nomargin">
          <p class="save">
            <i class="fa fa-floppy-o" aria-hidden="true"></i> Guardar
          </p>
        </div>
        <div class="col-md-1 col-sm-6 col-xs-6 nomargin">
          <p class="save">
            <i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar
          </p>
        </div>
      </div>
      <!---->
      <div class="col-md-12 col-sm-12 col-xs-12 dotted-down">
        <div class="col-md-1 col-sm-1 col-xs-1 centers ocultar">
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
            </label>
          </div>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-6 nomargin nombre-oculto centrar">
          <span>Nombre</span>
          <input class="form-control no-border centrar" type="text" value="Cecilia Rementería" id="example-text-input">
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 nomargin email-oculto">
          <span>Mail</span>
          <input class="form-control no-border" type="text" value="cecilia@webmail.mx" id="example-text-input">
        </div>
        <div class="col-md-1 col-sm-1 col-xs-4 centers confirmar-check">
          <div class="form-check">
            <label class="form-check-label check-cuadro">
              <span><br>CONFIRMACIÓN<br></span>
              <input type="checkbox" class="form-check-input">
            </label>
          </div>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-3 acompañante-oculto center">
          <div class="form-group centrar">
            <span><br>acompañante</span>
            <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4 left-move nomargin">
              <input class="form-control margin-izq" style="border:none !important;" type="number" value="2" id="example-number-input">
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-3 margin-izq confirma-acompañante-oculto">
          <div class="form-group centrar">
            <span>Confirmación <br>acompañante</span>
            <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-1 col-lg-4 col-lg-offset-4 left-move1 nomargin">
              <input class="form-control margin-izq" style="border:none !important;" type="number" value="1" id="example-number-input">
            </div>
          </div>
        </div>
        <div class="col-md-1 col-sm-6 col-xs-6 guardar-right nomargin">
          <p class="save">
            <i class="fa fa-floppy-o" aria-hidden="true"></i> Guardar
          </p>
        </div>
        <div class="col-md-1 col-sm-6 col-xs-6 nomargin">
          <p class="save">
            <i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar
          </p>
        </div>
      </div>
        <!--Fin cuadro-->
      </form>
    </div>

    <!--MODAL-->
    <div class="modal fade" id="añadirContacto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog content-popoup" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><img src="images/recursos/close-popoup.png" alt="The Wedding Board"> cerrar</span>
            </button>
          </div>
          <div class="modal-body col-md-12" style="background:white;">
            <!--COLLAPSER-->
                <div class="col-md-12">
                  <p class="titulo-popoup">
                    añadir <span>con</span>tactos
                  </p>
                </div>
                <div>
                  <div class="col-md-8 col-md-offset-2">
                    <ul class="nav nav-tabs tabs-añadir" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Añadir listas de e-mails</a></li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Seleccionacontactos de tu e-mail</a></li>
                        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Cargar plantillas de contactos</a></li>
                    </ul>
                  </div>
                  <!-- Tab panes -->
                  <div class="col-md-12 tab-content">
                      <div role="tabpanel" class="tab-pane active" id="home">
                        <div class="col-md-12">
                          <form class="col-md-10 col-md-offset-1">
                            <div class="form-group col-md-4 col-md-offset-2">
                              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nombre">
                            </div>
                            <div class="form-group col-md-4">
                              <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Email">
                            </div>
                            <div class="form-group col-md-4 col-md-offset-4 centers">
                              <button type="submit" class="btn btn-primary boton-añadir">Añadir</button>
                            </div>
                            <div class="form-group col-md-8 col-md-offset-2">
                              <label for="comment" class="text-areas">Copía y pega en forma de lista tus contactos o separalos por un punto y coma</label>
                              <textarea class="form-control" rows="5" id="comment"></textarea>
                            </div>
                            <div class="form-group col-md-4 col-md-offset-4 centers">
                              <button type="submit" class="btn btn-primary boton-añadir">Añadir</button>
                            </div>
                          </form>
                        </div>
                      </div>
                      <div role="tabpanel" class="tab-pane" id="profile">
                        <div class="col-md-8 col-md-offset-2 correos">
                          <ul>
                            <li>
                              <a href=""><img src="images/recursos/hotmail.png" alt="The Wedding Board"></a>
                            </li>
                            <li>
                              <a href=""><img src="images/recursos/yahoo.png" alt="The Wedding Board"></a>
                            </li>
                            <li>
                              <a href=""><img src="images/recursos/gmail.png" alt="The Wedding Board"></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div role="tabpanel" class="tab-pane " id="messages">
                        <div class="col-md-6 col-md-offset-3 ">
                          <div class="box-body">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                              <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                              </ol>
                              <div class="carousel-inner">
                                <div class="item active">
                                  <p class="pasos">
                                    A continuación te enseñamos te enseñamos los pasos para que puedas
                                    cargar tu lista de invitados con un <strong>documento de EXCEL</strong>
                                  </p>
                                  <p class="back-1">
                                    Descarga la plantilla con el siguiente botón
                                  </p>
                                  <p class="descargar-1">
                                    <img src="images/recursos/descargar.png" alt="The Wedding Board"> Descargar
                                  </p>
                                  <!-- <div class="carousel-caption">
                                    First Slide
                                  </div> -->
                                </div>
                                <div class="item">
                                  <p class="back-2">
                                    Llena la plantilla conforme al siguiente ejemplo
                                  </p>
                                  <div class="tabla-excel">
                                    <img src="images/recursos/excel.png" alt="The Wedding Board">
                                  </div>
                                </div>
                                <div class="item">
                                  <p class="back-3">
                                    Llena la plantilla conforme al siguiente ejemplo
                                  </p>
                                  <div class="centers">
                                    <img src="images/recursos/csv.png" alt="The Wedding Board">
                                  </div>
                                </div>
                                <div class="item">
                                  <p class="back-4">
                                    Sube tu archivo a la plataforma y envíalo para porcesarlo
                                  </p>
                                  <div class="col-md-3 col-md-offset-3">
                                    <a href="#!">
                                      <p class="detalle">
                                        <img src="images/recursos/cargar.png" alt="The Wedding Board"> Cargar
                                      </p>
                                    </a>
                                  </div>
                                  <div class="col-md-3">
                                    <a href="#!">
                                      <p class="editar">
                                        <img src="images/recursos/enviar.png" alt="The Wedding Board"> Enviar
                                      </p>
                                    </a>
                                  </div>
                                  <div class="col-md-6 col-md-offset-3">
                                    <p class="cvs">
                                      Añade archivos independientes a la plantilla <br>
                                      <strong>(.csv, .vcf, .vcard)</strong>
                                    </p>
                                  </div>
                                </div>
                              </div>
                              <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="fa fa-angle-left"></span>
                              </a>
                              <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="fa fa-angle-right"></span>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
            <!--COLLAPSER-->
          </div>
        </div>
      </div>
    </div>
    <!--MODAL-->
    <!--MODAL-->
    <div class="modal fade" id="enviarInvitacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog content-popoup" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><img src="images/recursos/close-popoup.png" alt="The Wedding Board"> cerrar</span>
            </button>
          </div>
          <div class="modal-body col-md-12" style="background:white;">
            <!--COLLAPSER-->
              <div class="col-md-12">
                <p class="titulo-popoup">
                  enviar<span> inv</span>itación
                </p>
                <p class="titulo-popoup" style="text-transform:capitalize">
                  Selecciona una invitación para enviarla a tus contactos seleccionados
                </p>
              </div>
              <div class="col-md-12">
                <div class="box-body">
                  <div id="carousel-example-generic2" class="carousel slide col-md-12" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carousel-example-generic2" data-slide-to="0" class="active"></li>
                      <li data-target="#carousel-example-generic2" data-slide-to="1" class=""></li>
                      <li data-target="#carousel-example-generic2" data-slide-to="2" class=""></li>
                    </ol>
                    <div class="carousel-inner centers">
                      <div class="col-md-12 item active">
                        <div class="col-md-4 invitacion-slider">
                          <p class="titulo-invitacion"><i class="fa fa-caret-right" aria-hidden="true"></i> Lorem ipsum <span>$</span> <strong>30.°°</strong></p>
                          <a href="#!"><img src="images/recursos/invitacion-1.png" alt="The Wedding Board"></a>
                        </div>
                        <div class="col-md-4 invitacion-slider">
                          <p class="titulo-invitacion"><i class="fa fa-caret-right" aria-hidden="true"></i> Lorem ipsum <span>$</span> <strong>30.°°</strong></p>
                          <a href=""><img src="images/recursos/invitacion-2.png" alt="The Wedding Board"></a>
                        </div>
                        <div class="col-md-4 invitacion-slider">
                          <p class="titulo-invitacion"><i class="fa fa-caret-right" aria-hidden="true"></i> Lorem ipsum <span>$</span> <strong>30.°°</strong></p>
                          <a href=""><img src="images/recursos/invitacion-3.png" alt="The Wedding Board"></a>
                        </div>
                      </div>
                      <div class="col-md-12 item">
                        <div class="col-md-4 invitacion-slider">
                          <p class="titulo-invitacion"><i class="fa fa-caret-right" aria-hidden="true"></i> Lorem ipsum <span>$</span> <strong>30.°°</strong></p>
                          <a href=""><img src="images/recursos/invitacion-1.png" alt="The Wedding Board"></a>
                        </div>
                        <div class="col-md-4 invitacion-slider">
                          <p class="titulo-invitacion"><i class="fa fa-caret-right" aria-hidden="true"></i> Lorem ipsum <span>$</span> <strong>30.°°</strong></p>
                          <a href=""><img src="images/recursos/invitacion-2.png" alt="The Wedding Board"></a>
                        </div>
                        <div class="col-md-4 invitacion-slider">
                          <p class="titulo-invitacion"><i class="fa fa-caret-right" aria-hidden="true"></i> Lorem ipsum <span>$</span> <strong>30.°°</strong></p>
                          <a href=""><img src="images/recursos/invitacion-3.png" alt="The Wedding Board"></a>
                        </div>
                      </div>
                      <div class="col-md-12 item">
                        <div class="col-md-4 invitacion-slider">
                          <p class="titulo-invitacion"><i class="fa fa-caret-right" aria-hidden="true"></i> Lorem ipsum <span>$</span> <strong>30.°°</strong></p>
                          <a href=""><img src="images/recursos/invitacion-1.png" alt="The Wedding Board"></a>
                        </div>
                        <div class="col-md-4 invitacion-slider">
                          <p class="titulo-invitacion"><i class="fa fa-caret-right" aria-hidden="true"></i> Lorem ipsum <span>$</span> <strong>30.°°</strong></p>
                          <a href=""><img src="images/recursos/invitacion-2.png" alt="The Wedding Board"></a>
                        </div>
                        <div class="col-md-4 invitacion-slider">
                          <p class="titulo-invitacion"><i class="fa fa-caret-right" aria-hidden="true"></i> Lorem ipsum <span>$</span> <strong>30.°°</strong></p>
                          <a href=""><img src="images/recursos/invitacion-3.png" alt="The Wedding Board"></a>
                        </div>
                      </div>
                      <div class="item col-md-12">
                        <div class="col-md-4 invitacion-slider">
                          <p class="titulo-invitacion"><i class="fa fa-caret-right" aria-hidden="true"></i> Lorem ipsum <span>$</span> <strong>30.°°</strong></p>
                          <a href=""><img src="images/recursos/invitacion-1.png" alt="The Wedding Board"></a>
                        </div>
                        <div class="col-md-4 invitacion-slider">
                          <p class="titulo-invitacion"><i class="fa fa-caret-right" aria-hidden="true"></i> Lorem ipsum <span>$</span> <strong>30.°°</strong></p>
                          <a href=""><img src="images/recursos/invitacion-2.png" alt="The Wedding Board"></a>
                        </div>
                        <div class="col-md-4 invitacion-slider">
                          <p class="titulo-invitacion"><i class="fa fa-caret-right" aria-hidden="true"></i> Lorem ipsum <span>$</span> <strong>30.°°</strong></p>
                          <a href=""><img src="images/recursos/invitacion-3.png" alt="The Wedding Board"></a>
                        </div>
                      </div>
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic2" data-slide="prev">
                      <span style="color:#88d9e9" class="fa fa-angle-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic2" data-slide="next">
                      <span style="color:#88d9e9" class="fa fa-angle-right"></span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-md-12 top-20">
                <div class="col-md-2 col-md-offset-3">
                  <a href="#!">
                    <p class="editar">
                      <img src="images/recursos/enviar-invitacion.png" alt="The Wedding Board"> Enviar mi invitación
                    </p>
                  </a>
                </div>
                <div class="col-md-2">
                  <a href="#!">
                    <p class="editar">
                      <img src="images/recursos/nueva-invitacion.png" alt="The Wedding Board"> Nueva invitación
                    </p>
                  </a>
                </div>
                <div class="col-md-2">
                  <a href="#!">
                    <p class="detalle">
                      <img src="images/recursos/cerrar.png" alt="The Wedding board"> Cancelar
                    </p>
                  </a>
                </div>
                <div class="col-md-2 col-md-offset-1 recarga">
                  <p class="nomargin">tu saldo es de <span>$0.00</span></p>
                  <a href="#!"><p class="nomargin"><strong>RECARGA AQUÍ</strong></p></a>
                </div>
              </div>
            <!--COLLAPSER-->
          </div>
        </div>
      </div>
    </div>
    <!--MODAL-->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
<?php
  get_footer();
?>
