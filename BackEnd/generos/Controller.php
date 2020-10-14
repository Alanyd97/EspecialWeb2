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
    
    public function EliminarGenero(){
        $nose = $_POST['eliminar'];
        var_dump($nose);
        // $this->JuegosController->DisplayJuegos();
    }
};