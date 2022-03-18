<?php

class Producto{
//atributos de clase
    private $id;
    private $nombre;
    private $unidades;
    private $precio;
//constructor
    function __construct($id, $nombre, $unidades, $precio) {
        $this->setId($id);
        $this->setNombre($nombre);
        $this->setUnidades($unidades);
        $this->setPrecio($precio);
    }
    
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }
    public function getUnidades()
    {
        return $this->unidades;
    }
    public function setUnidades($unidades)
    {
        $this->unidades = $unidades;

        return $this;
    }

    public function getPrecio()
    {
        return $this->precio;
    }
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    public static function save($producto)
    {
        $conexion = Db::getConnect();
        if ($producto->getId() != NULL) {
            $insertar = $conexion->prepare('UPDATE productos SET nombre = :nombre, unidades = :unidades, precio = :precio WHERE id = :id');
            $insertar->bindValue(':id',$producto->getId());
            $insertar->bindValue(':nombre',$producto->getNombre());
            $insertar->bindValue(':unidades', $producto->getUnidades());
            $insertar->bindValue(':precio',$producto->getPrecio());
            $insertar->execute();
        }else{
            $insertar = $conexion->prepare('INSERT INTO productos (nombre, unidades, precio) VALUES (:nombre,:unidades, :precio)');
            $insertar->bindValue(':nombre',$producto->getNombre());
            $insertar->bindValue(':unidades', $producto->getUnidades());
            $insertar->bindValue(':precio',$producto->getPrecio());
            $insertar->execute();
        }
       

        require_once('Views/Producto/update.php');
    }

    public static function show()
    {
        $conexion = Db::getConnect();

        $select = $conexion->query('SELECT * FROM productos');
        foreach($select->fetchAll() as $producto){
			$listaProductos[]=new Producto($producto['id'],$producto['nombre'],$producto['unidades'],$producto['precio']);
		}
		require_once('Views/Producto/show.php');
    }
    public static function delete($id)
    {
        $conexion = Db::getConnect();
        $select = $conexion->prepare('DELETE FROM productos
        WHERE id = :id');
        $select->bindValue(':id',$id);
        $select->execute();
        // echo($id);
		require_once('Views/Producto/update.php');
    }

    public static function showI($id)
    {
        $conexion = Db::getConnect();

        $select = $conexion->prepare('SELECT * FROM productos where id = :id');
        $select->bindValue(':id',$id);
        $select->execute();
        foreach($select->fetchAll() as $producto){
			$listaProductos[]=new Producto($producto['id'],$producto['nombre'],$producto['unidades'],$producto['precio']);
		}
		require_once('Views/Producto/showI.php');
    }
   
}