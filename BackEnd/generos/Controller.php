<?php
require_once("View.php");
require_once("Model.php");

class GenerosController {

    private $model;
    private $view;

    function __construct(){
        $this->view = new GenerosView();
        $this->model = new GenerosModel();
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
    
};