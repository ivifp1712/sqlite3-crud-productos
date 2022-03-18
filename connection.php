<?php
class Db{
    function __construct()
    {

    }
    public static function getConnect()
    {   
        try {
            $conexion = new PDO('pgsql:host=localhost;port=5432;dbname=test;user=postgres;password=curso'); // cambiar la fuente de datos
            return $conexion;
        } catch (Exception $e) {
            echo "Mensaje de error: " . $e->getMessage();
        }
        
    }
}