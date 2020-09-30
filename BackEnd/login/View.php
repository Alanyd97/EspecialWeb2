<?php

require_once('./libs/Smarty.class.php');
class LoginView{
  private $smarty;
  function __construct(){
    $this->smarty = new Smarty();
    $this->smarty->assign('basehref', BASE_URL);
  }
  
  public function DisplayLogin( $mensaje = ""){
    $this->smarty->display('./../templates/header.tpl');
    $this->smarty->assign('mensaje', $mensaje);
    $this->smarty->display('./../FrontEnd/templates/login.tpl');
    $this->smarty->display('./../templates/footer.tpl');
  }


}

 ?>