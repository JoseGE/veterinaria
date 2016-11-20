<?php
$this->load->view('partes/head',$titulo);
?>
<style >
ul.gallery {
  padding: 0 2.85714%;
  list-style: none
}

ul.gallery:after {
  clear: both;
  content: "";
  display: table
}

ul.gallery li {
  width: 48.57143%;
  float: left;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  margin-bottom: 2.85714%;
  box-shadow: 0 1px 2px 0 rgba(0,0,0,.3);
  border-radius: 2px
}

ul.gallery li:nth-child(2n+1) {
  margin-right: -100%;
  clear: both;
  margin-left: 0
}

ul.gallery li:nth-child(2n+2) {
  margin-left: 51.42857%;
  margin-right: -100%;
  clear: none
}

ul.gallery li:nth-last-child(-n+2) {
  margin-bottom: 0
}
ul.gallery li span{
  display: block;
  padding: 5px;
  word-wrap: break-word;
}
ul.gallery li span h3{
  word-wrap: break-word;
}
ul.gallery li img{
  max-height: 230px;
  width: 100%;
}
ul.gallery{
  flex-wrap: nowrap;
  flex-wrap: wrap;
  flex-wrap: wrap-reverse;

  /* Global values */
  flex-wrap: inherit;
  flex-wrap: initial;
  flex-wrap: unset;
}
</style>
  <section id="lista_mascotas">

      <ul class="gallery">
      <?php foreach ($mascotas as $mascota => $v) { ?>
        <li>
          <img src="fotos/mascota_<?php echo $v->id; ?>.png" alt="<?php echo $v->nombre; ?>"  class="img-responsive" />
          <span>
          <h3><?php echo $v->nombre; ?></h3>

            <span><?php echo $v->nacimiento; ?></span>
            <span><?php echo $v->tipo; ?></span>
            <span><?php echo $v->raza; ?></span>
            <span><?php echo $v->peso; ?></span>
            <span><?php echo $v->color; ?></span>
            <span><?php echo $v->comentario; ?></span>
          </span>
        </li>
      <?php } ?>
  </ul>

  </section>

<?php  $this->load->view('partes/footer'); ?>
