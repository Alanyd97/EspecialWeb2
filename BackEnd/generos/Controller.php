<?php
require_once("Model.php");
require_once("./BackEnd/juegos/Controller.php");

class GenerosController {

    private $model;
    private $juegosController;

    function __construct(){
        $this->model = new GenerosModel();
        $this->juegosController = new JuegosController();
    }
  
    public function GetGenero($params = null){
        $id_genero = $params[':ID'];
        $genero = $this->model->GetGenero($id_genero);
        $this->view->ShowGenero($genero,$id);
    }

    public function GetGeneros($params = null){
        $generos = $this->model->GetGeneros();
        $this->view->ShowGeneros($generos,$id);
    }
    public function InsertarGeneros(){
        $genero = $_POST['genero'];
        $this->model->InsertarGeneros($genero);
        $this->juegosController->DisplayJuegos();
        
    }
    public function EditarGenero($params = null){
        $nombre = $_POST['editarGenero'];
        $id = $params[':ID'];
        $this->model->EditarGeneros($nombre,$id);
        $this->juegosController->DisplayJuegos();
    }
    
    public function EliminarGenero($params = null) {
        $id = $params[':ID'];
        $this->model->BorrarGenero($id);
        $this->juegosController->DisplayJuegos();
    }



    
};