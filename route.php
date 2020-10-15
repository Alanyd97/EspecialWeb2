<?php

//require_once "BackEnd/config/ConfigApp.php";
require_once "BackEnd/login/Controller.php";
require_once "BackEnd/juegos/Controller.php";
require_once "BackEnd/generos/Controller.php";
require_once "Router.php";

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
define("JUEGOS", 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]).'/juegos');
define("LOGIN", 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]).'/login');

 
$r = new Router();
// Login 
$r->addRoute("iniciarSesion","POST","LoginController","Login");
$r->addRoute("logOut","GET","LoginController","LogOut");
$r->addRoute("login","GET","LoginController", "DisplayLogin");
// Juegos
$r->addRoute("juegos", "GET", "JuegosController", "DisplayJuegos");
$r->addRoute("agregar", "POST", "JuegosController", "InsertarJuegos");
$r->addRoute("detalle/:ID","GET","JuegosController", "DisplayJuego");
$r->addRoute("filtro/:ID", "GET", "JuegosController", "FiltroJuegos");
$r->addRoute("editar/:ID", "POST", "JuegosController", "EditarJuego");
//Generos 
$r->addRoute("deleteG/:ID", "GET", "GenerosController", "EliminarGenero");
$r->addRoute("editarGenero/:ID", "POST", "GenerosController", "EditarGenero");
$r->addRoute("agregarGenero","POST","GenerosController","InsertarGeneros");


$r->setDefaultRoute("LoginController", "DisplayLogin");


$r->route($_GET['action'], $_SERVER['REQUEST_METHOD']);