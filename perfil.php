<?php
  require("functions.php");
  get_header();
?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section>
      <div class="container-fluid">
        <div class="col-md-6 col-md-offset-3 col-xs-12 titulo-perfil">
          <p>
            perfil
          </p>
          <img src="images/recursos/linea-greca.png" alt="The Wedding Board">
        </div>
        <div class="col-md-6 col-md-offset-3 col-xs-12">
          <div class="col-md-12 nomargin foto-perfil">
            <img class="wow zoomIn" data-wow-duration="1.2s" data-wow-delay="" src="images/recursos/moni.png" alt="">
          </div>
          <div class="col-md-10 col-md-offset-1 col-xs-12 top-50">
            <form>
             <div class="form-group row">
               <div class="col-sm-12 nombre-usuario">
                 <p>
                  <strong>Usuario:</strong> Monica Galindo
                 </p>
               </div>
             </div>
             <div class="form-group row top-20">
               <div class="col-sm-12 col-xs-12 nombre-usuario">
                 <p>
                   <strong>E-mail:</strong> moni.g@gmail.com
                 </p>
               </div>
             </div>
             <div class="form-group row top-20">
               <div class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                 <input type="email" class="form-control" id="inputEmail3" placeholder="Cambiar Contraseña">
               </div>
             </div>
             <div class="form-group row top-50">
               <div class="col-md-6 col-md-offset-3 col-xs-8 col-xs-offset-2">
                 <!-- <a href="index.html" target="_blank"><button type="submit" class="btn boton-registro hvr-rectangle-out">INGRESA</button></a> -->
                 <a href="#!"><p type="submit" class="btn boton-registro">Guardar</p></a>
               </div>
             </div>
           </form>
          </div>
        </div>
        <div class="col-md-6 col-md-offset-3 col-xs-12 titulo-perfil">
          <p>
            mi boda
          </p>
          <img src="images/recursos/linea-greca.png" alt="The Wedding Board">
        </div>
        <div class="col-md-12 col-xs-12 top-50">
          <div class="col-md-12 col-md-offset-0 col-xs-12 informacion-boda">
            <div class="col-md-2 col-xs-12 borde-derecho">
              <p class="nomargin res-10">
                Mónica y Adán
              </p>
            </div>
            <div class="col-md-2 col-xs-12 borde-derecho">
              <p class="nomargin res-10">
                28 de Octubre 2017
              </p>
            </div>
            <div class="col-md-4 col-xs-12 borde-derecho">
              <p class="nomargin res-10">
                0 Proveedores Seleccionados
              </p>
            </div>
            <div class="col-md-4 col-xs-12 res-10">
              <p class="nomargin">
                <a href="muro-2.php"><span class="boton-detalle"><i class="fa fa-chevron-circle-down" aria-hidden="true"></i> detalles</span></a>
                <a href="muro.php"><span class="boton-editar"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar Perfil</span></a>
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

<?php
  get_footer();
?>
