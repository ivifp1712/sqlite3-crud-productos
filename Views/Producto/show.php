<h2>Todos los productos</h2>
<table class="table table-strip">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Unidades</th>
            <th>Precio</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($listaProductos as$producto) {?>
        <tr>
            <td><?php echo $producto->getID(); ?></td>
            <td><?php echo $producto->getNombre(); ?></td>
            <td><?php echo $producto->getUnidades(); ?></td>
            <td><?php echo $producto->getPrecio(); ?></td>
            <td><form action="?controller=producto&&action=delete" method="post"><button type="submit" class="btn btn-danger">Eliminar</button> <input type="hidden" name="id" value="<?php echo $producto->getID(); ?>"></form>   </td>
            <td><form action="?controller=producto&&action=showI" method="post"><button type="submit" class="btn btn-success">Mostrar solo</button> <input type="hidden" name="id" value="<?php echo $producto->getID(); ?>"></form>   </td>
        </tr>
        <?php } ?>    
    </tbody>
    
    
    
</table>