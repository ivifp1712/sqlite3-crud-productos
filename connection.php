<?php
class Db{
    function __construct()
    {

    }
    public static function getConnect()
    {   
        try {
            $conexion = new PDO('sqlite:test.sqlite3'); // cambiar la fuente de datos
            return $conexion;
        } catch (Exception $e) {
            echo "Mensaje de error: " . $e->getMessage();
        }
        
    }
}