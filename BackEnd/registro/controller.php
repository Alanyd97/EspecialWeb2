<?php
require_once "model.php";
require_once "view.php";
require_once "./BackEnd/login/Model.php";

class registrarcontroller {

    private $model;
    private $view;
    private $umodel;

	function __construct(){
        $this->model = new registrarmodel();
        $this->view = new registrarview();
        $this->umodel = new Usuariomodel();
    }
    public function Registrar(){
        $users = $this->umodel->GetUsuarios();
        if (($_POST['nombre'] != '') && ($_POST['email'] != '') && ($_POST['clave'] != '') && ($_POST['pregunta'] != '')){
            foreach($users as $usuario){
                if(($_POST['nombre'] != $usuario->nombre) && ($_POST['email'] != $usuario->email)){
                    $repetida = false;
                }else{
                    $repetida = true;
                    $error = 'Usuario o email ya existen';
                    $this->view->showError($error);
                }
            }
            if($repetida == false){
                $this->model->Registrar($_POST['nombre'],$_POST['email'],$_POST['clave'],$_POST['pregunta']);
                session_start();
                $_SESSION['user'] = $_POST['nombre'];
                $_SESSION['admin'] = 0;
                header("Location: " . BASE_URL);
            }
        }else{
            header("Location: " . registro);
        }
    }
    public function DisplayRegistro(){
        $this->view->DisplayRegistro();
    }
}