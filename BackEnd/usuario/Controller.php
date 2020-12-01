<?php
require_once "model.php";
require_once "view.php";
require_once "./BackEnd/seguridad/Seguridad.php";

class UsuarioController extends Seguridad{

    private $model;
    private $view;
    private $loginController;

	function __construct(){
        $this->model = new UsuarioModel();
        $this->view = new UsuarioView();
        $this->loginController = new LoginController();
        $this->Seguridad = new Seguridad();
    }
    public function Registrar(){
        $nombre = $_POST['nombre'];
        $clave = $_POST['clave'];
        $usuario = $this->model->GetUsuarioPorNombre($nombre);
        if(isset($usuario) && $usuario){
            $this->DisplayRegistro("Usted ya esta registrado");
        }else{
            $this->model->AddUsuario($nombre, password_hash($clave, PASSWORD_DEFAULT), 1);
            $this->loginController->Login();
        }
    }
    public function DisplayRegistro(){$this->view->DisplayRegistro();}
    
    public function GetUsuarios(){
        $usuarios = $this->model->GetUsuarios();
        $usuario = $this-> checkLoggedIn();
        if ($usuario != null){ 
            $this->view->DisplayUsuarios($usuarios);
        }else{
          echo  "error 404";
        }
    }
    public function BorrarUser($params)
    {
        $usuario = $this-> checkLoggedIn();
        if ($usuario != null){ 
            $id = $params[':ID'];
            $this->model->BorrarUser($id);
            header("Location: " . BASE_URL);
        }else{
          echo  "error 404";
        }
    }
    public function AgregarAdmin($params)
    {
        $usuario = $this-> checkLoggedIn();
        if ($usuario != null){ 
            $id = $params[':ID'];
            $usrActual = $this->model->GetUsuario($id);
            if ($usrActual->admin > 0) {
                var_dump($usrActual);
                $this->model->EditarUsuario($usrActual->nombre, $usrActual->clave, 0, $usrActual->id_usuario);
             }else{
                $this->model->EditarUsuario($usrActual->nombre, $usrActual->clave, 1, $usrActual->id_usuario);
             }
             header("Location: " . USUARIOS);
        }else{
          echo  "error 404";
        }
    }
}