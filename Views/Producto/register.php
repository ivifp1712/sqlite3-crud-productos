<form action="?controller=producto&&action=save" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre</label>
    <input type="text" class="form-control" name="Nombre" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Unidades</label>
    <input type="text" class="form-control" name="Unidades">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Precio</label>
    <input type="text" class="form-control" name="Precio">
  </div>
  <button type="submit" class="btn btn-primary">Añadir producto</button>
</form>