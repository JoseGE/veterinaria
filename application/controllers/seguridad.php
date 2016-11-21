<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seguridad extends CI_Controller{

  public function __construct()
  {
      //define('NOLOGIN', true);
    parent::__construct();

    //Codeigniter : Write Less Do More

    $this->load->model('usuario_modelo');
  }

  function index()
  {
    $data["titulo"]="Login";
    $this->load->view('secciones/login', $data);

  }

  function salir()
    {
      session_destroy();
      redirect('mascotas');
    }
    function login() {
      //$data["titulo"]="Error en Login";
      $usuario = $_POST['usuario'];
      $clave = $_POST['pass'];
      $tmp = $this->usuario_modelo->iniciarSesion($usuario, $clave);
var_dump($tmp);
      if ($tmp !== false) {
        $this->session->usuario = $tmp;
        $_SESSION['nombre'] = $usuario;
        redirect('mascotas/registro');
      }else{
        echo "error";
      }
      var_dump($this->session->usuario);
    }
    function registro(){
      redirect('usuario');
    }
}
