<?php
require_once "Model.php";
require_once "./BackEnd/seguridad/Seguridad.php";
require_once "./BackEnd/api/view.php";
class ComentariosApiController extends Seguridad {
    private $model;
    private $APIView;

    public function __construct() {
        parent::__construct();
        $this->model = new ComentarioModel();
        $this->APIView = new APIView();
    }

    public function GetComentarios($params = []) {
        $comentarios = $this->model->GetComentarioJuegos($params[':ID']);
        $this->APIView->response($comentarios, 200);
    }

    public function AgregarComentario($params = []){
        if (isset($params)){
            $usuario = $this->checkLoggedIn();
            if (true){ 
                $comentarios = $this->APIView->getData();
                $this->model->AgregarComentario($comentarios->idJuegos, $comentarios->idUsr, $comentarios->puntaje, $comentarios->comentario);
                $this->APIView->response("Comentario agregado", 200);
            }else{
                $this->APIView->response("No puede comentar", 404);
            }
        }
    }


    public function BorrarComentario($params = []){
        if (isset($params)){
            $id_comentario = $params[':ID'];
            $comentario = $this->model->getComentario($id_comentario);
            $usuario = $this->checkLoggedIn();
            if ($comentario){ 
                $this->model->BorrarComentario($id_comentario);
                $this->APIView->response("Comentario eliminado", 200);
            }else{
                $this->APIView->response("No existe el comentario", 404);
            }
        }
        else{
            $this->APIView->response("Falta parametro", 404);
        } 
    }

   
}