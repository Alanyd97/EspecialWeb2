<?php

require_once "View.php";
require_once "Model.php";

class JuegosController{
    private $view;
    private $model;
  
    
    function __construct(){
      $this->view = new JuegosView();
      $this->model = new JuegosModel();
    }

    //Envia datos al view (Juegos + generos)
    function DisplayJuegos(){
      $juegos = $this->model->GetJuegos();
      $this->view->DisplayJuegos($juegos);
    }
    function DisplayJuego($id){
      $juego = $this->model->GetJuego($id);
      $requisitos = $this->model->GetRequisitos($juego->id_requisito);
      $this->view->DisplayJuego($juego, $requisitos);

    }
}
