<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usuario_modelo extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    //Codeigniter : Write Less Do More
  }

  function cargaUSu($id){
    $usuario ="";
    $this->db->where('idusuarios=',$id);
    $query = $this->db->get('usuarios');
    $rs = $query->result();
    if(count($rs) > 0){
      $usuario = $rs[0];
    }
    return $usuario;
  }
  function verUsuarios(){

    $usuario = $this->db->get('usuarios');
    return $usuario->result();

  }
  function insertarUsu($usuario) {
    $id = $usuario['id'];
    if($id+0 > 0) {
      $this->db->where('idusuarios=',$id);
      unset($usuario['id']);
      $this->db->update('usuarios',$usuario);
    }else{
        $this->db->insert('usuarios',$usuario);
    }
  }

  function iniciarSesion($usr, $clv)  {

    $this->db->where('usuario=',$usr);
    $this->db->where('clave=',$clv);
    $query = $this->db->get('usuarios');

    $rs = $query->result();
    if(count($rs) > 0){
      $usuario = $rs[0];
      return $usuario->idusuarios;
    }
    $todos = $this->db->query('SELECT count(*) AS nr FROM usuarios');
    $nn = $todos->result();


    if ($nn[0]->nr < 1  && $usr == 'admin' && $clv == '1tl4w3b') {
      return 99;
    }
    return false;
  }
}
