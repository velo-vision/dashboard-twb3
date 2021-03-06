<?php
  //include("head-3.php");
?>
<?php
  require("functions.php");
  //get_header();
  get_headerPrincipal();

  get_aside();
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <!-- /.col -->
      <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 titulo-usuario1">
        <p>
          Proveedores
        </p>
        <img src="images/recursos/linea-greca.png" alt="The Wedding Board" width="100%">
      </div>
      <div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3 col-xs-12 top-20 botton-volver">
        <div class="col-xs-3 col-sm-3 col-md-4 prev-next nomargin">
          <img src="images/dashboard/anterior.png" alt="The Wedding Board">
          <span>Anterior</span>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-4 centers nomargin">
          <a href="proveedores-registrados.php">
            <p class="usuario-volver" style="margin: 0 auto;">
              <img src="images/dashboard/volver.png" alt="The Wedding Board"> Volver a Listado
            </p>
          </a>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-4 prev-next1 nomargin">
          <span>Siguiente</span>
          <img src="images/dashboard/siguiente.png" alt="The Wedding Board">
        </div>
      </div>
      <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 linea-config"></div>

      <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 margin-men">
        <div class="col-xs-12 col-sm-6 col-md-3 centers margin-volver">
            <a href="">
              <p class="usuario5 margin-0">
                <i class="fa fa-envelope-o" aria-hidden="true"></i> Enviar Mensajes
              </p>
            </a>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 centers margin-volver">
            <a href="">
              <p class="usuario5 margin-0">
                <i class="fa fa-ban" aria-hidden="true"></i> Inhabilitar
              </p>
            </a>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 centers margin-volver">
            <a href="">
              <p class="usuario5 margin-0 pro">
                <i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar
              </p>
            </a>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 centers margin-volver">
            <a href="">
              <p class="usuario5 margin-0 pro">
                <i class="fa fa-pencil" aria-hidden="true"></i> Editar
              </p>
            </a>
          </div>
        </div>

      <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 linea-config"></div>

      <div class="col-xs-12 col-md-12 nomargin img-twb1 centers">
          <img src="images/proveedores/2.png" class="img-circle" alt="The Wedding Board">
          <div class="col-xs-12 col-md-12 col-lg-12 text-nombre">
            <p class="jl-top">JL Eve<span>nt P</span>lanner</p>
            <p> Decoration</p>
          </div>
        </div>
        <div class="form-group row top-30 centrado">
          <div class="col-md-4 col-md-offset-4 col-xs-8 col-xs-offset-2">
            <div class="star-rating">
              <fieldset>
                <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Outstanding">5 stars</label>
                <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Very Good">4 stars</label>
                <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Good">3 stars</label>
                <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Poor">2 stars</label>
                <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Very Poor">1 star</label>
              </fieldset>
            </div>
          </div>
        </div>
        <div class="form-group row top-30 centrado">
          <div class="col-md-4 col-md-offset-4 col-xs-8 col-xs-offset-2">
            <a href="proveedores-activo.php"><p type="submit" class="btn boton-proveedores03">Regresar a perfil</p></a>
          </div>
        </div>

      <!-- /.col -->
      <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 linea-config"></div>

        <div class="col-sm-11 col-sm-offset-1 col-md-12 col-lg-10 col-lg-offset-1">
          <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-1 col-lg-10 col-lg-offset-1 centrado ">
            <p class="text-detalle2 margin-cal">CALIFICACIONES DE USUARIOS</p>
          </div>
        </div>
        <div class="form-group row top-50">
          <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
              <div class="pull-right pag-center pag botton-pag">
                1-50/200
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                </div>
                <!-- /.btn-group -->
              </div>
              <!-- /.pull-right -->
            <div class="col-xs-12 col-sm-12 col-md-12 border-abajo border-arriba calificaciones-usu">
              <div class="col-md-1">
                <div class="image centers img-10">
                  <img class="img-circle border-azul" src="images/usuarios/calificacion-1.png" alt="The Wedding Board">
                </div>
              </div>
              <div class="col-md-3 nomargin detalle-center">
                <p><strong>Usuario:</strong> Lorena Blancarte</p>
                  <strong>Calificación:</strong>
                  <div class="star-rating enlinea" style="margin-left:10px;">
                    <fieldset>
                      <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Outstanding">5 stars</label>
                      <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Very Good">4 stars</label>
                      <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Good">3 stars</label>
                      <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Poor">2 stars</label>
                      <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Very Poor">1 star</label>
                    </fieldset>
                  </div>
                <p class="nomargin"><strong>Fecha:</strong>  14 Marzo 2017</p>
              </div>
              <div class="col-md-8 nomargin">
                <div class="col-md-2 nomargin coment-right">
                  <p><strong>Comentarios:</strong></p>
                </div>
                <div class="col-md-10 no-coment">
                  <p>
                    Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.
                    Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
                  </p>
                </div>
              </div>
            </div>
            <!-- comentarios -->
            <div class="col-xs-12 col-sm-12 col-md-12 border-abajo border-arriba calificaciones-usu">
              <div class="col-md-1">
                <div class="image centers img-10">
                  <img class="img-circle border-azul" src="images/usuarios/calificacion-1.png" alt="The Wedding Board">
                </div>
              </div>
              <div class="col-md-3 nomargin detalle-center">
                <p><strong>Usuario:</strong> Lorena Blancarte</p>
                  <strong>Calificación:</strong>
                  <div class="star-rating enlinea" style="margin-left:10px;">
                    <fieldset>
                      <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Outstanding">5 stars</label>
                      <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Very Good">4 stars</label>
                      <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Good">3 stars</label>
                      <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Poor">2 stars</label>
                      <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Very Poor">1 star</label>
                    </fieldset>
                  </div>
                <p class="nomargin"><strong>Fecha:</strong>  14 Marzo 2017</p>
              </div>
              <div class="col-md-8 nomargin">
                <div class="col-md-2 nomargin coment-right">
                  <p><strong>Comentarios:</strong></p>
                </div>
                <div class="col-md-10 no-coment">
                  <p>
                    Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.
                    Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
                  </p>
                </div>
              </div>
            </div>
            <!-- comentarios -->
            <div class="col-xs-12 col-sm-12 col-md-12 border-abajo border-arriba calificaciones-usu">
              <div class="col-md-1">
                <div class="image centers img-10">
                  <img class="img-circle border-azul" src="images/usuarios/calificacion-1.png" alt="The Wedding Board">
                </div>
              </div>
              <div class="col-md-3 nomargin detalle-center">
                <p><strong>Usuario:</strong> Lorena Blancarte</p>
                  <strong>Calificación:</strong>
                  <div class="star-rating enlinea" style="margin-left:10px;">
                    <fieldset>
                      <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Outstanding">5 stars</label>
                      <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Very Good">4 stars</label>
                      <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Good">3 stars</label>
                      <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Poor">2 stars</label>
                      <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Very Poor">1 star</label>
                    </fieldset>
                  </div>
                <p class="nomargin"><strong>Fecha:</strong>  14 Marzo 2017</p>
              </div>
              <div class="col-md-8 nomargin">
                <div class="col-md-2 nomargin coment-right">
                  <p><strong>Comentarios:</strong></p>
                </div>
                <div class="col-md-10 no-coment">
                  <p>
                    Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.
                    Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
                  </p>
                </div>
              </div>
            </div>
            <!-- fin comentarios-->
            <div class="mailbox-controls">
              <div class="pull-right pag-center pag margin-pag">
                1-50/200
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                </div>
                <!-- /.btn-group -->
              </div>
              <!-- /.pull-right -->
            </div>
          </div>
        </div>
      </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<div class="control-sidebar-bg"></div>
</div>
<?php
	include("footer-3.php");
?>
