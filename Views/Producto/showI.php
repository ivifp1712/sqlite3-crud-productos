
<form action="?controller=producto&&action=save" method="POST">
    <input type="hidden" value="<?php echo $listaProductos[0]->getID()?>" placeholder="<?php echo $listaProductos[0]->getID();?>" name="id">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre</label>
    <input type="text" class="form-control" name="Nombre" value="<?php echo $listaProductos[0]->getNombre()?>" placeholder="<?php echo $listaProductos[0]->getNombre();?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Unidades</label>
    <input type="text" class="form-control" name="Unidades"  value="<?php echo $listaProductos[0]->getUnidades()?>" placeholder="<?php echo $listaProductos[0]->getUnidades();?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Precio</label>
    <input type="text" class="form-control" name="Precio" value="<?php echo $listaProductos[0]->getPrecio();?>" placeholder="<?php echo $listaProductos[0]->getPrecio();?>">
  </div>
  <button type="submit" class="btn btn-primary">Añadir producto</button>
</form>