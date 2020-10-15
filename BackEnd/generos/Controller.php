<?php
require_once("View.php");
require_once("Model.php");
require_once("./BackEnd/juegos/Controller.php");

class GenerosController {

    private $model;
    private $view;
    private $juegosController;

    function __construct(){
        $this->view = new GenerosView();
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
         $this->model->InsertarGeneros($_POST['genero']);
         header("Location: ".BASE_URL);
        
    }
    public function EditarGenero(){
       
        $this->model->EditarGeneros($_POST['nombres'],$_POST['id_generos']);
        header("Location: " . BASE_URL."juegos");
    }
    
    public function EliminarGenero($params = null) {
            $id = $params[':ID'];
            $this->model->BorrarGenero($id);
            header("Location: " . BASE_URL."juegos");
        }



    
};