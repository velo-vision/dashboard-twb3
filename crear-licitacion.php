<?php
  include("head-3.php");
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <!-- /.col -->
      <div class="col-md-6 col-md-offset-3 titulo-perfil">
        <p>
          licitaciones
        </p>
        <img src="images/recursos/linea-greca.png" alt="The Wedding Board">
      </div>
      <div class="col-md-8 col-md-offset-2 top-20">
        <div class="box box-primary">
          <div class="box-header with-border">
            <p class="box-title"><strong>Crer una nueva licitación</strong></p>
            <div class="box-tools pull-right">
              <p class="box-title"><strong>*Campos Obligatorios</strong></p>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="form-group">
              <input class="form-control" placeholder="Nombre de la licitación">
            </div>
            <div class="form-group">
              <input class="form-control" placeholder="*Presupuesto:">
            </div>
            <div class="form-group">
              <select class="form-control select2" style="width: 100%;">
                <option selected="selected">*Categoria:</option>
                <option>Lorem Ipsum</option>
                <option>Lorem Ipsum</option>
                <option>Lorem Ipsum</option>
                <option>Lorem Ipsum</option>
                <option>Lorem Ipsum</option>
              </select>
            </div>
            <div class="form-group">
              <input class="form-control" placeholder="Lugar:">
            </div>
            <div class="form-group">
              <div class="input-group date">
                <input type="text" class="form-control pull-right" id="datepicker" placeholder="*Fecha del evento:">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
              </div>
              <!-- /.input group -->
            </div>
            <!-- /.form group -->

            <!-- RANGO DE DATOS -->
            <!-- <div class="form-group">
              <label>Date range:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input type="text" class="form-control pull-right" id="reservation">
              </div>
            </div> -->
            <!-- RANGO DE DATOS -->
            <div class="form-group">
                  <textarea id="compose-textarea" class="form-control" style="height: 300px">
                    <h1><u>Titulo</u></h1>
                    <h4>*Descripción:</h4>
                    <p>
                      Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                      nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec,
                      vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
                    </p>
                  </textarea>
            </div>
            <div class="form-group">
              <div class="btn btn-default btn-file">
                <i class="fa fa-paperclip"></i> Adjuntar archivo
                <input type="file" name="attachment">
              </div>
              <p class="help-block">Max. 32MB</p>
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <div class="pull-right">
              <!-- <button type="button" class="btn btn-default"><i class="fa fa-pencil"></i> Draft</button> -->
              <a href="licitaciones-2.php"><button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o" style="margin-right:5px;"></i>Crear</button></a>
            </div>
            <button type="reset" class="btn btn-default"><i class="fa fa-times"></i> Descarte</button>
          </div>
          <!-- /.box-footer -->
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
