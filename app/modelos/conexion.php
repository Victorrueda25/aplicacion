<?php

    class Conexion{

        static public function conectar(){

            $link = new PDO("mysql:host=localhost;port=3306;dbname=gestionUsuarios", "root", ""); 

            return $link;

        }

    }