|<?php
require_once "Model.php";
require_once "View.php";
require_once "./BackEnd/generos/Model.php";
require_once "./BackEnd/seguridad/Seguridad.php";
class JuegosController extends Seguridad{
    private $view;
    private $model;
    private $generosModel;
  
    
    function __construct(){
      $this->view = new JuegosView();
      $this->model = new JuegosModel();
      $this->generosModel = new GenerosModel();
    }

    //Envia datos al view (Juegos + generos)
    public function DisplayJuegos(){
      $juegos = $this->model->GetJuegos();
      $generos = $this->generosModel->GetGeneros();
      $usuario = $this-> checkLoggedIn();
      if ($usuario != null){ 
          $this->view->DisplayJuegos($juegos, $generos, $usuario[0]);
      }else{
        $this->view->DisplayJuegos($juegos, $generos);
      }
     
    }
    public function InsertarJuegos(){
      $usuario = $this-> checkLoggedIn();
      if ($usuario != null){ 
        $titulo = $_POST['tituloAgregar'];
        $sinopsis = $_POST['sinopsisAgregar'];
        $precio = $_POST['precioAgregar'];
        $genero = $_POST['genero'];
        if (isset($titulo) && isset($sinopsis) && isset($precio) && isset($genero)){
          $this->model->InsertarJuegos($titulo, $sinopsis, 2, $precio, $genero);
          $this->DisplayJuegos();
        }
      }else{
          $this->DisplayJuegos();
      }
  }
    
    public function FiltroJuegos($id){
      $idGenero = $id[':ID'];
      $juegos = $this->model->FiltroJuegos($idGenero);
      $generos = $this->generosModel->GetGeneros();
      $usuario = $this-> checkLoggedIn();
      if ($usuario != null){ 
          $this->view->DisplayJuegos($juegos, $generos, $usuario[0]);
      }else{
        $this->view->DisplayJuegos($juegos, $generos);
      }
    }
    
    public function DisplayJuego($id, $mensaje = ''){
      $idJuego = $id[':ID'];
      $juego = $this->model->GetJuego($idJuego);
      $requisitos = $this->model->GetRequisitos($juego->id_requisito);
      $usuario = $this-> checkLoggedIn();
      if ($usuario != null){ 
        $this->view->DisplayJuego($juego, $requisitos, $usuario[0], $usuario[1], $mensaje);
      }else{
        $this->view->DisplayJuego($juego, $requisitos);
      }

    }

    public function EditarJuego($id){
      $usuario = $this-> checkLoggedIn();
      if ($usuario != null){ 
        $titulo = $_POST['titulo'];
        $precio = $_POST['precio'];
        $sinopsis = $_POST['sinopsis'];
        if (isset($titulo) && isset($sinopsis) && isset($precio)){
          $this->model->EditarJuegos($titulo, $sinopsis, $precio, $id[':ID']);
          $this->DisplayJuego($id);
        }else{
          $this->DisplayJuego($id, "Ingresar todos los campos antes de guardar");
        }
      }else{
          $this->view->DisplayJuego($juego, $requisitos);
      }
    }

    public function EliminarJuego(){
      $usuario = $this-> checkLoggedIn();
      if ($usuario != null){ 
          $id = $_POST['juego'];
          $this->model->BorrarJuegos($id);
          $this->DisplayJuegos();
      }else{
        $this->DisplayJuegos();
      }
    }
}