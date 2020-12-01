<?php

require_once('./libs/Smarty.class.php');
class LoginView{
  private $smarty;
  function __construct(){
    $this->smarty = new Smarty();
    $this->smarty->assign('basehref', BASE_URL);
  }
  
  public function DisplayLogin( $mensaje = "", $usr = 2){
    $this->smarty->display('./../templates/header.tpl');
    $this->smarty->assign('mensaje', $mensaje);
    $this->smarty->assign('usuario', $usr);
    $this->smarty->display('./../templates/login.tpl');
    $this->smarty->display('./../templates/footer.tpl');
  }


}
