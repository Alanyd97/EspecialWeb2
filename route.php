<?php

//require_once "BackEnd/config/ConfigApp.php";
require_once "BackEnd/login/Controller.php";
require_once "BackEnd/juegos/Controller.php";
require_once "BackEnd/generos/Controller.php";
require_once "Router.php";

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
define("JUEGOS", 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]).'/juegos');

 
$r = new Router();

$r->addRoute("inicio","GET","LoginController","DisplayLogin");
$r->addRoute("iniciarSesion","GET","LoginController","Login");
$r->addRoute("logOut","GET","LoginController","DisplayLogin");
$r->addRoute("juegos", "GET", "JuegosController", "DisplayJuegos");
$r->addRoute("detalle/:ID","GET","JuegosController", "DisplayJuego");
$r->addRoute("filtro/:ID", "GET", "JuegosController", "FiltroJuegos");


$r->setDefaultRoute("LoginController", "Login");

$r->route($_GET['action'], $_SERVER['REQUEST_METHOD']);