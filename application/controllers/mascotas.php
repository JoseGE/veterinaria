<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mascotas extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {


  }

  function registro($value='')
  {
    $data['titulo'] = "Registro de Mascotas";
    $this->load->view('secciones/registro', $data);
  }
}
