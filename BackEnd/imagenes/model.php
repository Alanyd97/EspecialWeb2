<?php

class imagenesmodel {

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_juegos;charset=utf8', 'root', '');
    }

    public function GetImagenes(){
        $sentencia = $this->db->prepare("SELECT * FROM imagenes ORDER BY imagen asc");
        $sentencia->execute();
        $imagenes = $sentencia->fetchAll(PDO::FETCH_OBJ);

        return $imagenes;
    } 
    
    public function GetImagen($id){
        $sentencia = $this->db->prepare( "SELECT * FROM imagenes WHERE id_juegosFK = ?");
        $sentencia->execute(array($id));
        $imagen = $sentencia->fetch(PDO::FETCH_OBJ);
        
        return $imagen;
    }

    public function InsertarImagenes($imagen = null,$id_juegosFK) {
        $pathImg = null;
        if ($imagen)
            $pathImg = $this->uploadImage($imagen);

        $sentencia = $this->db->prepare("INSERT INTO imagenes(imagen,id_juegosFK) VALUES(?,?)");
        $sentencia->execute(array($pathImg,$id_juegosFK));

    }

    private function uploadImage($image){
        $target = "img_tmp/" . uniqid() . "." . strtolower(pathinfo($image['name'], PATHINFO_EXTENSION));  
        move_uploaded_file($image['tmp_name'], $target);
        return $target;
    }
    
    public function BorrarImagen($id){
        $sentencia = $this->db->prepare("DELETE FROM imagenes WHERE id_juegosFK=?");
        $sentencia->execute(array($id));
    }
}