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
          LICITACIONES
        </p>
        <img src="images/recursos/linea-greca.png" alt="The Wedding Board">
      </div>
      <div class="col-md-4 col-md-offset-4" style="">
        <p class="lista">aún no tienes licitaciones creadas</p>
      </div>
      <div class="col-md-12 top-50">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
            <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
            <li data-target="#carousel-example-generic" data-slide-to="3" class=""></li>
            <li data-target="#carousel-example-generic" data-slide-to="4" class=""></li>
            <li data-target="#carousel-example-generic" data-slide-to="5" class=""></li>
          </ol>
          <div class="carousel-inner">
            <div class="item active">
              <img class="margin-center" src="images/recursos/slider-licitacion1.png" alt="The Wedding Board">
            </div>
            <div class="item">
              <img class="margin-center" src="images/recursos/slider-licitacion2.png" alt="The Wedding Board">
            </div>
            <div class="item">
              <img class="margin-center" src="images/recursos/slider-licitacion3.png" alt="The Wedding Board">
            </div>
            <div class="item">
              <img class="margin-center" src="images/recursos/slider-licitacion4.png" alt="The Wedding Board">
            </div>
            <div class="item">
              <img class="margin-center" src="images/recursos/slider-licitacion5.png" alt="The Wedding Board">
            </div>
            <div class="item">
              <img class="margin-center" src="images/recursos/slider-licitacion6.png" alt="The Wedding Board">
            </div>
            <div class="item">
              <img class="margin-center" src="images/recursos/slider-licitacion7.png" alt="The Wedding Board">
            </div>
          </div>
          <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
            <img src="images/recursos/prev.png" alt="The Wedding Board">
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
            <img src="images/recursos/next.png" alt="The Wedding Board">
          </a>
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
<!-- ./wrapper -->
<?php
  get_footer();
?>
