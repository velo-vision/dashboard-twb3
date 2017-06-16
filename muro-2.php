<?php
  require("functions.php");
  get_header();
?>
<link rel="stylesheet" href="css/hover-muro.css">

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section>
    <div class="container-fluid nomargin">
      <div class="col-md-12 col-xs-12 nomargin">
        <figure class="snip1532">
          <img src="images/dashboard/muro-2.jpg" alt="sq-sample40" />
          <figcaption>
            <h3>M & A</h3>
          </figcaption>
          <p>
            <i class="fa fa-file-image-o" aria-hidden="true"></i> <span>Cambiar imagen</span>
          </p>
          <a href="#"></a>
        </figure>
      </div>
      <div class="col-md-10 col-md-offset-1 col-xs-12">
        <div class="col-md-12 col-xs-12 nomargin content-muro">
          <div class="col-md-6 col-xs-6 nomargin foto-perfil wow zoomIn" data-wow-duration="1.2s" data-wow-delay="">
            <img src="images/dashboard/moni.png" alt="">
            <p>M<span>óni</span>ca</p>
          </div>
          <div class="col-md-6 col-xs-6 nomargin foto-perfil wow zoomIn" data-wow-duration="1.2s" data-wow-delay="">
            <img src="images/dashboard/adan.png" alt="">
            <p>A<span>dá</span>n</p>
          </div>
        </div>
        <div class="col-md-10 col-md-offset-1 col-xs-12 titulo-perfil">
          <p>
            fecha
          </p>
          <img src="images/recursos/linea-greca.png" alt="The Wedding Board">
        </div>
        <div class="col-md-10 col-md-offset-1 fecha">
          <p>
            28 de oc<span>tubr</span>e 2017
          </p>
        </div>
        <div class="col-md-12 col-xs-12 top-50">
          <!-- solid sales graph -->
          <div class="box box-solid bg-teal-gradient">
            <!-- /.box-body -->
            <div class="box-footer no-border">
              <div class="row">
                <div class="col-md-3 col-xs-6 text-center" style="border-right: 1px solid #f4f4f4">
                  <input type="text" class="knob" data-readonly="true" value="100" data-width="100" data-height="100" data-fgColor="#67d0e3">
                  <div class="knob-label">
                    <p>días</p>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-md-3 col-xs-6 text-center" style="border-right: 1px solid #f4f4f4">
                  <input type="text" class="knob" data-readonly="true" value="17" data-width="100" data-height="100" data-fgColor="#67d0e3">
                  <div class="knob-label">
                    <p>horas</p>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-md-3 col-xs-6 text-center">
                  <input type="text" class="knob" data-readonly="true" value="26" data-width="100" data-height="100" data-fgColor="#67d0e3">
                  <div class="knob-label">
                    <p>minutos</p>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-md-3 col-xs-6 text-center">
                  <input type="text" class="knob" data-readonly="true" value="2" data-width="100" data-height="100" data-fgColor="#67d0e3">
                  <div class="knob-label">
                    <p>
                      segundos
                    </p>
                  </div>
                </div>
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <div class="col-md-6 col-md-offset-3 col-xs-12">
          <div class="form-group row top-20">
            <div class="col-md-10 col-md-offset-1 col-xs-12">
               <a href="https://www.facebook.com/">
                 <button type="submit" class="btn boton-facebook content-face"><i class="fa fa-facebook-square" aria-hidden="true"></i> Compartir en <strong>Facebook</strong></button>
               </a>
            </div>
          </div>
        </div>
        <div class="col-md-10 col-md-offset-1 col-xs-12 titulo-perfil">
          <p>
            lugar
          </p>
          <img src="images/recursos/linea-greca.png" alt="The Wedding Board">
        </div>
      </div>
      <div class="col-md-12 col-xs-12 nomargin">
        <div>
          <div class="col-md-8 col-md-offset-2 col-xs-12">
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Ceremonia</a></li>
                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Recepción</a></li>
                <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Tornafiesta</a></li>
            </ul>
          </div>
          <!-- Tab panes -->
          <div class="col-md-12 col-xs-12 tab-content content-maps">
              <div role="tabpanel" class="tab-pane active" id="home">
                <div class="mapa" id="mack-map"></div>
              </div>
              <div role="tabpanel" class="tab-pane active" id="profile">
                <div class="mapa" id="mack-map2"></div>
              </div>
              <div role="tabpanel" class="tab-pane active" id="messages">
                <div class="mapa" id="mack-map3"></div>
              </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-md-offset-3 col-xs-12 titulo-perfil">
        <p>
          mis proveedores
        </p>
        <img src="images/recursos/linea-greca.png" alt="The Wedding Board">
      </div>
      <div class="col-md-12 col-sm-12 col-xs-12 top-50 bottom-100">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <figure class="snip1084">
              <img src="images/recursos/galery.jpg" alt="The Weeding Board" />
              <figcaption>
                <p class="boton-favoritos"><img src="images/recursos/favorites.png" alt="">Añadir a favoritos</p>
                <p class="boton-favoritos"><img src="images/recursos/boton-perfil.png" alt="">Perfil de proveedor</p>
              </figcaption>
              <a href="#"></a>
            </figure>
          </div>
          <div class="col-md-12 col-sm-12 col-xs-12 texto-galery top-10">
            <p>
              <strong>Bloomz f<span>in</span>e flowers</strong>
            </p>
            <p>
              Florists & Event Stylists
            </p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <figure class="snip1084">
                <img src="images/recursos/galery2.jpg" alt="The Weeding Board" />
              <figcaption>
                <p class="boton-favoritos"><img src="images/recursos/favorites.png" alt="">Añadir a favoritos</p>
                <p class="boton-favoritos"><img src="images/recursos/boton-perfil.png" alt="">Perfil de proveedor</p>
              </figcaption>
              <a href="#"></a>
            </figure>
          </div>
          <div class="col-md-12 col-sm-12 col-xs-12 texto-galery top-10">
            <p>
              <strong>Garnis<span>h a</span>nd frill</strong>
            </p>
            <p>
              Garnis And Frill
            </p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <figure class="snip1084">
                <img src="images/recursos/galery3.jpg" alt="The Weeding Board" />
              <figcaption>
                <p class="boton-favoritos"><img src="images/recursos/favorites.png" alt="">Añadir a favoritos</p>
                <p class="boton-favoritos"><img src="images/recursos/boton-perfil.png" alt="">Perfil de proveedor</p>
              </figcaption>
              <a href="#"></a>
            </figure>
          </div>
          <div class="col-md-12 col-sm-12 col-xs-12 texto-galery top-10">
            <p>
              <strong>iamf<span>lo</span>wer</strong>
            </p>
            <p>
              Florists & Event Stylists
            </p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <figure class="snip1084">
                <img src="images/recursos/galery4.jpg" alt="The Weeding Board" />
              <figcaption>
                <p class="boton-favoritos"><img src="images/recursos/favorites.png" alt="">Añadir a favoritos</p>
                <p class="boton-favoritos"><img src="images/recursos/boton-perfil.png" alt="">Perfil de proveedor</p>
              </figcaption>
              <a href="#"></a>
            </figure>
          </div>
          <div class="col-md-12 col-sm-12 col-xs-12 texto-galery top-10">
            <p>
              <strong>Art of <span>cu</span>linary</strong>
            </p>
            <p>
              Food & Drink
            </p>
          </div>
        </div>
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

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNTSMEOij97Zpc3vSSkP1pXOIWg8tH-gA&sensor=false"></script>
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="dist/js/maps.js"></script>
<script src="dist/js/maps2.js"></script>
<script src="dist/js/maps3.js"></script>

<script type="text/javascript">
/* Demo purposes only */
$(".hover").mouseleave(function() {
$(this).removeClass("hover");
});
</script>

<?php
  get_footer();
?>
