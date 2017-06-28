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
      <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 titulo-usuario1">
        <p>
          Proveedores
        </p>
        <img src="images/recursos/linea-greca.png" alt="The Wedding Board" width="100%">
      </div>
      <div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3 col-xs-12 top-20 botton-volver">
        <div class="col-xs-3 col-sm-3 col-md-3 prev-next nomargin">
          <!-- <img src="images/dashboard/anterior.png" alt="The Wedding Board">
          <span>Anterior</span> -->
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 centers nomargin">
          <a href="proveedores-activo.php">
            <p class="usuario-prov" style="margin: 0 auto;">
              <img src="images/dashboard/volver.png" alt="The Wedding Board"> Volver a proveedor
            </p>
          </a>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 prev-next1 nomargin">
          <!-- <span>Siguiente</span>
          <img src="images/dashboard/siguiente.png" alt="The Wedding Board"> -->
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-9 col-sm-offset-1 col-md-9 col-md-offset-1 col-lg-8 col-lg-offset-2 centro input-form pad-0">
        <form action="#">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 prove-20">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 padin-cero boton-buscar">
              <p class="nombre-prov">Nombre Proveedor:</p>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-7 pad-form">
              <input type="search" name="" class="form-control input-sm" placeholder="JL Event Planer">
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 prove-20">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 padin-cero boton-buscar">
              <p class="nombre-prov">Telefono:</p>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-7 pad-form">
              <input type="search" name="" class="form-control input-sm" placeholder="55 20 86 54 74">
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 prove-20">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 padin-cero boton-buscar">
              <p class="nombre-prov">Categoria:</p>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-7 centro separacion-template-selects1">
              <select class="select-template2">
                <option value="#">Decoracíon y Ambientaíon</option>
                <option value="#">#</option>
                <option value="#">#</option>
                <option value="#">#</option>
              </select>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 prove-20">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 padin-cero boton-buscar">
              <p class="nombre-prov">Sub Categoria:</p>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-7 centro separacion-template-selects1">
              <select class="select-template2">
                <option value="#">Mobiliario</option>
                <option value="#">#</option>
                <option value="#">#</option>
                <option value="#">#</option>
              </select>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 prove-20">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 padin-cero boton-buscar">
              <p class="nombre-prov">Categoria 2:</p>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-7 centro separacion-template-selects1">
              <select class="select-template2">
                <option value="#"></option>
                <option value="#">#</option>
                <option value="#">#</option>
                <option value="#">#</option>
              </select>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 prove-20">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 padin-cero boton-buscar">
              <p class="nombre-prov">Sub Categoria 2:</p>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-7 centro separacion-template-selects1">
              <select class="select-template2">
                <option value="#"></option>
                <option value="#">#</option>
                <option value="#">#</option>
                <option value="#">#</option>
              </select>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 prove-20">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 padin-cero boton-buscar">
              <p class="nombre-prov">Membresia:</p>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-7 centro separacion-template-selects1">
                <select class="select-template2">
                  <option value="#"></option>
                  <option value="#">#</option>
                  <option value="#">#</option>
                  <option value="#">#</option>
                </select>
              </div>
            </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 prove-20">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 padin-cero boton-buscar">
              <p class="nombre-prov">Vegencia:</p>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-7 centro separacion-template-selects1" style="text-align:left;">
              <input type="radio" id="1" name="face"> 6 Meses <br>
              <input type="radio" id="1" name="face"> 12 Meses
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 prove-20">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 padin-cero boton-buscar">
              <p class="nombre-prov">Contraseña:</p>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-7 pad-form">
              <input type="search" name="" class="form-control input-sm">
            </div>
          </div>
        </form>
        <div class="col-xs-12 col-sm-10 col-sm-offset-2 col-md-10 col-md-offset-2 col-lg-6 col-lg-offset-3 prove-40 pad-0">
          <div class="col-md-6 col-sm-6 col-xs-6 guardar-right nomargin">
            <a data-toggle="modal" data-target="#proveedores-aceptar" data-whatever="@mdo">
              <p class="btn-actualizar" style="margin:0 auto;">
                 Actualizar
              </p>
            </a>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-6 nomargin">
            <a data-toggle="modal" data-target="#proveedores-rechazar" data-whatever="@mdo">
              <p class="btn-descartar" style="margin:0 auto;">
                 Descartar
              </p>
            </a>
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
