<?php

require_once('./FrontEnd/libs/Smarty.class.php');
class LoginView{
  private $smarty;
  function __construct(){
    $this->smarty = new Smarty();
    $this->smarty->assign('basehref', BASE_URL);
  }
  
  public function DisplayLogin( $estado = ""){
    $this->smarty->assign('estado',$estado);
    $this->smarty->display('./FrontEnd/templates/header.tpl');
  }
  public function DisplayCambioClave( $estado = "", $usuario = null){ 
   
  }

}

 ?>