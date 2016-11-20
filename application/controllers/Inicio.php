<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model(array('mascotas_modelo'));
  }

  function index()
  {
    $data['titulo'] = "Veterinaria";
    //lista todas las mascotas para crear una lista y mostrarla en la principal
    $data['mascotas'] = $this->mascotas_modelo->mascotas();
    $this->load->view('secciones/inicio',$data);
  }

}
