<?php

class JuegosModel {

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_juegos;charset=utf8', 'root', '');
    } 

	public function GetJuegos(){
        $sentencia = $this->db->prepare( "SELECT * FROM juegos");
        $sentencia->execute();
        $juegos = $sentencia->fetchAll(PDO::FETCH_OBJ);
        
        return $juegos;
    }

    public function GetJuego($id){
        $sentencia = $this->db->prepare( "SELECT * FROM juegos WHERE id_juegos = ?");
        $sentencia->execute(array($id));
        $juego = $sentencia->fetch(PDO::FETCH_OBJ);
        
        return $juego;
    }

    public function EditarJuegos($titulo,$sinopsis,$requisitos,$precio,$id_genero,$id){
        $sentencia = $this->db->prepare("UPDATE juegos SET titulo=?, sinopsis=?, requisitos=?, precio=?, id_generoFK=? WHERE id_juegos=?");
        $sentencia->execute(array($titulo,$sinopsis,$requisitos,$precio,$id_genero,$id));
    }

    public function InsertarJuegos($id,$titulo,$sinopsis,$requisitos,$precio,$id_genero){

        $sentencia = $this->db->prepare("INSERT INTO juegos(id_juegos, titulo, sinopsis, requisitos, precio, id_generoFK) VALUES(?,?,?,?,?,?)");
        $sentencia->execute(array($id,$titulo,$sinopsis,$requisitos,$precio,$id_genero));
    }

    public function BorrarJuegos($id){
        $sentencia = $this->db->prepare("DELETE FROM juegos WHERE id_juegos=?");
        $sentencia->execute(array($id));
    }
}