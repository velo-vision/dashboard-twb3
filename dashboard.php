<?php
  include("head-2.php");
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section>
    <div class="container-fluid">
      <div class="col-md-6 col-md-offset-3 col-xs-10 col-xs-offset-1 col-xs-12 titulo-perfil">
        <p>
          usuarios
        </p>
        <img src="images/recursos/linea-greca.png" alt="The Wedding Board">
      </div>
      <div class="col-md-4 col-md-offset-4 col-sm-10 col-sm-offset-1 col-xs-12">
        <div class="col-md-12 col-md-offset-0 col-xs-10 col-xs-offset-1 foto-perfil">
          <img src="images/recursos/foto-perfil.png" alt="">
        </div>
        <div class="col-md-12 col-xs-12  top-50">
          <form>
           <div class="form-group row">
             <div class="col-sm-12">
               <input type="email" class="form-control" id="inputEmail3" placeholder="Nombre de Usuario">
             </div>
           </div>
           <div class="form-group row top-20">
             <div class="col-sm-12">
               <input type="email" class="form-control" id="inputEmail3" placeholder="moni.g@gmail.com">
             </div>
           </div>
           <div class="form-group row top-20">
             <div class="col-sm-12">
               <input type="email" class="form-control" id="inputEmail3" placeholder="Cambiar Contraseña">
             </div>
           </div>
           <div class="form-group row top-50">
             <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
               <!-- <a href="index.html" target="_blank"><button type="submit" class="btn boton-registro hvr-rectangle-out">INGRESA</button></a> -->
               <a href="#!"><p type="submit" class="btn boton-registro">Guardar</p></a>
             </div>
           </div>
         </form>
        </div>
      </div>
      <div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 col-xs-12 titulo-perfil">
        <p>
          mi boda
        </p>
        <img src="images/recursos/linea-greca.png" alt="The Wedding Board">
      </div>
      <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
        <div class="col-md-12 col-sm-12 col-xs-12 nomargin top-20">
          <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-xs-4 col-xs-offset-1">
                <div class="shadow cf2">
                  <div class="" id="cf_onclick">
                    <img class="bottom hvr-pop" src="images/recursos/man-select.png" alt="The Wedding Board">
                    <img class="top hvr-pop" src="images/recursos/man.png" alt="The Wedding Board">
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 col-sm-offset-1 col-xs-4 col-xs-offset-2 women">
                <div class="shadow cf3">
                  <div class="" id="cf_onclick2">
                    <img class="bottom hvr-pop" src="images/recursos/woman-select.png" alt="The Wedding Board">
                    <img class="top hvr-pop" src="images/recursos/woman.png" alt="The Wedding Board">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <form>
                <div class="form-group row">
                  <div class="col-sm-10 col-sm-offset-1 col-sm-12top-20 col-xs-12">
                    <input type="text" class="form-control form-control-sm input-name" id="smFormGroupInput" placeholder="Nombre">
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-xs-4 col-xs-offset-1">
                <div class="shadow cf4">
                  <div class="" id="cf_onclick3">
                    <img class="bottom hvr-pop" src="images/recursos/woman-select.png" alt="The Wedding Board">
                    <img class="top hvr-pop" src="images/recursos/woman.png" alt="The Wedding Board">
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 col-sm-offset-1 col-xs-4 col-xs-offset-2">
                <div class="shadow cf5">
                  <div class="" id="cf_onclick4">
                    <img class="bottom hvr-pop" src="images/recursos/man-select.png" alt="The Wedding Board">
                    <img class="top hvr-pop" src="images/recursos/man.png" alt="The Wedding Board">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <form>
                <div class="form-group row">
                  <div class="col-sm-10 col-sm-offset-1">
                    <input type="text" class="form-control form-control-sm input-name" id="smFormGroupInput" placeholder="Nombre">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-md-offset-4 col-sm-10 col-sm-offset-1 col-xs-12">
        <div class="col-md-12 añade">
          <p>
            añade fecha de tu boda
          </p>
        </div>
      </div>
      <div class="col-md-4 col-md-offset-4 col-sm-10 col-sm-offset-1 col-xs-12">
        <div class="col-md-12 col-xs-12">
          <!-- Calendar -->
          <div class="box box-solid  collapsed-box boton-calendar">
            <div class="box-header">
              <i class="fa fa-calendar"></i>

              <h3 class="box-title">Añadir Fecha</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <!-- button with a dropdown -->
                <div class="btn-group">
                  <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bars"></i></button>
                  <ul class="dropdown-menu pull-right" role="menu">
                    <li><a href="#!">Añadir nuevo evento</a></li>
                    <li><a href="#!">Borrar evento</a></li>
                    <!-- <li><a href="#!">View calendar</a></li> -->
                  </ul>
                </div>
                <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <!--The calendar -->
              <div id="calendar" style="width: 100%"></div>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.box -->
      </div>

      <div class="col-md-4 col-md-offset-4 col-sm-10 col-sm-offset-1 col-xs-12">
        <div class="col-md-12 col-xs-12 añade">
          <p>
            añade el lugar de tu boda
          </p>
        </div>
        <div class="col-md-12 col-xs-12">
          <a href="#!">
            <p class="boton-ceremonia">
              <img src="images/recursos/pin_ceremonia.svg" alt="The Wedding Board"> <span>Ubicación de la ceremonia</span>
            </p>
          </a>
        </div>
        <div class="col-md-12 col-xs-12 top-20">
          <a href="#!">
            <p class="boton-ceremonia">
              <img src="images/recursos/pin-recepcion.png" alt="The Wedding Board"> <span>Ubicación de la recepción</span>
            </p>
          </a>
        </div>
        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 top-50">
          <a href="muro.php">
            <p type="submit" class="btn boton-registro bottom-100">Continuar</p>
          </a>
        </div>
      </div>
    </div>
  </section>

</div>

<div class="control-sidebar-bg"></div>
</div>


<?php
	include("footer-2.php");
?>
