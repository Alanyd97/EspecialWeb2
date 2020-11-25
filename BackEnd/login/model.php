<?php


class UsuarioModel{

  private $db;

  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;'.'dbname=db_juegos;charset=utf8', 'root', '');
  }

  // DEVUELVE USUARIO DE LA BD
  public function GetUsuario($nombre){
    $sentencia = $this->db->prepare( "SELECT * FROM usuario WHERE nombre = ?");
    $sentencia->execute(array($nombre));
    $usuario = $sentencia->fetch(PDO::FETCH_OBJ);   
    return $usuario;
  }
  function AddUsuario($nombre,$clave, $admin){
    $sentencia = $this->db->prepare("INSERT INTO usuario(nombre,email,clave, admin) VALUES(?,?,?)");
    $sentencia->execute(array($nombre,$clave, $admin));
  }
  public function GetPassword($user){
    $sentencia = $this->db->prepare( "SELECT * FROM usuario WHERE nombre = ?");
    $sentencia->execute(array($user));
    
    $password = $sentencia->fetch(PDO::FETCH_OBJ);
    
    return $password;
}

public function GetUsuarios(){
    $sentencia = $this->db->prepare("SELECT * FROM usuario");
    $sentencia->execute();
    $usuario = $sentencia->fetchAll(PDO::FETCH_OBJ);

    return $usuario;
}


public function GetUsuariobyUser($user){
    $sentencia = $this->db->prepare("SELECT * FROM usuario WHERE nombre=?");
    $sentencia->execute(array($user));
    $usuario = $sentencia->fetch(PDO::FETCH_OBJ);

    return $usuario;
}

public function BorrarUser($id){
    $sentencia = $this->db->prepare("DELETE FROM usuario WHERE id_usuario=?");
    $sentencia->execute(array($id));
}

public function AgregarAdmin($usuario,$id){
    $sentencia = $this->db->prepare("UPDATE usuario SET admin=? WHERE id_usuario=?");
    $sentencia->execute(array($id,$usuario));
}
public function CambiarConstrasena($usuario,$email,$nuevacontra,$id){
    $hash = password_hash($nuevacontra, PASSWORD_DEFAULT);

    $sentencia = $this->db->prepare("UPDATE usuario SET nombre=?,email=?,clave=? WHERE id_usuario=?");
    $sentencia->execute(array($usuario,$email,$hash,$id));
}
}
}