<?php

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
define("JUEGOS", 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]).'/juegos');
 
class ConfigApp{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      #Login
      ''=> 'LoginController#DisplayLogin',
      'inicio'=> 'LoginController#DisplayLogin',
      'iniciarSesion'=>'LoginController#Login',
      'logOut' => 'LoginController#LogOut',
      #Juegos
      'juegos' => 'JuegosController#DisplayJuegos',
      'filtro' => 'JuegosController#FiltroJuegos',
      'detalle'=>'JuegosController#DisplayJuego',
      'editar'=>'JuegosController#EditarJuego'

      


       


    ];

}

 ?>
