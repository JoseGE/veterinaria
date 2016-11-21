<?php $this->load->view('partes/head',$titulo); ?>
<section style="margin-bottom:5px">
  <h2 class="text-center"><?php echo $titulo; ?></h2>
  <hr/>
<form class="form-horizontal" action="<?php echo base_url('seguridad/login');?>" method="post" enctype="multipart/form-data">
  <input type="hidden" name="id" value="">
  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Nombre</label>
    <div class="col-sm-6">
      <input type="text" name="usuario" class="form-control" value="">
    </div>
  </div>
  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Contrase&ntilde;a</label>
    <div class="col-sm-6">
      <input type="password" name="clave" class="form-control" value="">
    </div>
  </div>
  <div class="col-sm-offset-2">
    &nbsp;&nbsp;<a href="Usuarios" class="btn btn-warning">Registrarme</a>
    <button type="submit" class="btn btn-success">Entrar</button>
  </div>
</form>
</section>
<?php $this->load->view('partes/footer'); ?>
