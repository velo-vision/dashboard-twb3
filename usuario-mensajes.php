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
          Usuarios
        </p>
        <img src="images/recursos/linea-greca.png" alt="The Wedding Board" width="100%">
      </div>
      <div class="col-md-6 col-md-offset-3 col-xs-12 top-20">
        <div class="col-md-2 col-xs-2">
          <!-- <img src="images/dashboard/anterior.png" alt="The Wedding Board"> -->
        </div>
        <div class="col-md-8 col-xs-8 centers">
          <a href="usuario-detalle.php">
            <p class="usuario-btn" style="margin: 0 auto;">
              <img src="images/dashboard/volver.png" alt="The Wedding Board"> Volver a perfil usuario
            </p>
          </a>
        </div>
        <div class="col-md-2 col-xs-2" style="text-align:right;">
          <!-- <img src="images/dashboard/siguiente.png" alt="The Wedding Board"> -->
        </div>
      </div>
      <div class="col-xs-12 col-md-8 col-md-offset-2 top-20">
        <div class="box box-primary">
          <!-- /.box-header -->
          <div class="box-body top-place-20">
            <div class="form-group nomargin">
              <input class="form-control1 form-name" placeholder="Para:">
            </div>
            <div class="form-group form-asunto">
              <input class="form-control1" placeholder="Asunto:">
            </div>
            <div class="form-group">
                  <textarea id="compose-textarea" class="form-control height-180 color-area">
                    <p>Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.<br><br>

                      Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.
                    </p>
                  </textarea>
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <div class="pull-right">
              <!-- <button type="button" class="btn btn-default"><i class="fa fa-pencil"></i> Draft</button> -->
              <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o" style="margin-right:5px;"></i>Enviar</button>
            </div>
            <button type="reset" class="btn btn-default"><i class="fa fa-times"></i> Descarte</button>
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
	include("footer-3.php");
?>
