<?php
require_once "model.php";
require_once "view.php";

class UsuarioController {

    private $model;
    private $view;
    private $loginController;

	function __construct(){
        $this->model = new UsuarioModel();
        $this->view = new UsuarioView();
        $this->loginController = new LoginController();
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
}