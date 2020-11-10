<?php

require_once "BackEnd/comentarios/ComentariosApiController.php";
require_once "Router.php";


$router = new Router();

// arma la tabla de ruteo
$router->addRoute("comentarios/:ID", "DELETE", "ComentariosApiController", "BorrarComentario");
$router->addRoute("comentarios", "POST", "ComentariosApiController", "AgregarComentario");
$router->addRoute("comentarios/:ID", "GET", "ComentariosApiController", "GetComentarios");


$router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']);