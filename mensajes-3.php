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
          mensajes
        </p>
        <img src="images/recursos/linea-greca.png" alt="The Wedding Board">
      </div>
      <div class="col-md-8 col-md-offset-2 top-20">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Redacta nuevo mensaje</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="form-group">
              <input class="form-control" placeholder="Para:">
            </div>
            <div class="form-group">
              <input class="form-control" placeholder="Asunto:">
            </div>
            <div class="form-group">
                  <textarea id="compose-textarea" class="form-control" style="height: 300px">
                    <h1><u>Heading Of Message</u></h1>
                    <h4>Subheading</h4>
                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain
                      was born and I will give you a complete account of the system, and expound the actual teachings
                      of the great explorer of the truth, the master-builder of human happiness. No one rejects,
                      dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know
                      how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again
                      is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain,
                      but because occasionally circumstances occur in which toil and pain can procure him some great
                      pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise,
                      except to obtain some advantage from it? But who has any right to find fault with a man who
                      chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that
                      produces no resultant pleasure? On the other hand, we denounce with righteous indignation and
                      dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so
                      blinded by desire, that they cannot foresee</p>
                    <ul>
                      <li>List item one</li>
                      <li>List item two</li>
                      <li>List item three</li>
                      <li>List item four</li>
                    </ul>
                    <p>Thank you,</p>
                    <p>John Doe</p>
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
              <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o" style="margin-right:5px;"></i>Enviar</button>
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
