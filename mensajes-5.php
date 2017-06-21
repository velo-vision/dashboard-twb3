<?php
  require("functions.php");
  //get_header();
  get_headerPrincipal();

  get_aside();
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section>
      <div class="container-fluid">
        <div class="col-md-6 col-md-offset-3 titulo-perfil">
          <p>
            mensajes
          </p>
          <img src="images/recursos/linea-greca.png" alt="The Wedding Board">
        </div>

        <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-2 top-20 botton-volver paddingno">
          <div class="col-xs-3 col-sm-3 col-md-4 prev-next nomargin">
            <img src="images/dashboard/anterior.png" alt="The Wedding Board">
            <span>Anterior</span>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-4 centers nomargin">
            <a href="mensajes-1.php">
              <p class="usuario-volver" style="margin: 0 auto;">
                <img src="images/dashboard/volver.png" alt="The Wedding Board"> Volver a Buzón
              </p>
            </a>
          </div>
          <div class="col-xs-3 col-sm-3 col-md-4 prev-next1 nomargin">
            <span>Siguiente</span>
            <img src="images/dashboard/siguiente.png" alt="The Wedding Board">
          </div>
        </div>


        <div class="col-xs-12 col-md-12">
          <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <!-- Main content -->
            <section class="content">
              <div class="row">
                <div class="col-md-11">
                  <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title"> <img src="images/recursos/eye.jpg" alt="The Wedding Board"><span> Leído por: Shophie Dueso</span></h3>
                    </div>                    
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                      <!-- /.mailbox-controls -->
                      <div class="mailbox-read-message">
                        <p>Hello The Wedding</p>

                        <p>
                          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                          Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                          Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                          Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut,
                          imperdiet a, venenatis vitae, justo.
                        </p>

                        <p>
                          Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.
                          Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu,
                          consequat vitae, eleifend ac, enim.
                        </p>

                        <p>
                          Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
                          Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet.
                          Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.
                        </p>

                        <p>
                          Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque
                          sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante
                          tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante.
                        </p>
                      </div>
                      <!-- /.mailbox-read-message -->
                    </div>                    
                  </div>
                  <div class="col-md-12  top-20">                   
                      <div class="mailbox-read-info border-paralelos">
                        <h3 class="box-title"> <span><i class="fa fa-pencil-square-o color-twb" aria-hidden="true"></i> Contestado: Shophie Dueso</span></h3>
                      </div>
                     <div class="mailbox-read-info sin-border">                      
                        <h5><strong>Re:</strong> Bienvenido a Wedding Board Admin</h5>
                        <h5><span class="mailbox-read-time ">13 Mar. 2017 11:03 PM</span></h5>
                      </div>
                      <div class="mailbox-read-message">
                        <p>Hello The Wedding</p>

                        <p>
                          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                          Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                          Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                          Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut,
                          imperdiet a, venenatis vitae, justo.
                        </p>
                      </div>
                    
                  </div>
                  <!-- /. box -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </section>
            <!-- /.content -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <div class="control-sidebar-bg"></div>
</div>
<?php
  get_footer();
?>
