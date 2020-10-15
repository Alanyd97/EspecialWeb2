<?php

require_once('libs/Smarty.class.php');
class GenerosView {
    private $smarty;

    function __construct(){

        $this->smarty = new Smarty();
        $this->smarty->assign('BASE_URL',BASE_URL);

      
    }
    public function ShowGenero($genero,$id) {
        $this->smarty->assign('genero', $genero);
        $this->smarty->assign('titulo',"genero");
        $this->smarty->assign('admin', $id);
        $this->smarty->display('./../templates/login.tpl');
    }

}