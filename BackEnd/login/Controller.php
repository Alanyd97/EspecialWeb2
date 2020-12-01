<?php

require_once "View.php";
require_once "./BackEnd/usuario/model.php";
require_once "./BackEnd/juegos/Controller.php";
require_once "./BackEnd/seguridad/Seguridad.php";

class LoginController extends Seguridad{
  private $view;
  private $modelUsuario;
  private $juegosController;
  private $Seguridad;

  function __construct(){
    $this->view = new LoginView();
    $this->modelUsuario = new UsuarioModel();
    $this->juegosController = new JuegosController();
    $this->Seguridad = new Seguridad();
  }

    // FUNCIONES DE LOGIN

  
  // MUESTRA EL LOGIN
  public function DisplayLogin(){ 
    if ($this->checkLoggedIn()){
      $this->juegosController->DisplayJuegos();
    }else{  
      $this->view->DisplayLogin();
    }

  }

  // LOGIN 
  public function Login(){
      $nombre = $_POST['nombre'];
      $clave = $_POST['clave'];
      $dbUser = $this->modelUsuario->GetUsuarioPorNombre($nombre);
      if (!empty($dbUser)){
        if (password_verify($clave, $dbUser->clave)){
            session_start();
            $_SESSION['user'] =  $dbUser->nombre;
            $_SESSION['id_usuario'] =  $dbUser->id_usuario;
            $_SESSION['admin'] = $dbUser->admin;
            $this->juegosController->DisplayJuegos();
          }else{
            $this->view->DisplayLogin("Clave incorrecta");
          }
      }else{
        $this->view->DisplayLogin("No existe el usuario");
      }
  }
  
  // LOGOUT
  public function LogOut(){
    session_start();
    session_destroy();
    header(LOGIN);
  }


}