<?php
require_once("Model.php");
require_once("./BackEnd/juegos/Controller.php");
require_once "./BackEnd/seguridad/Seguridad.php";

class GenerosController extends Seguridad {

    private $model;
    private $juegosController;

    function __construct(){
        $this->model = new GenerosModel();
        $this->juegosController = new JuegosController();
    }

    public function InsertarGeneros(){
        $usuario = $this->checkLoggedIn();
        if ($usuario != null){ 
            $genero = $_POST['genero'];
            if (isset($genero)){
                $this->model->InsertarGeneros($genero);
            }
            $this->juegosController->DisplayJuegos();
        }else{
            $this->juegosController->DisplayJuegos();
        }
    }
    public function EditarGenero($params = null){
        $usuario = $this->checkLoggedIn();
        if ($usuario != null){ 
            $nombre = $_POST['editarGenero'];
            $id = $params[':ID'];
            $this->model->EditarGeneros($nombre,$id);
            $this->juegosController->DisplayJuegos();
        }else{
            $this->juegosController->DisplayJuegos();
        }
    }
    
    public function EliminarGenero($params = null) {
        $usuario = $this->checkLoggedIn();
        if ($usuario != null){ 
            $id = $params[':ID'];
            $this->model->BorrarGenero($id);
            $this->juegosController->DisplayJuegos();
        }else{
            $this->juegosController->DisplayJuegos();
        }
    }



    
};