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
      session_start();
      if (isset($_SESSION['admin'])){
        $usuario = $_SESSION['admin'];
        $this->view->DisplayJuegos($juegos, $generos, $usuario);
      }else{
        $this->view->DisplayJuegos($juegos, $generos);
      }
     
    }
    
    function FiltroJuegos($id){
      session_start();
      $idGenero = $id[':ID'];
      $juegos = $this->model->FiltroJuegos($idGenero);
      $generos = $this->generosModel->GetGeneros();
      if (isset($_SESSION['admin'])){
        $usuario = $_SESSION['admin'];
        $this->view->DisplayJuegos($juegos, $generos, $usuario);
      }else{
        $this->view->DisplayJuegos($juegos, $generos);
      }
    }
    
    function DisplayJuego($id, $mensaje = ''){
      $idJuego = $id[':ID'];
      $juego = $this->model->GetJuego($idJuego);
      $requisitos = $this->model->GetRequisitos($juego->id_requisito);
      session_start();
      if (isset($_SESSION['admin'])){
        $usuario = $_SESSION['admin'];
        $this->view->DisplayJuego($juego, $requisitos, $usuario, $mensaje);
      }else{
        $this->view->DisplayJuego($juego, $requisitos);
      }

    }

    function EditarJuego($id){

      if (isset($_POST['titulo'])){

        $titulo = $_POST['titulo'];
        $precio = $_POST['precio'];
        $sinopsis = $_POST['sinopsis'];
        if ($titulo != '' && $precio != '' && $sinopsis != ''){
          $this->model->EditarJuegos($titulo, $sinopsis, $precio, $id[':ID']);
          $this->DisplayJuego($id);
        }else{
          $this->DisplayJuego($id, "Ingresar todos los campos antes de guardar");
        }
      }
    }

}