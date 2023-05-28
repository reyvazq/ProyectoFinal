<?php $num = null;
$nom = $_FILES['imagen'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="prueba.php" method="post" enctype="multipart/form-data">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Insertar Datos</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label for="nombre">Nombre: </label>
                <input type="text" name="nombre" placeholder="Nombre" id="nombre" class="form-control">
              </div>
              <div class="form-group">
                <input type="file" name="imagen" id="img">
              </div>
              <div class="form-group">
                <label for="descripcion">Descripcion: </label>
                <input type="text" name="descripcion" placeholder="Descripcion" id="descripcion" class="form-control">
              </div>
              <div class="form-group">
                <label for="precio">Precio: </label>
                <input type="text" name="precio" placeholder="Precio" id="precio" class="form-control">
              </div>
              <div class="form-group">
                <label for="inventario">Inventario: </label>
                <input type="text" name="inventario" placeholder="Inventario" id="inventario" class="form-control">
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" value class="btn btn-primary">Guardar</button>
            </div>
          </form>
          <?php echo "direccion".$_FILES['imagen']['name']; ?>
    
</body>
</html>