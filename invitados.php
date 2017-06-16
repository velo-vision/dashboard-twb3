<?php
  require("functions.php");
  get_header();
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section>
    <div class="container-fluid nomargin">
      <div class="col-md-6 col-md-offset-3 col-xs-12 titulo-perfil">
        <p>
          INVITACIONES
        </p>
        <img src="images/recursos/linea-greca.png" alt="The Wedding Board">
      </div>
      <div class="col-md-12 col-sm-offset-0 col-sm-12 col-sm-offset-0 col-xs-10 col-xs-offset-1 centers top-30">
        <div class="col-md-3 col-sm-6 col-xs-6">
          <img width="100%" src="images/invitaciones/1.jpg" alt="The Wedding Board">
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6">
          <img width="100%" src="images/invitaciones/2.jpg" alt="The Wedding Board">
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6">
          <img width="100%" src="images/invitaciones/3.jpg" alt="The Wedding Board">
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6">
          <img width="100%"  src="images/invitaciones/4.jpg" alt="The Wedding Board">
        </div>
      </div>
      <div class="col-md-4 col-md-offset-4 col-xs-12" style="">
        <p class="lista">aún no tienes lista de invitacion creadas</p>
        <div class="col-md-12 col-xs-12">
          <button type="button" class="btn btn-primary boton-invitados bottom-100" data-toggle="modal" data-target="#enviarInvitacion" data-whatever="@mdo">
            <img src="images/recursos/open.png" alt="The Wedding Board"> Crear tu invitación
          </button>
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
              <div class="modal-body col-md-12 col-xs-12 nomargin" style="background:white;">
                <!--COLLAPSER-->
                  <div class="col-md-12">
                    <p class="titulo-popoup">
                      <span>Inv</span>itaciónes
                    </p>
                  </div>
                  <div class="col-md-12 col-xs-12 nomargin">
                    <div class="box-body">
                      <div id="carousel-example-generic2" class="carousel slide col-md-12" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carousel-example-generic2" data-slide-to="0" class="active"></li>
                          <li data-target="#carousel-example-generic2" data-slide-to="1" class=""></li>
                          <li data-target="#carousel-example-generic2" data-slide-to="2" class=""></li>
                        </ol>
                        <div class="carousel-inner centers">
                          <div class="col-md-12 col-xs-12 item active">
                            <div class="col-md-4  col-sm-4 col-xs-6 margin-responsive invitacion-slider">
                              <a href="#!"><img width="100%" src="images/invitaciones/5.jpg" alt="The Wedding Board"></a>
                            </div>
                            <div class="col-md-4 col-md-offset-0 col-sm-4 col-xs-6 margin-responsive invitacion-slider">
                              <a href=""><img width="100%" src="images/invitaciones/6.jpg" alt="The Wedding Board"></a>
                            </div>
                            <div class="col-md-4 col-md-offset-0 col-sm-4 col-xs-6 col-xs-offset-3 margin-responsive invitacion-slider">
                              <a href=""><img width="100%" src="images/invitaciones/7.png" alt="The Wedding Board"></a>
                            </div>
                          </div>
                          <div class="col-md-12 col-xs-12 item">
                            <div class="col-md-4 col-md-offset-0 col-sm-4 col-xs-6 margin-responsive invitacion-slider">
                              <a href=""><img width="100%" src="images/invitaciones/8.jpg" alt="The Wedding Board"></a>
                            </div>
                            <div class="col-md-4 col-md-offset-0 col-sm-4 col-xs-6 margin-responsive invitacion-slider">
                              <a href=""><img width="100%" src="images/invitaciones/9.jpg" alt="The Wedding Board"></a>
                            </div>
                            <div class="col-md-4 col-md-offset-0 col-sm-4 col-xs-6 col-xs-offset-3 margin-responsive invitacion-slider">
                              <a href=""><img width="100%" src="images/invitaciones/10.jpg" alt="The Wedding Board"></a>
                            </div>
                          </div>
                          <div class="col-md-12 col-xs-12 item">
                            <div class="col-md-4 col-md-offset-0 col-sm-4 col-xs-6 margin-responsive invitacion-slider">
                              <a href=""><img width="100%" src="images/invitaciones/1.jpg" alt="The Wedding Board"></a>
                            </div>
                            <div class="col-md-4 col-md-offset-0 col-sm-4 col-xs-6 margin-responsive invitacion-slider">
                              <a href=""><img width="100%" src="images/invitaciones/2.jpg" alt="The Wedding Board"></a>
                            </div>
                            <div class="col-md-4 col-md-offset-0 col-sm-4 col-xs-6 col-xs-offset-3 margin-responsive invitacion-slider">
                              <a href=""><img width="100%" src="images/invitaciones/3.jpg" alt="The Wedding Board"></a>
                            </div>
                          </div>
                          <div class="item col-md-12 col-xs-12">
                            <div class="col-md-4 col-md-offset-0 col-sm-4 col-xs-6 margin-responsive invitacion-slider">
                              <a href=""><img width="100%" src="images/invitaciones/4.jpg" alt="The Wedding Board"></a>
                            </div>
                            <div class="col-md-4 col-md-offset-0 col-sm-4 col-xs-6 margin-responsive invitacion-slider">
                              <a href=""><img width="100%" src="images/invitaciones/5.jpg" alt="The Wedding Board"></a>
                            </div>
                            <div class="col-md-4 col-md-offset-0 col-sm-4 col-xs-6 col-xs-offset-3 margin-responsive invitacion-slider">
                              <a href=""><img width="100%" src="images/invitaciones/6.jpg" alt="The Wedding Board"></a>
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
                  <div class="col-md-12 col-xs-12 top-20">
                    <div class="col-md-2 col-md-offset-3 col-xs-12">
                      <a href="#!">
                        <p class="editar" style="visibility: hidden;">
                          <img src="images/recursos/enviar-invitacion.png" alt="The Wedding Board"> Enviar mi invitación
                        </p>
                      </a>
                    </div>
                    <div class="col-md-2 col-xs-12">
                      <a href="#!">
                        <p class="editar">
                          <img src="images/recursos/nueva-invitacion.png" alt="The Wedding Board"> Nueva invitación
                        </p>
                      </a>
                    </div>
                    <div class="col-md-2 col-xs-12" style="visibility: hidden;">
                      <a href="#!">
                        <p class="detalle">
                          <img src="images/recursos/cerrar.png" alt="The Wedding board"> Cancelar
                        </p>
                      </a>
                    </div>
                  </div>
                <!--COLLAPSER-->
              </div>
            </div>
          </div>
        </div>
        <!--MODAL-->
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<?php
  get_footer();
?>
