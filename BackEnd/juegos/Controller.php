|<?php
require_once("./juegos/juegosmodel.php");
require_once("./juegos/view.php");
require_once("./generos/generosmodel.php");

class juegoscontroller {

private $model;
private $view;
private $generomodel;


function __construct(){
    $this->model = new JuegosModel();
    $this->view = new JuegosView();
    $this->generomodel = new generosmodel();

}
public function checkLogIn(){
    session_start();

    if ( isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 5000)) {
        session_destroy(); 
        header("Location: " . URL_LOGOUT);
        die();
    } 
    $_SESSION['LAST_ACTIVITY'] = time();
    
}
public function checkUser (){
    if (isset ($_SESSION['administrador'])){
        $id_usuario = $_SESSION['administrador'];
    }else{
        $id_usuario = -1;
    }
    return $id_usuario;
}

public function Getjuegos(){
    $this->checkLogIn();
    $juegoscongenero = $this->getjuegosConGenero();
    
    $id = $this->checkUser();
    $generos = $this->generomodel->GetGeneros();

    $this->view->Displayjuegos($juegoscongenero,$id,$generos);
}

public function Getjuego($params = null){
    $this->checkLogIn();
    $id_juegos = $params[':ID'];
    $juego = $this->model->Getjuego($id_juegos);
    $genero = $this->generomodel->GetGenero($juego->id_generosFK);

    $id = $this->checkUser();
    $juegocontodo = array();
        $p['genero']= $genero->genero;
        $p['id_generos']=$genero->id_generos;
        $p['id_juegos'] = $juego->id_juegos;
        $p['titulo'] = $juego->titulo;
        $p['sinopsis'] = $juego->sinopsis;
        $p['riquisitos'] = $juego->sinopsis;
        array_push($juegocontodo, $p);
    
    $this->view->Showjuego($juegocontodo,$id);
}


public function MostrarEditar($params = null){
    $this->checkLogIn();
    $id_juego = $params[':ID'];
    $juego = $this->model->Getjuego($id_juegos);
    $generos = $this->generomodel->GetGeneros();

    $id = $this->checkUser();

    $this->view->MostrarEditar($juego,$id,$generos);

}

function getjuegosConGenero() {

    $juegos = $this->model->Getjuegos();
    $generos = $this->generomodel->GetGeneros();      
    
    $juegoscongenero = array();
    foreach($generos as $genero) {
        $p['nombres']= $genero->nombres;
        $p['subgeneros']= $genero->subgeneros;
        $p['id_generos']=$genero->id_genero;
        foreach ($juegos as $juego){
            if ($genero->id_genero == $juego ->id_generoFK){
                $p['id_juegos'] = $juego->id_juegos;
                $p['titulo'] = $juego->titulo;
                $p['sinopsis'] = $juego->sinopsis;
                $p['riquisitos'] = $juego->sinopsis;
                }
                array_push($juegoscongenero, $p);
            }
        }
    }
    return $juegoscongenero;
}

public function Insertarjuegos(){
    $this->model->Insertarjuegos($_POST['id:'],$_POST['titulo'],$_POST['sinopsis'],$_POST['riquisitos'],$_POST['id_generoFK'] );
    header("Location: " . BASE_URL);
}

public function Borrarjuegos($params = null) {
    $id = $params[':ID'];
    $this->model->Borrarjuegos($id);
    header("Location: " . BASE_URL);
}
public function Editarjuegos(){
    $this->checkLogIn();
    $this->model->Editarjuegos($_POST['id_juegos'].$_POST['titulo'],$_POST['sinopsis'],$_POST['riquisitos'],$_POST['id_generoFK']);
    
    header("Location: " . BASE_URL);
}
}