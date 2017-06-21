<?php
  require("functions.php");
  //get_header();
  get_headerPrincipal();

  get_aside();
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section>
    <div class="container-fluid no-padding">
      <div class="col-md-12 col-xs-12 no-padding">
        <div class="content-wrapper">
          <div class="col-md-11 col-xs-12 titulo-perfil">
            <p id="subir">
              Licitaciones
            </p>
            <img src="images/recursos/linea-greca.png" alt="The Wedding Board">
          </div>
          <!-- Content Header (Page header) -->
          <!-- Main content -->
          <section class="content">
            <div class="col-xs-12 col-sm-12 col-md-11 top-20 botton-volver paddingno">
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
            <div class="row">
              <div class="col-md-11 col-xs-12">
                <div class="box box1 box-primary top-20">
                  <div class="col-xs-12 col-md-12 no-padding">
                    <div class="col-md-6 no-padding">
                      <p class="asunto-licitacion"><strong>Licitación:</strong> Lorem ipsum </p>
                    </div>
                    <div class="col-md-6 redecha-lici">
                       <p class="asunto-licitacion" style="margin-top:5px;"><strong>Usuario:</strong> Mónica Galindo</p>
                    </div>                  
                  </div>
                   <div class="col-xs-12 col-md-12 no-padding">
                     <div class="col-xs-12 col-md-3 no-padding">
                       <p class="nomargin asunto-licitacion1"><strong>Presupuesto:</strong>$50,000</p>
                       <p class="nomargin asunto-licitacion1"><strong>Categoría:</strong> Lorem ipsum </p>
                     </div>
                     <div class="col-xs-12 col-md-6 no-padding">
                        <p class="nomargin asunto-licitacion1 "><strong>Lugar:</strong> Lorem ipsum dolor sit amet</p>
                        <p class="nomargin asunto-licitacion1 "><strong>Fecha del evento:</strong> 28 Octubre 2017</p>
                     </div>
                   </div>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding separacion-lici">
                    <div class="col-xs-12 col-md-11 mailbox-read-message no-padding">
                      <strong><span>Descripción:</span></strong>
                    </div>                   
                    <div class="col-xs-12 col-sm-12 col-md-11 mailbox-read-message no-padding">
                      <p>
                        Lorem ipsum dolor sit amet, omnesque tacimates hendrerit an sit. Ne has integre vivendum. Eos iisque tractatos id. Per prompta moderatius philosophia ea.<br><br>                      
                        Eu duis posse referrentur vis. Duo id erant adipisci inimicus, ei falli patrioque complectitur ius, ex mandamus senserit per. Vide nostro veritus ut ius, est at scaevola
                        invenire suscipiantur. Cu per velit novum sententiae. Ius quodsi definitiones id.
                      </p>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="box-footer" style="border-top:none;">
                      <ul class="mailbox-attachments clearfix">
                        <!-- <li>
                          <span class="mailbox-attachment-icon"><i class="fa fa-file-pdf-o"></i></span>
                          <div class="mailbox-attachment-info">
                            <a href="#" class="mailbox-attachment-name">
                              <i class="fa fa-paperclip"></i> Sep2014-report.pdf
                            </a>
                            <span class="mailbox-attachment-size">
                              1,245 KB
                              <a href="images/twb.pdf" target="_blank" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                            </span>
                          </div>
                        </li> -->
                        <!-- <li>
                          <span class="mailbox-attachment-icon"><i class="fa fa-file-word-o"></i></span>
                          <div class="mailbox-attachment-info">
                            <a href="#" class="mailbox-attachment-name"><i class="fa fa-paperclip">
                              </i> App Description.docx
                            </a>
                            <span class="mailbox-attachment-size">
                              1,245 KB
                              <a href="images/twb.pdf" target="_blank" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                            </span>
                          </div>
                        </li> -->
                        <li>
                          <span class="mailbox-attachment-icon has-img">
                            <img src="images/recursos/galery5.jpg" alt="The Wedding Board">
                          </span>
                          <div class="mailbox-attachment-info">
                            <a href="#" class="mailbox-attachment-name">
                              <i class="fa fa-camera"></i> photo1.png
                            </a>
                            <span class="mailbox-attachment-size">
                              2.67 MB
                              <a href="images/recursos/galery5.jpg" target="_blank" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                            </span>
                          </div>
                        </li>
                        <li>
                          <span class="mailbox-attachment-icon has-img">
                            <img src="images/recursos/galery12.jpg" alt="The Wedding Board">
                          </span>
                          <div class="mailbox-attachment-info">
                            <a href="#" class="mailbox-attachment-name"><i class="fa fa-camera"></i> photo2.png</a>
                            <span class="mailbox-attachment-size">
                              1.9 MB
                              <a href="images/recursos/galery12.jpg" target="_blank" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                            </span>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>

                 
                    
                  
                  <!-- Respuestas -->
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 lineas-respuesta">
                    <div class="col-xs-12 col-sm-6 col-md-16 col-lg-6 padin-cero">
                      <p class="asunto-licitacion"><strong>Respuestas:</strong> 3</p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-16 col-lg-6 aumento3">                                           
                      <a href="comparar-licitaciones.php"><span class="boton-comprar"><img src="images/recursos/comprar.png" alt="The Wedding Board"> comparar</span></a>                     
                    </div>
                  </div>

                  <?php  for ($i=0; $i < 4; $i++) { ?>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 aumento2">
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 padin-cero">
                      <p class="asunto-licitacion asunto-center"><strong>Proveedor:</strong> Lorem ipsum </p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <a href="#!"><span class="col-xs-12 boton-comprar comprar1 btn-provedor"><img src="images/recursos/proveedor.png" alt="The Wedding Board"> Perfil proveedor</span></a>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class=" col-xs-12 col-sm-12 col-md-4 col-lg-4 padin-cero">
                      <p class="nomargin asunto-licitacion1"><strong>Costos:</strong>$45,000</p>
                    </div>
                     <div class=" col-xs-12 col-sm-12 col-md-4 col-lg-4">
                      <p class="nomargin asunto-licitacion1"><strong>Vigencia:</strong> 19 de mayo 2017</p>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <p class="nomargin asunto-licitacion1"><strong>Descripción:</strong></p>
                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mailbox-read-message padin-cero">
                        <p>Lorem ipsum dolor sit amet, omnesque tacimates hendrerit an sit. Ne has integre vivendum. Eos iisque tractatos id. Per prompta moderatius philosophia ea.<br><br>
                           Eu duis posse referrentur vis. Duo id erant adipisci inimicus, ei falli patrioque complectitur ius, ex mandamus senserit per. Vide nostro veritus ut ius, est at scaevola
                            invenire suscipiantur. Cu per velit novum sententiae. Ius quodsi definitiones id.
                        </p>
                     </div>
                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <div class="box-footer" style="border-top:none;">
                        <ul class="mailbox-attachments clearfix">                       
                          <li>
                            <span class="mailbox-attachment-icon has-img">
                              <img src="images/recursos/galery5.jpg" alt="The Wedding Board">
                            </span>
                            <div class="mailbox-attachment-info">
                              <a href="#" class="mailbox-attachment-name">
                                <i class="fa fa-camera"></i> photo1.png
                              </a>
                              <span class="mailbox-attachment-size">
                                2.67 MB
                                <a href="images/recursos/galery5.jpg" target="_blank" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                              </span>
                            </div>
                          </li>
                          <li>
                            <span class="mailbox-attachment-icon has-img">
                              <img src="images/recursos/galery12.jpg" alt="The Wedding Board">
                            </span>
                            <div class="mailbox-attachment-info">
                              <a href="#" class="mailbox-attachment-name"><i class="fa fa-camera"></i> photo2.png</a>
                              <span class="mailbox-attachment-size">
                                1.9 MB
                                <a href="images/recursos/galery12.jpg" target="_blank" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                              </span>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="box-footer" style="border-top:0px">
                        <div class="centers">
                          <a data-toggle="modal" data-target="#enviarInvitacion" data-whatever="@mdo">
                            <button type="submit" class="btn btn-default icon-menssage"><i class="fa fa-check-square-o" aria-hidden="true"></i> Aceptar</button>
                          </a>
                        </div>
                      </div>
                      <!-- fin -->
                  <?php  } ?>


                  </div><!-- links -->
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 separacion-botnes-link">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 derecha-link1">
                      <a href="licitaciones-2.php">
                        <button type="submit" class="btn btn-default icon-menssage"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Ir a licitaciones</button>
                      </a>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                      <a href="#subir">
                        <button type="submit" class="btn btn-default icon-menssage"><i class="fa fa-chevron-circle-up" aria-hidden="true"></i> Subir a licitación</button>
                      </a>
                    </div>                    
                  </div>

                  </div>

                  </div>                  
                </div>


      <!--MODAL-->
      <div class="modal fade" id="enviarInvitacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog content-popoup" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true"><img src="images/recursos/close-popoup.png" alt="The Wedding Board"> cerrar</span>
              </button>
            </div>
            <div class="modal-body col-md-12" style="background:white;">
              <!--COLLAPSER-->
                <div class="col-md-12">
                  <p class="titulo-popoup" style="text-transform:capitalize">
                    VAS AÑADIR  COMO PROVEEDOR A:
                  </p>
                  <p class="titulo-popoup">
                    Lor<span>em I</span>mpsum
                  </p>
                </div>

                <div class="col-md-8 col-md-offset-2 top-20">
                  <div class="col-md-6" style="text-align:right">
                    <button type="submit" class="btn btn-default icon-menssage"><i class="fa fa-check-square-o" aria-hidden="true"></i> Aceptar</button>
                  </div>
                  <div class="col-md-6">
                    <button type="submit" class="btn btn-default icon-menssage" data-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i> Cancelar</button>
                  </div>

                </div>
              <!--COLLAPSER-->
            </div>
          </div>
        </div>
      </div>
      <!--MODAL-->

    </section>
    <!-- /.content -->
  </div>
  <div class="control-sidebar-bg"></div>
</div>

<?php
  // get_footer();
?>
<script>
// Select all links with hashes
$('a[href*="#"]')
// Remove links that don't actually link to anything
.not('[href="#"]')
.not('[href="#0"]')
.click(function(event) {
  // On-page links
  if (
    location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
    &&
    location.hostname == this.hostname
  ) {
    // Figure out element to scroll to
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
    // Does a scroll target exist?
    if (target.length) {
      // Only prevent default if animation is actually gonna happen
      event.preventDefault();
      $('html, body').animate({
        scrollTop: target.offset().top
      }, 1000, function() {
        // Callback after animation
        // Must change focus!
        var $target = $(target);
        $target.focus();
        if ($target.is(":focus")) { // Checking if the target was focused
          return false;
        } else {
          $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
          $target.focus(); // Set focus again
        };
      });
    }
  }
});
</script>


<?php
//  include("footer-2.php");
?>



<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>

<script>
$( document ).ready(function() {
  wedding();
  $(".directorio-proveedor").change(function() {
    wedding();
  });

  function wedding() {
    var seleccion = $(".directorio-proveedor option:selected").val();
    if(seleccion != "proveedorsito"){
      $(".perfiles > div").hide();
      $(".perfiles ."+seleccion).show();
    }
  }

});
</script>

<script>
$( document ).ready(function() {
  wedding();
  $(".directorio-proveedor2").change(function() {
    wedding();
  });

  function wedding() {
    var seleccion = $(".directorio-proveedor2 option:selected").val();
    if(seleccion != "perfilito"){
      $(".perfiles2 > div").hide();
      $(".perfiles2 ."+seleccion).show();
    }
  }

});
</script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!--WOW-->
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
 </script>





<!--  -->
<!-- jQuery 2.2.3 -->

<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>

<script>
$(document).ready(function() {
$("#cf_onclick").click(function() {
$(".cf2 img.top").toggleClass("transparent");
});
});
</script>
<script>
$(document).ready(function() {
$("#cf_onclick2").click(function() {
$(".cf3 img.top").toggleClass("transparent");
});
});
</script>
<script>
$(document).ready(function() {
$("#cf_onclick3").click(function() {
$(".cf4 img.top").toggleClass("transparent");
});
});
</script>
<script>
$(document).ready(function() {
$("#cf_onclick4").click(function() {
$(".cf5 img.top").toggleClass("transparent");
});
});
</script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

</body>
</html>