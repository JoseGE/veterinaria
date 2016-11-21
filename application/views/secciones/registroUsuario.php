<?php $this->load->view('partes/head',$titulo);
?>
<section style="margin-bottom:5px">
  <h2 class="text-center"><?php echo $titulo; ?></h2>
  <hr/>
<form class="form-horizontal" action="<?php echo base_url('usuarios/guardar');?>" method="post" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?php echo (isset($usuario->id)) ? $usuario->id : 0;?>"/>
  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-6">
      <input type="text" name="email" class="form-control" value="<?php echo (isset($usuario->email)) ? $usuario->email : "";?>">
    </div>
  </div>
  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Nombre usuario</label>
    <div class="col-sm-6">
      <input type="text" name="usuario" class="form-control" value="<?php echo (isset($usuario->usuario)) ? $usuario->usuario : "";?>">
    </div>
  </div>
  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Contrase&ntilde;a</label>
    <div class="col-sm-6">
      <input type="password" name="clave" class="form-control">
    </div>
  </div>
  <div class="col-sm-offset-2">
    &nbsp;&nbsp;<button type="submit" class="btn btn-success">Guardar</button>
  </div>
</form>
<div class="row">
    <div class="col-sm-8 col-sm-offset-2">
<table class="table table-striped">
  <thead>
    <tr>
      <th>id</th>
      <th>nombre</th>
      <th>email</th>

    </tr>
  </thead>
  <tbody>
    <?php
      foreach ($usuarios as $usuario) {

        echo "<tr>
        <td>{$usuario->id}</td>
        <td>{$usuario->usuario}</td>
        <td>{$usuario->email}</td>
        </tr>";
      }
    ?>
  </tbody>
</table>
</div>
</div>
</section>
<?php $this->load->view('partes/footer'); ?>
