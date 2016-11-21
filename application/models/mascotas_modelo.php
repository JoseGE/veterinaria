<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mascotas_modelo extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  function regMascota($mascota) {
    $id = $mascota['id'];
    if($id+0 > 0) {
      $this->db->where('id=',$id);
      unset($mascota['id']);
      $this->db->update('mascota',$mascota);
    }else{
        $this->db->insert('mascota',$mascota);
        return $this->db->insert_id();
    }

  }

  function cargaMascota($id) {
      $mascota ="";
      $this->db->where('id=',$id);
      $query = $this->db->get('mascota');
      $rs = $query->result();
      if(count($rs) > 0){
        $mascota = $rs[0];
      }
      return $mascota;
    }

    function mascotas() {
      $query = $this->db->get('mascota');
      return $query->result();
    }

    function subir_fichero($id) {

      $foto = 'foto';
           $config['upload_path'] = "fotos/";
           $config['file_name'] = "mascota_{$id}";
           $config['allowed_types'] = "*";
           $config['max_size'] = "50000";
           $config['max_width'] = "2000";
           $config['max_height'] = "2000";
           $config['file_ext']=".png";
           $config['image_type'] = "png";
           $this->load->library('upload', $config);

           if (!$this->upload->do_upload($foto)) {
               //*** ocurrio un error
               $data['uploadError'] = $this->upload->display_errors();
               echo $this->upload->display_errors();
               return;
           }

           $data['uploadSuccess'] = $this->upload->data();
         }
}
