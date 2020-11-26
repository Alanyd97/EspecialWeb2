<?php

    class registrarmodel {

        private $db;

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=db_juegos;charset=utf8', 'root', '');
        }

        public function Registrar ($usuario,$mail,$password){
            $hash = password_hash($password, PASSWORD_DEFAULT);
            
                $sentencia = $this->db->prepare("INSERT INTO usuario(nombre,email,clave) VALUES(?,?,?)");
                $sentencia->execute(array($usuario,$mail,$hash));
            }
    }   