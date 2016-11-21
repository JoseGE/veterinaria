<?php $this->load->view('partes/head',$titulo); ?>
<section style="margin-bottom:5px">

<form class="form-horizontal" action="<?php echo base_url('mascotas/guardar');?>" method="post" enctype="multipart/form-data">
  <input type="hidden" name="id" value="">
  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Nombre</label>
    <div class="col-sm-10">
      <input type="text" name="nombre" class="form-control" value="">
    </div>
  </div>
  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Fecha Nacimiento</label>
    <div class="col-sm-10">
    <input type="date" name="nacimiento" class="form-control" value="">
    </div>
  </div>
  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Tipo</label>
    <div class="col-sm-10">
    <select type="text" name="tipo" class="form-control" required>
      <option value="">Selcciona Tipo de Animal</option>
      <option value="perro">Ave</option>
      <option value="perro">Anfibio</option>
      <option value="perro">Conejo</option>
      <option value="perro">Gato</option>
      <option value="perro">Pez</option>
      <option value="perro">Perro</option>
      <option value="perro">Reptil</option>
      <option value="perro">Roedor</option>
    </select>
    </div>
  </div>
  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Raza</label>
    <div class="col-sm-10">
    <input type="text" name="raza" class="form-control" value="">
    </div>
  </div>
  <div class="form-group ">
    <label for="" class="col-sm-2 control-label">Peso</label>
    <div class="col-sm-10">
      <div class="input-group">
        <input type="number" step="any" name="peso" class="form-control" value="">
        <span class="input-group-addon">kgr</span>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Color</label>
    <div class="col-sm-10">
    <input type="text" name="color" class="form-control" value="">
    </div>
  </div>
  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Foto</label>
    <div class="col-sm-10">
    <input type="file" name="foto" required class="form-control">
    </div>
  </div>
  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Comentario</label>
    <div class="col-sm-10">
    <textarea type="text" name="comentario" class="form-control" ></textarea>
    </div>
  </div>
  <div class="col-sm-offset-2">
    &nbsp;&nbsp;<button type="submit" class="btn btn-success">Registrar</button>
  </div>
</form>
</section>

<?php $this->load->view('partes/footer'); ?>
