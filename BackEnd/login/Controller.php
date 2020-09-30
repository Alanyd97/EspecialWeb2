<?php

require_once "View.php";
require_once "model.php";

class LoginController{
  private $view;
  private $modelUsuario;

  function __construct(){
    $this->view = new LoginView();
    $this->modelUsuario = new UsuarioModel();
  }

    // FUNCIONES DE LOGIN

  
  // MUESTRA EL LOGIN
  public function DisplayLogin(){
    $this->view->DisplayLogin();
  }

  // LOGIN 
  public function Login(){
    $nombre = $_POST['nombre'];
    $clave = $_POST['clave'];
    $dbUser = $this->modelUsuario->GetUsuario($nombre);
    if (!empty($dbUser)){
      if (password_verify($clave, $dbUser->clave)){
          session_start();
          $_SESSION['user'] =  $dbUser->nombre;
          $_SESSION['id_usuario'] =  $dbUser->id_usuario;
          $_SESSION['admin'] = $dbUser->admin;
          header(JUEGOS);
        }else{
          $this->view->DisplayLogin("Clave incorrecta");
        }
    }else{
      $this->view->DisplayLogin("No existe el usuario");
    }
  }
  
  // LOGOUT
  public function Logout(){
    session_start();
    session_destroy();
    header(LOGIN);
  }
}