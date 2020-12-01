<?php 
require_once('./libs/Smarty.class.php');
    
class UsuarioView{

        private $smarty;
        function __construct(){
            $this->smarty = new Smarty();
            $this->smarty->assign('basehref', BASE_URL);
        }

        public function DisplayRegistro($mensaje = "", $usr = 2){
            $this->smarty->display('./../templates/header.tpl');
            $this->smarty->assign('basehref', JUEGOS);
            $this->smarty->assign('usuario', $usr);
            $this->smarty->display('./../templates/registro.tpl');
        }
        
        public function showError($msgError) {
        }
}