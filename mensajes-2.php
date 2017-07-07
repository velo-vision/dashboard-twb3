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
      <div class="col-xs-12 col-md-6 col-md-offset-3 titulo-perfil">
        <p>
          mensajes
        </p>
        <img src="images/recursos/linea-greca.png" alt="The Wedding Board">
      </div>
        <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 top-20 botton-volver paddingno">
          <div class="col-xs-3 col-sm-3 col-md-4 prev-next nomargin">
            <img src="images/dashboard/anterior.png" alt="The Wedding Board">
            <span class="atras">Anterior</span>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-4 centers nomargin">
            <a href="mensajes-1.php">
              <p class="usuario-volver btn-default3" style="margin: 0 auto;">
                <img src="images/dashboard/volver.png" alt="The Wedding Board"> Volver a Buzón
              </p>
            </a>
          </div>
          <div class="col-xs-3 col-sm-3 col-md-4 prev-next1 nomargin">
            <span class="siguiente">Siguiente</span>
            <img src="images/dashboard/siguiente.png" alt="The Wedding Board">
          </div>
        </div>

      <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 top-20">
        <div class="box box-primary">
          <!-- /.box-header -->
           <div class="box-header with-border">
              <h3 class="box-title"> <img src="images/recursos/eye.jpg" alt="The Wedding Board"><span class="mensaje2-span"> Leído por: </span><span class="mensaje2-span2">Shophie Dueso</span></h3>
            </div>
            <div class="box-header with-border">
            
            <h3 class="box-title"><span class="mensaje3span">Bienvenido a The Wedding Board</span></h3>
            <div class="box-tools pull-right">
              <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Previous"><i class="fa fa-chevron-left"></i></a>
              <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Next"><i class="fa fa-chevron-right"></i></a>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
         <!--  Aqui -->
          <div class="mailbox-read-info">                      
              <h5><p class="de"><span>De: </span>Wedding Board Admin</p></h5>
              <h5><span class="mailbox-read-time ">13 Mar. 2017 11:03 PM</span></h5>
            </div>
            <!-- /.mailbox-read-info -->
            <div class="mailbox-controls with-border">
              <div class="btn-group">
                <button type="button" class="btn btn-default btn-sm margin-mensajes btnmensaje1" data-toggle="tooltip" data-container="body" title="Delete">
                  <i class="fa fa-trash-o"></i> Borrar
                </button>
                <button type="button" class="btn btn-default btn-sm margin-mensajes btnmensaje2" data-toggle="tooltip" data-container="body" title="Reply">
                  <i class="fa fa-tag" aria-hidden="true"></i> Añadir Categoria
                  </button>
                <a href="mensajes-3.php">
                  <button type="button" class="btn btn-default icon-menssage margin-mensajes btnmensaje3"><i class="fa fa-share"></i>Responder
                  </button>
                </a>
              </div>
              <!-- /.btn-group -->
              <!-- <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" title="Print">
                <i class="fa fa-print"></i></button> -->
            </div>
            <!-- /.mailbox-controls -->
            <div class="mailbox-read-message contendido-de">
              <p>Hello The Wedding</p>

              <p class="justificado">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut,
                imperdiet a, venenatis vitae, justo.
              </p>

              <p class="justificado">
                Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.
                Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu,
                consequat vitae, eleifend ac, enim.
              </p>

              <p class="justificado">
                Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
                Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet.
                Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.
              </p>

              <p class="justificado">
                Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque
                sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante
                tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante.
              </p>
            </div>
            <!-- /.mailbox-read-message -->

         <!--  -->
          </div>
          <!-- /.box-body -->
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
























<?php
  get_footer();
?>
