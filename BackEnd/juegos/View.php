<?php

require_once('./libs/Smarty.class.php');
class JuegosView{
    private $smarty;
    function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('basehref', BASE_URL);
    }
    function DisplayJuegos(){
    $this->smarty->display('./../templates/header.tpl');
    $this->smarty->assign('mensaje', 'DALEE');
    $this->smarty->display('./../FrontEnd/templates/login.tpl');
    $this->smarty->display('./../templates/footer.tpl');
    }
}
