<?php
  require("functions.php");
  get_header();
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section>
    <div class="container-fluid">
      <div class="col-md-12 col-xs-12">
        <div class="content-wrapper">
          <div class="col-md-11 col-xs-12 titulo-perfil">
            <p id="subir">
              Licitaciones
            </p>
            <img src="images/recursos/linea-greca.png" alt="The Wedding Board">
          </div>
          <!-- Content Header (Page header) -->
          <!-- Main content -->
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
                    <strong>PLATAFORMA</strong>
                  </p>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-4 centers margin-izq confirma">
                  <p>
                    <strong>MIEMBRO</strong>
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
                      <input class="form-control no-border" type="text" value="TWB" id="example-text-input">
                    </label>
                  </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-3 acompañante-oculto center">
                  <div class="form-group centrar">
                    <span><br>Acompañantes</span>
                    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4 nomargin left-move">
                      <input class="form-control no-border" type="text" value="30-OCT-2017" id="example-text-input">
                    </div>
                  </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-3 margin-izq1 confirma-acompañante-oculto">

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
              </form>
            </div>
          </section>
          <!-- /.content -->
        </div>
      </div>
    </div>

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
                  <p class="titulo-popoup" style="text-transform:capitalize">
                    VAS AÑADIR  COMO PROVEEDOR A:
                  </p>
                  <p class="titulo-popoup">
                    Lor<span>em I</span>mpsum
                  </p>
                </div>

                <div class="col-md-8 col-md-offset-2 top-20">
                  <div class="col-md-6" style="text-align:right">
                    <button type="submit" class="btn btn-default icon-menssage"><i class="fa fa-check-square-o" aria-hidden="true"></i> Aceptar</button>
                  </div>
                  <div class="col-md-6">
                    <button type="submit" class="btn btn-default icon-menssage" data-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i> Cancelar</button>
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
  <div class="control-sidebar-bg"></div>
</div>

<?php
  get_footer();
?>
<script>
// Select all links with hashes
$('a[href*="#"]')
// Remove links that don't actually link to anything
.not('[href="#"]')
.not('[href="#0"]')
.click(function(event) {
  // On-page links
  if (
    location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
    &&
    location.hostname == this.hostname
  ) {
    // Figure out element to scroll to
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
    // Does a scroll target exist?
    if (target.length) {
      // Only prevent default if animation is actually gonna happen
      event.preventDefault();
      $('html, body').animate({
        scrollTop: target.offset().top
      }, 1000, function() {
        // Callback after animation
        // Must change focus!
        var $target = $(target);
        $target.focus();
        if ($target.is(":focus")) { // Checking if the target was focused
          return false;
        } else {
          $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
          $target.focus(); // Set focus again
        };
      });
    }
  }
});
</script>
