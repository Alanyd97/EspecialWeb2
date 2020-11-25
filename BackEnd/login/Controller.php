<?php

require_once "View.php";
require_once "Model.php";
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
public function AgregarAdmin(){
  $this->model->AgregarAdmin($_POST['admin'],$_POST['valoradmin']);
  header("Location: " . BASE_USER);
}

public function BorrarUser($params = null){
  $id = $params[':ID'];
  $this->model->BorrarUser($id);
  header("Location: " . BASE_USER);
}

public function GetUsuarios(){
  $this->checkLogIn();
  $id = $this->checkUser();
  if ($id == 1){
      $users = $this->model->GetUsuarios();
      $this->view->AdminUser($id,$users);

  } else {
      header("Location: " . BASE_URL);
  }

}

public function MostrarRecuperacion (){
  $this->view->Recuperacion();
}

public function VerCambiarContrasena($params =null){
  $id = $params[':ID'];
  $usuario = $this->model->GetUsuario($id);

  $this->view->CambiarContrasena($usuario);
}

public function RecuperarContra (){
  
  $this->mail->isSMTP();
  
  $this->mail->SMTPDebug = 2;
  
  $this->mail->Host = 'smtp.gmail.com';
  
  $this->mail->Port = 587;

  $this->mail->SMTPSecure = 'tls';

  $this->mail->SMTPAuth = true;

  $this->mail->Username = "alonx320@gmail.com";

  $this->mail->Password = "123";
  
  $this->mail->setFrom('alonx320@gmail.com', 'juegos tudai');

  $user = $_POST["usuarior"];
  $email = $_POST["emailr"];

  $usuario = $this->model->GetUsuariobyUser($user);
  $id = $usuario->id_usuario;

  $this->mail->addAddress($email, $user);

  $this->mail->Body = "Hola ".$user." le enviamos el siguiente link: http://localhost/Proyectos/Web2-TPE/nuevacontrasena/".$id." para que pueda recuperar su contraseña, en caso de que no lo haya solicitado ignore este mail. Saludos desde Cine TUDAI.";
  
  $this->mail->Subject = 'Recuperar contrasen a';
  
  if (!$this->mail->send()) {
      echo "Mailer Error: " . $this->mail->ErrorInfo;
      header("Location: " . olvidosucontrasena);

  } else {
      echo "Message sent!";
      header("Location: " . user);
}
}
public function CambiarConstrasena(){
  $this->model->CambiarConstrasena($_POST['usuarion'],$_POST['emailn'],$_POST['nuevacontra'],$_POST['id_usuario']);
  header("Location: " . user);
}
}