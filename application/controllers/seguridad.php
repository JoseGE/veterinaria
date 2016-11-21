<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seguridad extends CI_Controller{

  public function __construct()
  {
      //define('NOLOGIN', true);
    parent::__construct();

    //Codeigniter : Write Less Do More

    $this->load->model('Usuario_modelo');
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
      $clave = $_POST['clave'];
      $tmp = $this->Usuario_modelo->iniciarSesion($usuario, $clave);
      if ($tmp !== false) {
        $this->session->usuario = $tmp;
        print "<script type=\"text/javascript\">alert('Bienvenido {$usuario}'); window.location.href = \"/veterinaria/mascotas/registro\";
        </script>";
      }else{
        print "<script type=\"text/javascript\">alert('Usuario o contrasena
        incorrectos'); window.location.href = \"/veterinaria/seguridad/\";
        </script>";
      }
    }
}
