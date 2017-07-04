<?php
  //include("head-3.php");
?>
<?php
  require("functions.php");
  //get_header();
  //get_headerPrincipal();
include("head-3.php");
  get_aside();
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <!-- /.col -->
      <div class="col-md-6 col-md-offset-3 titulo-perfil">
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
              <p class="usuario-volver" style="margin: 0 auto;">
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
            <h3 class="box-title titulo-recibido"><span>RE: </span>Bienvenido a The Wedding Board</h3>           
          </div>
          <!-- /.box-header -->
          <div class="mailbox-read-info">                      
              
            </div>
            <div class="mailbox-read-message no-padding">
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
          <div class="box-body no-padding">
          <div class="form-group">
                  <textarea id="compose-textarea" class="form-control altura-text-area">
                    <!-- <h1><u>Heading Of Message</u></h1>
                    <h4>Subheading</h4> -->
                    <p class="justificado">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain                      
                      pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise,
                      except to obtain some advantage from it? But who has any right to find fault with a man who
                      chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that
                      produces no resultant pleasure? On the other hand, we denounce with righteous indignation and
                      dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so
                      blinded by desire, that they cannot foresee</p>
                    <!-- <ul>
                      <li>List item one</li>
                      <li>List item two</li>
                      <li>List item three</li>
                      <li>List item four</li>
                    </ul>
                    <p>Thank you,</p>
                    <p>John Doe</p> -->
                  </textarea>
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <div class="pull-right">
              <!-- <button type="button" class="btn btn-default"><i class="fa fa-pencil"></i> Draft</button> -->
              <a href="mensajes-5.php"><button type="submit" class="btn btn-primary btn-enviar3">Enviar</button></a>
            </div>
            <button type="reset" class="btn btn-default"><i class="fa fa-times"></i> Descartar</button>
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
<!-- /.content-wrapper -->
<div class="control-sidebar-bg"></div>
</div>
<?php
  include("footer-3.php");
?>