|<?php
require_once "Model.php";
require_once "View.php";
require_once "./BackEnd/generos/Model.php";
class JuegosController{
    private $view;
    private $model;
    private $generosModel;
  
    
    function __construct(){
      $this->view = new JuegosView();
      $this->model = new JuegosModel();
      $this->generosModel = new GenerosModel();
    }

    //Envia datos al view (Juegos + generos)
    function DisplayJuegos(){
      $juegos = $this->model->GetJuegos();
      $generos = $this->generosModel->GetGeneros();
      $this->view->DisplayJuegos($juegos, $generos);
    }
    function FiltroJuegos($id){
      $juegos = $this->model->FiltroJuegos($id[0]);
      $generos = $this->generosModel->GetGeneros();
      $this->view->DisplayJuegos($juegos, $generos);
    }
    
    function DisplayJuego($id){
      $juego = $this->model->GetJuego($id);
      $requisitos = $this->model->GetRequisitos($juego->id_requisito);
      $this->view->DisplayJuego($juego, $requisitos);

    }

}