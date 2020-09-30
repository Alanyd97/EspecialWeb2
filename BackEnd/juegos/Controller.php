<?php

require_once "View.php";

class JuegosControler{
    private $view;
    private $modeUsuario;
  
    function __construct(){
      $this->view = new JuegosView();
    }
    function DisplayJuegos(){
      $this->view->DisplayJuegos();
    }
}
