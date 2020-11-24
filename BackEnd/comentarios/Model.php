<?php
class ComentarioModel
{
  private $db;
  function __construct(){
    $this->db = new  PDO('mysql:host=localhost;'.'dbname=db_juegos;charset=utf8', 'root', '');
  }
  function AgregarComentario($id_juegos, $id_usuario, $puntaje, $comentario){
    $sentencia = $this->db->prepare("INSERT INTO comentario(id_juegos, id_usuario, puntaje, comentario) VALUES(?,?,?,?)");
    $sentencia->execute(array($id_juegos,$id_usuario,$puntaje, $comentario));
  }
 
  function GetComentarioJuegos($id_juegos){
    $sentencia = $this->db->prepare("SELECT * FROM comentario WHERE id_juegos = ? ORDER BY puntaje DESC");
    $sentencia->execute(array($id_juegos));
    return $sentencia->fetchAll(PDO::FETCH_OBJ);
  }
  
  function BorrarComentario($id_comentario){
    $sentencia = $this->db->prepare("DELETE FROM comentario WHERE id_comentario = ?");
    $sentencia->execute(array($id_comentario));
  }
  public function getComentario($id_comentario)
    {
        $query = $this->db->prepare("SELECT * FROM comentario WHERE id_comentario = ?");
        $query->execute(array($id_comentario));
        $comentario = $query->fetch(PDO::FETCH_OBJ);
        return $comentario;
    }
}
 ?>