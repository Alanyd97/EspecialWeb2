<?php


class UsuarioModel{

  private $db;

  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost:3310;'.'dbname=db_juegos;charset=utf8', 'root', '');
  }

  // DEVUELVE USUARIO DE LA BD
  public function GetUsuario($nombre){
    $sentencia = $this->db->prepare( "SELECT * FROM usuario WHERE nombre = ?");
    $sentencia->execute(array($nombre));
    $usuario = $sentencia->fetch(PDO::FETCH_OBJ);   
    return $usuario;
  }
  function AddUsuario($nombre,$clave, $admin){
    $sentencia = $this->db->prepare("INSERT INTO usuario(nombre,clave, admin) VALUES(?,?,?)");
    $sentencia->execute(array($nombre,$clave, $admin));
  }
}