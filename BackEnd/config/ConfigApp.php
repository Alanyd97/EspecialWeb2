<?php

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
define("JUEGOS", 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]).'/juegos');
 
class ConfigApp{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      #Login
      ''=> 'LoginController#DisplayLogin',
      'iniciarSesion'=>'LoginController#Login',
      #Juegos
      'juegos' => 'JuegosController#DisplayJuegos',
      'detalle'=>'JuegosController#DisplayJuego'
      


       


    ];

}

 ?>
