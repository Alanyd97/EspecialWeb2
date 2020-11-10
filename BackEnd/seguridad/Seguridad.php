<?php

class Seguridad
{

  function __construct(){
  }

  function checkLoggedIn(){
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    if(isset($_SESSION['admin'])){
        return array($_SESSION['admin'], $_SESSION['id_usuario']);
    }else{
      return null;
    } 
  }

  function logout(){
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    session_start();
    session_destroy();
    header(LOGIN);
  }

}

 ?>