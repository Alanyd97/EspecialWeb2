<?php

require_once "View.php";
require_once "Model.php";

class JuegosController{
    private $view;
    private $modelUsuario;
  
    function __construct(){
      $this->view = new JuegosView();
      $this->modelUsuario = new UsuarioModel;
    }
    function DisplayJuegos(){
      $this->view->DisplayJuegos();
    }
}
