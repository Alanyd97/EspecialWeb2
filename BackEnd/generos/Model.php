<?php

class generosmodel {

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_juegos;charset=utf8', 'root', '');
    }
    public function GetGenero($id){
        $sentencia = $this->db->prepare( "SELECT * FROM generos WHERE id_generos = ?");
        $sentencia->execute(array($id));
        $genero = $sentencia->fetch(PDO::FETCH_OBJ);
        
        return $genero;
    }

    public function GetGeneros(){
        $sentencia = $this->db->prepare("SELECT * FROM generos ORDER BY genero asc");
        $sentencia->execute();
        $generos = $sentencia->fetchAll(PDO::FETCH_OBJ);

        return $generos;
    }
    public function InsertarGeneros($nombres,$subgeneros){

        $sentencia = $this->db->prepare("INSERT INTO generos(nombres,subgeneros) VALUES(?,?)");
        $sentencia->execute(array($nombres,$subgeneros));
    }
    public function BorrarGenero($id){
        $sentencia = $this->db->prepare("DELETE FROM generos WHERE id_generos=?");
        $sentencia->execute(array($id));
    }
    public function EditarGeneros($id,$nombres,$subgeneros){
        $sentencia = $this->db->prepare("UPDATE generos SET nombres=?,subgeneros=? WHERE id_generos=?");
        $sentencia->execute(array($id,$nombres,$subgeneros));
    }
}