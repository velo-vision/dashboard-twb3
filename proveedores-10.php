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
          <!-- <img src="images/dashboard/anterior.png" alt="The Wedding Board">
          <span>Anterior</span> -->
        </div>
        <div class="col-xs-6 col-sm-6 col-md-4 centers nomargin">
          <a href="usuarios.php">
            <p class="usuario-volver" style="margin: 0 auto;">
              <img src="images/dashboard/volver.png" alt="The Wedding Board"> Volver a Listado
            </p>
          </a>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-4 prev-next1 nomargin">
          <!-- <span>Siguiente</span>
          <img src="images/dashboard/siguiente.png" alt="The Wedding Board"> -->
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4 centro">
        <form action="#">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 prove-20">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 padin-cero boton-buscar">
              <p>Nombre Proveedor:</p>
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 padin-cero">
              <input type="search" name="" class="form-control input-sm">
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 prove-20">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 padin-cero boton-buscar">
              <p>Telefono:</p>
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 padin-cero">
              <input type="search" name="" class="form-control input-sm">
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 prove-20">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 padin-cero boton-buscar">
              <p>Categoria:</p>
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 centro separacion-template-selects nomargin">
              <select class="select-template1">
                <option value="#">Categoria</option>
                <option value="#">#</option>
                <option value="#">#</option>
                <option value="#">#</option>
              </select>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 prove-20">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 padin-cero boton-buscar">
              <p>Sub Categoria:</p>
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 centro separacion-template-selects nomargin">
              <select class="select-template1">
                <option value="#">Categoria</option>
                <option value="#">#</option>
                <option value="#">#</option>
                <option value="#">#</option>
              </select>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 prove-20">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 padin-cero boton-buscar">
              <p>Categoria 2:</p>
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 centro separacion-template-selects nomargin">
              <select class="select-template1">
                <option value="#">Categoria</option>
                <option value="#">#</option>
                <option value="#">#</option>
                <option value="#">#</option>
              </select>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 prove-20">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 padin-cero boton-buscar">
              <p>Sub Categoria 2:</p>
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 centro separacion-template-selects nomargin">
              <select class="select-template1">
                <option value="#">Categoria</option>
                <option value="#">#</option>
                <option value="#">#</option>
                <option value="#">#</option>
              </select>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 prove-20">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 padin-cero boton-buscar">
              <p>Membresia:</p>
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 centro separacion-template-selects nomargin">
                <select class="select-template1">
                  <option value="#">Categoria</option>
                  <option value="#">#</option>
                  <option value="#">#</option>
                  <option value="#">#</option>
                </select>
              </div>
            </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 prove-20">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 padin-cero boton-buscar">
              <p>Vegencia:</p>
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 centro separacion-template-selects">
              <input type="radio" id="1" name="face"> 6 Meses <br>
              <input type="radio" id="1" name="face"> 12 Meses
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 prove-20">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 padin-cero boton-buscar">
              <p>Contraseña:</p>
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 padin-cero">
              <input type="search" name="" class="form-control input-sm">
            </div>
          </div>
        </form>
        <div class="col-xs-12 col-sm-12 col-md-12 prove-40">
          <div class="col-md-6 col-md-offset-1 col-sm-6 col-xs-6 guardar-right nomargin">
            <a data-toggle="modal" data-target="#proveedores-aceptar" data-whatever="@mdo"><p class="btn-detalle">
               Aceptar
            </p></a>
          </div>
          <div class="col-md-6 md-offset-1 col-sm-6 col-xs-6 nomargin">
            <a data-toggle="modal" data-target="#proveedores-rechazar" data-whatever="@mdo"><p class="btn-eliminar">
               Rechazar
            </p></a>
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
