<?php
  require("functions.php");
  //get_header();
  get_headerPrincipal();

  get_aside();
?>
<?php
  //include("head-3.php");
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <!-- /.col -->
      <div class="col-md-6 col-md-offset-3 titulo-perfil">
        <p>Template</p>
        <img src="images/recursos/linea-greca.png" alt="The Wedding Board">        
      </div>
      <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 top-20 botton-volver paddingno">
        <div class="col-xs-3 col-sm-3 col-md-4 prev-next nomargin">
          <img src="images/dashboard/anterior.png" alt="The Wedding Board">
          <span>Anterior</span>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-4 centers nomargin">
          <a href="">
            <p class="usuario-volver" style="margin: 0 auto;">
              <img src="images/dashboard/volver.png" alt="The Wedding Board"> Volver a Licitaciones
            </p>
          </a>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-4 prev-next1 nomargin">
          <span>Siguiente</span>
          <img src="images/dashboard/siguiente.png" alt="The Wedding Board">
        </div>
      </div>
      <div class="col-md-8 col-md-offset-2 top-20">

        <div class="box box-primary">
          
          <!-- /.box-header -->
          <div class="box-body">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <p>EDITAR DETALLES</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
              
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <form>
                 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <p>Nombre de TEmplete</p>
                    <input type="text" name="" placeholder="Lorem ipsum">
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <p>Categoría</p>
                    <select>
                      <option>Clasica</option>
                    </select>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <p>Precio</p>
                    <input type="text" name="" placeholder="$ 0.00">
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 top-20 botton-volver paddingno">
            <div class="col-xs-3 col-sm-3 col-md-4 prev-next nomargin">
              <img src="images/dashboard/anterior.png" alt="The Wedding Board">
              <span>Anterior</span>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4 centers nomargin">
              <a href="">
                <p class="usuario-volver" style="margin: 0 auto;">
                  <img src="images/dashboard/volver.png" alt="The Wedding Board"> Volver a Licitaciones
                </p>
              </a>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-4 prev-next1 nomargin">
              <span>Siguiente</span>
              <img src="images/dashboard/siguiente.png" alt="The Wedding Board">
            </div>
          </div>
          </div>
          

          <!-- /.box-footer -->
        </div>
        <!-- /. box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<div class="control-sidebar-bg"></div>
</div>
<?php
  // include("footer-3.php");
?>

<?php
  get_footer();
?>