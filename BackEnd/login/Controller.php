<?php

require_once "View.php";
require_once "Model.php";
require_once "./BackEnd/juegos/Controller.php";

class LoginController{
  private $view;
  private $modelUsuario;
  private $juegosController;

  function __construct(){
    $this->view = new LoginView();
    $this->modelUsuario = new UsuarioModel();
    $this->juegosController = new JuegosController();
  }

    // FUNCIONES DE LOGIN

  
  // MUESTRA EL LOGIN
  public function DisplayLogin(){
    session_start();
    if (isset($_SESSION['admin'])){
      session_abort();
    var_dump(isset($_SESSION['admin'])."asd");
    var_dump(isset($_SESSION['admin']));
    var_dump(isset($_SESSION['admin']));
    var_dump(isset($_SESSION['admin']));
    var_dump(isset($_SESSION['admin']));
      $this->juegosController->DisplayJuegos();
      header(JUEGOS);
    }else{  
      $this->view->DisplayLogin();
    }
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