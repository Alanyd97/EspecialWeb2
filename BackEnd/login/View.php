<?php

require_once('./libs/Smarty.class.php');
class LoginView{
  private $smarty;
  function __construct(){
    $this->smarty = new Smarty();
    $this->smarty->assign('basehref', BASE_URL);
  }
  
  public function DisplayLogin( $estado = ""){
    $this->smarty->display('./../templates/header.tpl');
    $this->smarty->display('./../FrontEnd/templates/login.tpl');
    $this->smarty->display('./../templates/footer.tpl');
  }
  public function DisplayCambioClave( $estado = "", $usuario = null){ 
   
  }

}

 ?>