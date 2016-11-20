<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mascotas extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model(array('mascotas_modelo'));
    //Codeigniter : Write Less Do More
  }

  function index()
  {


  }

  function registro()
  {
    $data['titulo'] = "Registro de Mascotas";
    $this->load->view('secciones/registro', $data);

  }

  function guardar(){
    if($_POST){
      if($_FILES['foto']['tmp_name']!=""){
        $_POST['foto']='S';
      }else{
        $_POST['foto']='N';
      }
      var_dump($_POST);
      $id=$this->mascotas_modelo->regMascota($_POST);
      $this->mascotas_modelo->subir_fichero($id);
    }
  }
}
