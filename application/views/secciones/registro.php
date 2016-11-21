<?php $this->load->view('partes/head',$titulo); ?>
<section style="margin-bottom:5px">
  <h2 class="text-center"><?php echo $titulo; ?></h2>
  <hr/>
<form class="form-horizontal" action="<?php echo base_url('mascotas/guardar');?>" method="post" enctype="multipart/form-data">
  <input type="hidden" name="id" value="">
  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Nombre</label>
    <div class="col-sm-6">
      <input type="text" name="nombre" class="form-control" value="">
    </div>
  </div>
  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Fecha Nacimiento</label>
    <div class="col-sm-6">
    <input type="date" name="nacimiento" class="form-control" value="">
    </div>
  </div>
  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Tipo</label>
    <div class="col-sm-6">
    <select type="text" name="tipo" class="form-control" required>
      <option value="">Selcciona Tipo de Animal</option>
      <option value="Ave">Ave</option>
      <option value="Anfibio">Anfibio</option>
      <option value="Conejo">Conejo</option>
      <option value="Gato">Gato</option>
      <option value="Pez">Pez</option>
      <option value="Perro">Perro</option>
      <option value="Reptil">Reptil</option>
      <option value="Roedor">Roedor</option>
    </select>
    </div>
  </div>
  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Raza</label>
    <div class="col-sm-6">
    <input type="text" name="raza" class="form-control" value="">
    </div>
  </div>
  <div class="form-group ">
    <label for="" class="col-sm-2 control-label">Peso</label>
    <div class="col-sm-6">
      <div class="input-group">
        <input type="number" step="any" name="peso" class="form-control" value="">
        <span class="input-group-addon">kgr</span>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Color</label>
    <div class="col-sm-6">
    <input type="text" name="color" class="form-control" value="">
    </div>
  </div>
  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Foto</label>
    <div class="col-sm-6">
    <input type="file" name="foto" required class="form-control" accept="image/*"/>
    </div>
  </div>
  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Comentario</label>
    <div class="col-sm-6">
    <textarea type="text" name="comentario" class="form-control" ></textarea>
    </div>
  </div>
  <div class="col-sm-offset-2">
    &nbsp;&nbsp;<button type="submit" class="btn btn-success">Registrar</button>
  </div>
</form>
</section>

<?php $this->load->view('partes/footer'); ?>
