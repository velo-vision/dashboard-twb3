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
      <div class="col-md-12">
          <div class="box-header with-border">
            <span class="box-title"></span>
            <div class="box-tools pull-right">
              <div class="has-feedback">
                <input type="text" class="form-control input-sm" placeholder="Search Mail">
                <span class="glyphicon glyphicon-search form-control-feedback"></span>
              </div>
            </div>
            <!-- /.box-tools -->
          </div>
          <!-- /.box-header -->
          <div class="box-body no-padding">
            <div class="mailbox-controls">
              <!-- Check all button -->
              <!-- <button type="button" class="btn btn-default btn-sm checkbox-toggle">
                Categorias <i class="fa fa-caret-down" aria-hidden="true"></i>
              </button> -->
              <div class="dropdown boton-categoria">
                  <button class="btn btn-secondary dropdown-toggle btn btn-default btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-tag" aria-hidden="true"></i> Categorias <i class="fa fa-caret-down" aria-hidden="true"></i>
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Todos</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Flores</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Vestidos</a>
                  </div>
                </div>
              <div class="btn-group">
                <button type="button" class="btn btn-default btn-sm">
                  Borrar <i class="fa fa-trash-o"></i>
                </button>
              </div>
              <div class="btn-group">
                <button type="button" class="btn btn-default btn-sm">
                  Archivar Mensaje <i class="fa fa-archive" aria-hidden="true"></i>
                </button>
              </div>
              <!-- /.btn-group -->
              <button type="button" class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
              <button type="button" class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
              <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
              <div class="pull-right pag-center">
                1-50/200
                <div class="btn-group botones-paginacion">
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                </div>
                <!-- /.btn-group -->
              </div>
              <!-- /.pull-right -->
            </div>
            <div class="table-responsive mailbox-messages">
              <table class="table table-hover table-striped">
                <tbody >
                <tr class="texto-mail-active">
                  <td ><input type="checkbox"></td>
                  <td class=""><a href="mensajes-2.php"><strong>The Wedding Board</strong></a></td>
                  <td class=""><strong><span style="font-style:normal;font-weight:400;visibility:hidden"></span>Lorem ipsum dolor sit amet</strong> -Consectetuer adipiscing elit, orem ipsum dolor sit amet, consectetuer adipiscing...
                  </td>
                  <td class=""></td>
                  <td class=""><strong>hace 5 min.</strong></td>
                </tr>
                <tr class="texto-mail-active">
                  <td><input type="checkbox"></td>
                  <td class=""><a href="#!"><strong>The Wedding Board</strong></a></td>
                  <td class=""><i class="fa fa-tag" aria-hidden="true"></i> <span>Vestidos</span> <strong>Lorem ipsum dolor sit amet</strong> -  Consectetuer adipiscing elit, orem ipsum dolor sit amet, consectetuer adipiscing...
                  </td>
                  <td class=""><i class="fa fa-paperclip"></i></td>
                  <td class=""><strong>hace 1 Hora</strong></td>
                </tr>
                <tr class="texto-mail-active">
                  <td><input type="checkbox"></td>
                  <td class=""><a href="#!"><strong>The Wedding Board</strong></a></td>
                  <td class=""><strong>Lorem ipsum dolor sit amet</strong> -  Consectetuer adipiscing elit, orem ipsum dolor sit amet, consectetuer adipiscing...
                  </td>
                  <td class=""></td>
                  <td class=""><strong>hace 1 día</strong></td>
                </tr>
                <tr class="texto-mail-desactive">
                  <td><input type="checkbox"></td>
                  <td class=""><a href="#!"><strong>The Wedding Board</strong></a></td>
                  <td class=""><i class="fa fa-tag" aria-hidden="true"></i> <span>Flores</span> <strong>Lorem ipsum dolor sit amet</strong> -  Consectetuer adipiscing elit, orem ipsum dolor sit amet, consectetuer adipiscing...
                  </td>
                  <td class=""></td>
                  <td class=""><strong>13 marzo 2017</strong></td>
                </tr>
                <tr class="texto-mail-desactive">
                  <td><input type="checkbox"></td>
                  <td class=""><a href="#!"><strong>The Wedding Board</strong></a></td>
                  <td class=""><strong>Lorem ipsum dolor sit amet</strong> -  Consectetuer adipiscing elit, orem ipsum dolor sit amet, consectetuer adipiscing...
                  </td>
                  <td class=""></td>
                  <td class=""><strong>13 marzo 2017</strong></td>
                </tr>
                <tr class="texto-mail-desactive">
                  <td><input type="checkbox"></td>
                  <td class=""><a href="#!"><strong>The Wedding Board</strong></a></td>
                  <td class=""><i class="fa fa-tag" aria-hidden="true"></i> <span>Vestido</span> <strong>Lorem ipsum dolor sit amet</strong> -  Consectetuer adipiscing elit, orem ipsum dolor sit amet, consectetuer adipiscing...
                  </td>
                  <td class=""></td>
                  <td class=""><strong>13 marzo 2017</strong></td>
                </tr>
                <tr class="texto-mail-desactive">
                  <td><input type="checkbox"></td>
                  <td class=""><a href="#!"><strong>The Wedding Board</strong></a></td>
                  <td class=""><strong>Lorem ipsum dolor sit amet</strong> -  Consectetuer adipiscing elit, orem ipsum dolor sit amet, consectetuer adipiscing...
                  </td>
                  <td class=""></td>
                  <td class=""><strong>13 marzo 2017</strong></td>
                </tr>
                <tr class="texto-mail-desactive">
                  <td><input type="checkbox"></td>
                  <td class=""><a href="#!"><strong>The Wedding Board</strong></a></td>
                  <td class=""><i class="fa fa-tag" aria-hidden="true"></i> <span>Flores</span> <strong>Lorem ipsum dolor sit amet</strong> -  Consectetuer adipiscing elit, orem ipsum dolor sit amet, consectetuer adipiscing...
                  </td>
                  <td class=""></td>
                  <td class=""><strong>13 marzo 2017</strong></td>
                </tr>
                <tr class="texto-mail-desactive">
                  <td><input type="checkbox"></td>
                  <td class=""><a href="#!"><strong>The Wedding Board</strong></a></td>
                  <td class=""><strong>Lorem ipsum dolor sit amet</strong> -  Consectetuer adipiscing elit, orem ipsum dolor sit amet, consectetuer adipiscing...
                  </td>
                  <td class=""></td>
                  <td class=""><strong>13 marzo 2017</strong></td>
                </tr>
                <tr class="texto-mail-desactive">
                  <td><input type="checkbox"></td>
                  <td class=""><a href="#!"><strong>The Wedding Board</strong></a></td>
                  <td class=""><strong>Lorem ipsum dolor sit amet</strong> -  Consectetuer adipiscing elit, orem ipsum dolor sit amet, consectetuer adipiscing...
                  </td>
                  <td class=""></td>
                  <td class=""><strong>13 marzo 2017</strong></td>
                </tr>
                <tr class="texto-mail-desactive">
                  <td><input type="checkbox"></td>
                  <td class=""><a href="#!"><strong>The Wedding Board</strong></a></td>
                  <td class=""><strong>Lorem ipsum dolor sit amet</strong> -  Consectetuer adipiscing elit, orem ipsum dolor sit amet, consectetuer adipiscing...
                  </td>
                  <td class=""></td>
                  <td class=""><strong>13 marzo 2017</strong></td>
                </tr>
                </tbody>
              </table>
              <!-- /.table -->
            </div>
            <!-- /.mail-box-messages -->
          </div>
          <!-- /.box-body -->
          <div class="box-footer no-padding">
            <div class="mailbox-controls">
              <div class="pull-right pag-center">
                1-50/200
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                </div>
                <!-- /.btn-group -->
              </div>
              <!-- /.pull-right -->
            </div>
          </div>

        <!-- /. box -->
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
