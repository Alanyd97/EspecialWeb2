<?php

class JuegosModel {

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost:3310;'.'dbname=db_juegos;charset=utf8', 'root', '');
    } 

	public function GetJuegos(){
        $sentencia = $this->db->prepare( "SELECT * FROM juegos");
        $sentencia->execute();
        $juegos = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $juegos;
    }
    public function FiltroJuegos($id){
        $sentencia = $this->db->prepare( "SELECT * FROM juegos WHERE id_generos = ?");
        $sentencia->execute(array($id));
        $juegos = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $juegos;
    }

    public function GetJuego($id){
        $sentencia = $this->db->prepare( "SELECT * FROM juegos WHERE id_juegos = ?");
        $sentencia->execute(array($id));
        $juego = $sentencia->fetch(PDO::FETCH_OBJ);
        return $juego;
    }

    public function GetRequisitos($id){
        $sentencia = $this->db->prepare("SELECT * FROM requisitos where id_requisito = ?");
        $sentencia->execute(array($id));
        return  $sentencia->fetch(PDO::FETCH_OBJ);
    }

    public function EditarJuegos($titulo,$sinopsis,$precio, $id){
        $sentencia = $this->db->prepare("UPDATE juegos SET titulo=?, sinopsis=?, precio=? WHERE id_juegos=?");
        $sentencia->execute(array($titulo,$sinopsis,$precio, $id));
    }

    public function InsertarJuegos($titulo,$sinopsis,$id_requisito,$precio,$id_generos){
        $sentencia = $this->db->prepare("INSERT INTO juegos(titulo, sinopsis, id_requisito, precio, id_generos) VALUES(?,?,?,?,?)");
        $sentencia->execute(array($titulo,$sinopsis,$id_requisito,$precio,$id_generos));
    }

    public function BorrarJuegos($id){
        $sentencia = $this->db->prepare("DELETE FROM juegos WHERE id_juegos=?");
        $sentencia->execute(array($id));
    }
}