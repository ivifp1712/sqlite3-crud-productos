<?php

class ProductoController
{
    //atributos de clase
    
    //constructor
    function __construct(){

    }
    //getters and setters

    //resto de metodos - implementa de APIService(CRUD)
    function index()
    {
        require_once("Views/Producto/bienvenido.php");
    }
    function register()
    {
        require_once("Views/Producto/register.php");
    }
    function save()
    {
        if (isset($_POST["id"])) {
            $producto = new Producto($_POST["id"], $_POST["Nombre"], $_POST["Unidades"], $_POST["Precio"]);
        }else{
            $producto = new Producto(NULL, $_POST["Nombre"], $_POST["Unidades"], $_POST["Precio"]);
        }
        Producto::save($producto);
    }
    function show(){
        Producto::show();
    }
    function delete(){
        Producto::delete($_POST["id"]);
    }
    function showI(){
        Producto::showI($_POST["id"]);
    }
}// cierra clase
