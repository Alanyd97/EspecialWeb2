<?php

require_once('./libs/Smarty.class.php');
class JuegosView{
    private $smarty;
    function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('basehref', BASE_URL);
    }

    function DisplayJuegos($juegos, $generos = null, $usr = 2){
        $this->smarty->display('./../templates/header.tpl');
        $this->smarty->assign('basehref', JUEGOS);
        $this->smarty->assign('lista_juegos',$juegos);
        $this->smarty->assign('usuario', $usr);
        $this->smarty->assign('lista_generos',$generos);
        $this->smarty->display('./../templates/juegos.tpl');
        $this->smarty->display('./../templates/footer.tpl');
    }
   
    function DisplayJuego($juego, $requisito = null, $usr = 2, $mensaje = ""){
        $this->smarty->display('./../templates/header.tpl');
        $this->smarty->assign('basehref', BASE_URL);
        $this->smarty->assign('juego', $juego);
        $this->smarty->assign('usuario', $usr);
        $this->smarty->assign('mensaje', $mensaje);
        $this->smarty->assign('requisitos', $requisito);
        $this->smarty->display('./../templates/juegos/detalle.tpl');
        $this->smarty->display('./../templates/footer.tpl');
    }
}
