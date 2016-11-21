<?php
$this->load->view('partes/head',$titulo);
?>
<style >
.navbar{
  margin-bottom: 0;
}
body{
      background: #ecf0f1;
}
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
  width: 24%;
  float: left;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  margin-bottom: 2.85714%;
  box-shadow: 0 1px 2px 0 rgba(0,0,0,.3);
  border-radius: 2px;
  background: #66ff40;
  color: #fff;
  text-align: center;
  font-size: 17px;
  font-weight: 900;
  border-radius: 5px;
  margin: auto 5px 5px auto;
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
  max-height: 190px;
  width: 100%;
  background: #fff;
}
ul.gallery{
  flex-wrap: nowrap;
  flex-wrap: wrap;
  flex-wrap: wrap-reverse;
  flex-wrap: inherit;
  flex-wrap: initial;
  flex-wrap: unset;
}
#lista_mascotas{
    background: #76d3ff;
    padding: 10px;
    box-shadow: 0px 0px 11px 0px #3f3f3f;
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
            <span><?php echo $v->peso; ?> kgr</span>
            <span><?php echo $v->color; ?></span>
            <span><?php echo $v->comentario; ?></span>
          </span>
        </li>
      <?php } ?>
  </ul>

  </section>

<?php  $this->load->view('partes/footer'); ?>
