<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mascotas extends CI_Controller{

  public function __construct()
  {
    parent::__construct();

    $this->load->model(array('Mascotas_modelo'));
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $data['titulo'] = "Veterinaria";
    //lista todas las mascotas para crear una lista y mostrarla en la principal
    $data['mascotas'] = $this->Mascotas_modelo->mascotas();
    $this->load->view('secciones/inicio',$data);

  }

  function registro()
  {
    if(!(isset($this->session->usuario)) && $this->session->usuario==0){
      redirect('seguridad');
    }
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
      $id=$this->Mascotas_modelo->regMascota($_POST);
      $this->Mascotas_modelo->subir_fichero($id);
      print "<script type=\"text/javascript\">alert('Registro de mascota {$_POST["nombre"]} correcto'); window.location.href = \"/veterinaria/mascotas/registro\";</script>";
    }
  }
}
