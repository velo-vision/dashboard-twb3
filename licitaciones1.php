<?php
 //include("head-2.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>The Wedding Board</title>
  <meta name="description"  content="The Wedding Board es un espacio de inspiración para las novias y para todos los interesados en el mundo de las bodas; donde podrán resolver y conocer tendencias" />
  <link rel="canonical" href="http://twblog.com.mx/" />
  <meta property="og:title" content="The wedding Board" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="http://twblog.com.mx/" />
  <meta property="og:image" content="http://twblog.com.mx/wp-content/uploads/2017/03/rs_wedding.jpg" />
  <meta property="og:site_name" content="TWB" />
  <meta property="og:description" content="Es un espacio de inspiración para las novias y para todos los interesados en el mundo de las bodas; donde podrán resolver y conocer tendencias." />
  <link rel="icon" href="images/wedding_ico.png" sizes="32x32" />
  <link rel="icon" href="images/wedding_ico.png" sizes="192x192" />
  <link rel="apple-touch-icon-precomposed" href="images/wedding_ico.png" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!--STYLE VELOSOFT-->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="style.css">
  <!--FONTS-->
  <link href="https://fonts.googleapis.com/css?family=Montez" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montez" rel="stylesheet">
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <header class="main-header">
      <!-- Logo -->
      <a href="perfil.php" class="logo hidden-xs">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><img width="30px;" src="images/recursos/twb.png" alt="The Wedding Board"></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><img width="130px" src="images/recursos/logo-letras.png" alt="The Wedding Board"></span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"><span class="sr-only">Toggle navigation</span></a>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <li class="dropdown messages-menu">
              <ul class="dropdown-menu">
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
                  </ul>
                </li>
                <li class="footer"><a href="#">See All Messages</a></li>
              </ul>
            </li>
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle hidden-xs" data-toggle="dropdown">
                <img src="images/recursos/usuaria.png" class="user-image" alt="The Wedding Board">
                <span class="hidden-xs">Sophie Dueso</span>
              </a>
              <ul class="dropdown-menu drop-perfil hidden-xs" style="box-shadow:none;">
                <li>
                  <div>
                    <a href="perfil.php">Usuario</a>
                  </div>
                </li>
                <li>
                  <div >
                    <a href="index.php">Salir</a>
                  </div>
                </li>
              </ul>
              <div class="hidden-sm hidden-md hidden-lg logo-mobile">
                <a href="muro-2.php"><img src="images/recursos/logo-letras.png" alt="The Wedding Board"></a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </header>
  <!-- Left side column. contains the logo and sidebar -->
  <!--  -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!--BOTONES PERFIL-->
      <div class="user-panel">
        <div class="cols centers">
          <a href="index.php">
            <img width="50%;" class="wow fadeInDown" data-wow-duration="2.5s" data-wow-delay="" src="images/recursos/logo.png" title="Logo" alt="The Wedding Board">
          </a>
        </div>
      </div>
      <!--BOTONES PERFIL-->
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="images/dashboard/usuaria.png" class="user-image" alt="The Wedding Board">
        </div>
        <div class="pull-left info">
          <p>
            <strong>Sophie Dueso</strong><br>
            <small>Administrador</small>
          </p>
        </div>
      </div>
      <!--BOTONES PERFIL-->
      <div class="user-panel">
        <div class="cols">
          <a href="index.php">
            <p class="boton-perfil">
              Salir
            </p>
          </a>
        </div>
      </div>
      <!--BOTONES PERFIL-->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="treeview">
          <a href="configuracion1.php">
            <!-- <i class="fa fa-envelope" aria-hidden="true"></i> --> 
            <i class="fa fa-cogs" aria-hidden="true"></i><span>Configuración</span>
          </a>
        </li>
        <li>
          <a href="#!">
            <i class="fa fa-list-alt" aria-hidden="true"></i> <span>Editor Web</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#!">
            <i class="fa fa-files-o"></i><span>Licitaciones</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           <li class=""><a href="licitaciones1.php">Principal</a></li>
            <li class=""><a href="licitacionesArchivadas.php">Archivadas</a></li>
            <!-- <li class="">
              <a href="">
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                 Archivadas</a>
              <ul class="treeview-menu">                
                <li class="active no-border"><a href="licitacionesArchivadas.php">Lorem Ipsum</a></li>
              </ul>
            </li> -->           
          </ul>
         
        </li>

        <li class="treeview">
          <a href="#!">
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
            <span>Mensajes</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#!">
            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
            <span>Mesa de Regalos</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#!">
            <i class="fa fa-truck" aria-hidden="true"></i> <span>Proveedores</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="">
              <a href="#!">
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                 Mis proveedores</a>
              <ul class="treeview-menu">
                <li class="active"><a href="proveedores-2.php">Galería</a></li>
                <li class="active no-border"><a href="#!">Lorem Ipsum</a></li>
              </ul>
            </li>
            <li class=""><a href="#!">Mis proveedores</a></li>
          </ul>
          </a>
        </li>
        <li class="treeview">
          <a href="http://twblog.com.mx/" target="_blank">
            <i class="fa fa-arrow-left" aria-hidden="true"></i> <span>twb.com.mx</span>
          </a>
        </li>
        <li class="sociales treeview">
          <div>
          <span>
            <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          </span>
          <span>
            <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
          </span>
          <span>
            <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          </span>
          <span>
            <a href="https://es.pinterest.com/" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
          </span>
          </div>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

<?php
//include("head-2.php");
 // require("functions.php");
//  get_header();
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
                    <div class="col-xs-12 col-sm-6 col-md-16 col-lg-6">
                      <p class="asunto-licitacion"><strong>Respuestas:</strong> 3</p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-16 col-lg-6 aumento3">                                           
                      <a href="comparar-licitaciones.php"><span class="boton-comprar"><img src="images/recursos/comprar.png" alt="The Wedding Board"> comparar</span></a>                     
                    </div>
                  </div>

                  <?php // for ($i=0; $i < 4; $i++) { ?>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 aumento2">
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                      <p class="asunto-licitacion asunto-center"><strong>Proveedor:</strong> Lorem ipsum </p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <a href="#!"><span class="col-xs-12 boton-comprar comprar1 btn-provedor"><img src="images/recursos/proveedor.png" alt="The Wedding Board"> Perfil proveedor</span></a>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class=" col-xs-12 col-sm-12 col-md-4 col-lg-4">
                      <p class="nomargin asunto-licitacion1"><strong>Costos:</strong>$45,000</p>
                    </div>
                     <div class=" col-xs-12 col-sm-12 col-md-4 col-lg-4">
                      <p class="nomargin asunto-licitacion1"><strong>Vigencia:</strong> 19 de mayo 2017</p>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <p class="nomargin asunto-licitacion1"><strong>Descripción:</strong></p>
                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mailbox-read-message">
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
                  <?php  //} ?>


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