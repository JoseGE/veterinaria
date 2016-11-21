<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Veterinaria  |</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo base_url('mascotas');?>">Ver Listado</a></li>
        <?php if(isset($this->session->usuario)){?>
        <li><a href="<?php echo base_url('mascotas/registro');?>">Agregar Mascotas</a></li>
        <?php } ?>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <?php if(isset($this->session->usuario)){?>
        <li><a href="<?php echo base_url('seguridad/salir');?>">Salir</a></li>
        <?php }else{ ?>
          <li><a href="<?php echo base_url('seguridad');?>">Ingresar y Agregar Mascotas</a></li>
        <?php } ?>
      </ul>

    </div>
  </div>
</nav>
