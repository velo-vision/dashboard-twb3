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
          LISTA DE INVITADOS
        </p>
        <img src="images/recursos/linea-greca.png" alt="The Wedding Board">
      </div>
      <div class="col-md-12 col-xs-12 nomargin propietario">
        <div class="col-md-2 col-xs-3">
          <p>
            propietario
          </p>
        </div>
        <div class="col-md-2 col-xs-3" style="margin-left:-5px;">
          <p>
            Lista de inivtados
          </p>
        </div>
        <div class="col-md-2 col-xs-3 nomargin">
          <p>
            # de invitados
          </p>
        </div>
        <div class="col-md-2 col-xs-3 nomargin">
          <p>
            confirmaciones
          </p>
        </div>
      </div>
      <div class="col-md-12 col-xs-12 invitado">
        <div class="col-md-2 col-xs-3">
          <p class="elipsi">
            Mónica Galindo
          </p>
        </div>
        <div class="col-md-2 col-xs-2 col-sm-2">
          <p>
            Familia
          </p>
        </div>
        <div class="col-md-2 col-xs-3 inv-margin">
          <a  data-toggle="collapse" href="#añadir-invitados" aria-expanded="false" aria-controls="collapseExample">
            <p class="añadir-invitados style-inv" style="margin-left:0;">
              Añadir invitados
            </p>
          </a>
        </div>
        <div class="col-md-2 col-xs-3 inv-centrar margin-int inv-right">
          <p>
            ?
          </p>
        </div>
        <div class="col-md-4 col-xs-12">
          <div class="col-md-4 col-xs-4 margin-no">
            <a href="detalle-invitacion.php">
              <p class="detalle">
                <img src="images/recursos/down.png" alt="The Wedding board"> Detalles
              </p>
            </a>
          </div>
          <div class="col-md-4 col-xs-4 margin-no">
            <a href="#!">
              <p class="editar">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar
              </p>
            </a>
          </div>
          <div class="col-md-4 col-xs-4 margin-no">
            <a href="#!">
              <p class="editar">
                <i class="fa fa-trash-o" aria-hidden="true"></i> Borrar
              </p>
            </a>
          </div>
        </div>
      </div>
      <!--COLLAPSER-->
      <div class="col-md-12 col-xs-12">
        <div class="collapse" id="añadir-invitados">
          <div class="col-md-12 col-xs-12 nomargin">
            <div>
              <div class="col-md-8 col-md-offset-2 col-xs-12">
                <ul class="nav nav-tabs tabs-añadir" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Añadir listas de e-mails</a></li>
                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Selecciona contactos de tu e-mail</a></li>
                    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Cargar plantillas de contactos</a></li>
                </ul>
              </div>
              <!-- Tab panes -->
              <div class="col-md-12 col-xs-12 tab-content">
                  <div role="tabpanel" class="tab-pane active" id="home">
                    <div class="col-md-12 col-xs-12">
                      <form class="col-md-10 col-md-offset-1 col-xs-12">
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
                    <div class="col-md-8 col-md-offset-2 col-xs-12 correos">
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
          </div>
        </div>
      </div>
      <!--COLLAPSER-->
      <div class="col-md-4 col-md-offset-4 col-xs-12" style="">
        <div class="col-md-12 col-xs-12">
          <button type="button" class="btn btn-primary boton-invitados1 bottom-50" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
            <img src="images/recursos/open.png" alt="The Wedding Board"> Crear nueva lista de invitados
          </button>
        </div>
        <!--MODAL-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><img src="images/recursos/close-popoup.png" alt="The Wedding Board"> cerrar</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="form-group">
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nombre de la Lista">
                  </div>
                </form>
              </div>
              <div class="modal-footer centers">
                <button type="button" class="btn btn-secondary boton-crear" data-dismiss="modal">Crear</button>
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
