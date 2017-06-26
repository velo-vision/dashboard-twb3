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
    <section>
      <div class="container-fluid">
        <div class="col-md-6 col-md-offset-3 col-xs-12 titulo-perfil">
          <p>
            USUARIOS
          </p>
          <img src="images/recursos/linea-greca.png" alt="The Wedding Board">
        </div>
        <div class="col-md-8 col-md-offset-2 col-xs-12">
          <div class="col-xs-12 col-md-12 nomargin img-twb centers border-usuario">
            <img src="images/usuarios/twb.png" alt="The Wedding Board">
            <div class="col-xs-12 col-md-12 col-lg-12 text-admin">
              <p>Sophie Dueso</p>
              <span>Administrador</span>
            </div>
          </div>
          <div class="col-md-10 col-md-offset-1 col-xs-12 centers linea-text">
            <p class="text-crear">CREAR NUEVA CUENTA</p>
            <form>
              <div class="form-group col-sm-8 col-sm-offset-2">
                <div class="col-sm-4 usuario-text right-center">
                  <p>
                   <strong>Nombre:</strong>
                  </p>
                </div>
                <div class="col-sm-5 col-offset-sm-3 nomargin nomargin">
                  <input type="text" class="form-control" id="exampleInputName1" placeholder="">
                </div>
              </div>
             <div class="form-group col-sm-8 col-sm-offset-2">
               <div class="col-sm-4 usuario-text right-center">
                 <p>
                  <strong>Mail:</strong>
                 </p>
               </div>
               <div class="col-sm-5 col-offset-sm-3 nomargin nomargin">
                 <input type="text" class="form-control" id="exampleInputName2" placeholder="">
               </div>
             </div>
             <div class="form-group col-sm-8 col-sm-offset-2">
               <div class="col-sm-4 usuario-text right-center">
                 <p>
                  <strong>Telefono:</strong>
                 </p>
               </div>
               <div class="col-sm-5 col-offset-sm-3 nomargin nomargin">
                 <input type="text" class="form-control" id="exampleInputName2" placeholder="">
               </div>
             </div>
             <div class="form-group col-xs-8 col-xs-offset-2 col-sm-9 col-sm-offset-2">
               <div class="col-xs-5 col-sm-5 col-offset-sm-3 usuario-text nomargin float-right">
                 <p>
                  <strong>Permisos: </strong>
                 </p>
               </div>
               <div class="col-xs-6 col-sm-5 col-offset-sm-3 nomargin">
                 <select class="form-control2" style="width:124px; border:none; padding:0;">
                   <option value="perfilito1">Administrador</option>
                   <option value="perfilito4">Colaborador</option>
                 </select>
               </div>
             </div>
             <div class="form-group row">
               <div class="col-md-4 col-md-offset-4 col-xs-6 col-xs-offset-3">
                 <!-- <a href="index.html" target="_blank"><button type="submit" class="btn boton-registro hvr-rectangle-out">INGRESA</button></a> -->
                 <a href="#!"><p type="submit" class="btn boton-usuario">Crear</p></a>
               </div>
             </div>
           </form>
          </div>
          <div class="col-xs-12 col-md-12 nomargin border-usuario">
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