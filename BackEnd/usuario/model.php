<?php


class UsuarioModel{

    private $db;

    function __construct()
    {
      $this->db = new PDO('mysql:host=localhost;'.'dbname=db_juegos;charset=utf8', 'root', '');
    }

  // DEVUELVE USUARIO DE LA BD
        public function GetUsuario($id){
          $sentencia = $this->db->prepare( "SELECT * FROM usuario WHERE id_usuario = ?");
          $sentencia->execute(array($id));
          $usuario = $sentencia->fetch(PDO::FETCH_OBJ);   
          return $usuario;
        }
        public function GetUsuarioPorNombre($nombre){
          $sentencia = $this->db->prepare( "SELECT * FROM usuario WHERE nombre = ?");
          $sentencia->execute(array($nombre));
          $usuario = $sentencia->fetch(PDO::FETCH_OBJ);   
          return $usuario;
        }

        function AddUsuario($nombre,$clave, $admin){
          $sentencia = $this->db->prepare("INSERT INTO usuario(nombre,clave, admin) VALUES(?,?,?)");
          $sentencia->execute(array($nombre,$clave, $admin));
        }

      public function GetUsuarios(){
          $sentencia = $this->db->prepare("SELECT * FROM usuario");
          $sentencia->execute();
          $usuario = $sentencia->fetchAll(PDO::FETCH_OBJ);
          return $usuario;
      }

      public function BorrarUser($id){
          $sentencia = $this->db->prepare("DELETE FROM usuario WHERE id_usuario=?");
          $sentencia->execute(array($id));
      }

    public function EditarUsuario($usuario,$clave, $admin, $id){
        $sentencia = $this->db->prepare("UPDATE usuario SET nombre=?,clave=?, admin = ? WHERE id_usuario=?");
        $sentencia->execute(array($usuario,$clave,$admin, $id));
    }
}