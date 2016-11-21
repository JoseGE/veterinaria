<?php
$this->load->view('partes/head',$titulo);
?>

  <section id="lista_mascotas">

      <ul class="gallery">
      <?php foreach ($mascotas as $mascota => $v) { ?>
        <li>
          <img src="<?php echo base_url('fotos/').'mascota_'.$v->id; ?>.png" alt="<?php echo $v->nombre; ?>"  class="img-responsive" />
          <span>
          <h3><?php echo $v->nombre; ?></h3>

            <span><?php echo $v->nacimiento; ?></span>
            <span><?php echo $v->tipo; ?></span>
            <span><?php echo $v->raza; ?></span>
            <span><?php echo $v->peso; ?> kgr</span>
            <span><?php echo $v->color; ?></span>
            <span><?php echo $v->comentario; ?></span>
          </span>
        </li>
      <?php } ?>
  </ul>

  </section>

<?php  $this->load->view('partes/footer'); ?>
