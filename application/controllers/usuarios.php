<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Usuario_modelo');
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $id = (isset($_GET['id'])) ? $_GET['id']+0 : 0;
    $data['titulo']="Administracion de usuarios";
    $data['usuario'] = $this->Usuario_modelo->cargaUsu($id);
    $data['usuarios'] = $this->Usuario_modelo->verUsuarios($id);
    $this->load->view('secciones/registroUsuario', $data);
  }
//guarda usuarios
  function guardar() {
    $jguardado = array();
    if($_POST){
      echo "<script>alert('Listo!!');</script>";
      $this->Usuario_modelo->insertarUsu($_POST);
      redirect('usuarios');
    }

  }

}
