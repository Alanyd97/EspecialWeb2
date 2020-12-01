<?php
require_once("./juegos/view.php");
require_once("./model.php");

class imagenescontroller {

    private $model;
    private $view;

    function __construct(){
        $this->model = new imagenesmodel();
        $this->view = new JuegosView();
    }
   
    public function InsertarImagenes(){
        if($_FILES['input_name']['type'] == "image/jpg" || $_FILES['input_name']['type'] == "image/jpeg" || $_FILES['input_name']['type'] == "image/png" ) {
            $imagenes = $this->model->GetImagenes();
            foreach ($imagenes as $imagen){
                if($_POST['id_juegosFK'] != $imagen->id_juegosFK){
                    $repetida = false;
                }else {
                    $repetida = true;
                    $error = 'Ya existe imagen para este juego';
                    $this->view->showError($error);
                }
            }
            if ($repetida == false){
            $this->model->InsertarImagenes($_FILES['input_name'], $_POST['id_juegosFK']);
            header("Location: " . BASE_URL);
            }
        }
        else {
            $error = 'El tipo de archivo no esta permitido';
            $this->view->showError($error);
        }
    }
}