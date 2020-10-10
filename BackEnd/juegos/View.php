<?php

require_once('./libs/Smarty.class.php');
class JuegosView{
    private $smarty;
    function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('basehref', BASE_URL);
    }

    function DisplayJuegos($juegos, $generos = null){
        $this->smarty->display('./../templates/header.tpl');
        $this->smarty->assign('lista_juegos',$juegos);
        $this->smarty->display('./../FrontEnd/templates/juegos.tpl');
        $this->smarty->display('./../templates/footer.tpl');
    }
   
    function DisplayJuego($juego, $requisito = null){
        $this->smarty->display('./../templates/header.tpl');
        $this->smarty->assign('juego', $juego);
        $this->smarty->assign('requisitos', $requisito);
        $this->smarty->display('./../FrontEnd/templates/detalle.tpl');
        $this->smarty->display('./../templates/footer.tpl');
    }
}
