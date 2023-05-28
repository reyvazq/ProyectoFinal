<?php include "modelo/consventas.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ventas</title>

<?php include "recursosadmin/links.php";?>
</head>
<body class="hold-thansition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../img/logobod.png" alt="Logo bodeguita" height="60" width="60">
  </div>

  <?php include "recursosadmin/header.php"; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Ventas</h1>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


        <div class="accordion" id="accordionExample">
          <?php while($f=mysqli_fetch_array($res)){?>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $f['id'];?>" aria-expanded="false" aria-controls="collapse<?php echo $f['id'];?>">
                <?php echo $f['fecha']."-".$f['nom_cliente'];?>
              </button>
            </h2>
            <div id="collapse<?php echo $f['id'];?>" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Nombre del cliente: <?php echo $f['nom_cliente'];?></p>
                <p>Telefono del cliente: <?php echo $f['tel_cliente'];?></p>
                <p>Correo del cliente: <?php echo $f['correo_cliente'];?></p>
                <p>Status: <b><?php echo $f['status'];?></b></p>
                <p class="h6">Datos del envio</p>
                <?php 
                  $respuesta=$conexion->query("SELECT * FROM envios WHERE id_venta=".$f['id'])or die($conexion->error);
                  $fila=mysqli_fetch_array($respuesta);
                ?>
                <hr>
                <p>id envio: <?php echo $fila[0];?></p>
                <p>Nombre: <?php echo $fila[1];?></p>
                <p>Apellido: <?php echo $fila[2];?></p>
                <p>Correo: <?php echo $fila[3];?></p>
                <p>Telefono: <?php echo $fila[4];?></p>
                <p>Dirreccion: <?php echo $fila[5];?></p>
                <p>Id de la venta: <?php echo $fila[6];?></p>
                <table class="table">
                  <thead>
                      <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                        <?php 
                        $re=$conexion->query("SELECT productos_venta.*, productos.nombre
                        FROM productos_venta INNER JOIN productos on productos_venta.id_producto = productos.id
                        WHERE productos_venta.id_producto=productos.id ")or die($conexion->error);
                        while($f2 = mysqli_fetch_array($re)){

                        
                        ?>
                        <tr>
                        <td><?php echo $f['id']; ?></td>
                        <td><?php echo $f2['nombre']; ?></td>
                        <td><?php echo $f2['precio']; ?></td>
                        <td>$<?php echo $f2['cantidad']; ?></td>
                        <td>$<?php echo $f2['total']; ?></td>
                      </tr>
                      <?php  } ?>
                    </tbody>
                </table>
              </div>
            </div>
          </div>
          <?php }?>
        </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- Modal Insertar -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <form action="modelo/insertarproducto.php" method="post" enctype="multipart/form-data">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Insertar Datos</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label for="nombre">Nombre: </label>
                  <input type="text" name="nombre" placeholder="Nombre" id="nombre" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="imgn">Imagen: </label>
                  <input type="file" name="imgn"  id="imgn" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="descripcion">Descripcion: </label>
                  <input type="text" name="descripcion" placeholder="Descripcion" id="descripcion" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="precio">Precio: </label>
                  <input type="number" name="precio" placeholder="Precio" id="precio" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="inventario">Inventario: </label>
                  <input type="number" name="inventario" placeholder="Inventario" id="inventario" class="form-control" required>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" value="enviar" class="btn btn-primary">Guardar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
  </div>

  <!-- Modal Eliminar -->
  <div class="modal fade" id="modalEliminar" tabindex="-1" aria-labelledby="modalEliminar" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="modalEliminar">Eliminar Producto</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              ¿Desea eliminar producto?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              <button type="submit" value="enviar" class="btn btn-danger eliminar" data-bs-dismiss="modal">Eliminar</button>
            </div>
        </div>
      </div>
    </div> 
  </div>

  <!-- Modal Editar -->
  <div class="modal fade" id="modalEditar" tabindex="-1" aria-labelledby="modalEditar" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <form action="modelo/editarproducto.php" method="post" enctype="multipart/form-data">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="modelEditar">Editar Datos</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <input type="hidden" id="idEdit" name="id">
                <div class="form-group">
                  <label for="nombreEdit">Nombre: </label>
                  <input type="text" name="nombre" placeholder="Nombre" id="nombreEdit" class="form-control" >
                </div>
                <div class="form-group">
                  <label for="imgn">Imagen: </label>
                  <input type="file" name="imgn"  id="imgn" class="form-control" >
                </div>
                <div class="form-group">
                  <label for="descripcionEdit">Descripcion: </label>
                  <input type="text" name="descripcion" placeholder="Descripcion" id="descripcionEdit" class="form-control" >
                </div>
                <div class="form-group">
                  <label for="precioEdit">Precio: </label>
                  <input type="number" name="precio" placeholder="Precio" id="precioEdit" class="form-control" >
                </div>
                <div class="form-group">
                  <label for="inventarioEdit">Inventario: </label>
                  <input type="number" name="inventario" placeholder="Inventario" id="inventarioEdit" class="form-control" >
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" value="enviar" class="btn btn-primary editar">Guardar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
  </div>

  <?php include "recursosadmin/footer.php"; ?>
  <!-- Script -->              
      <!-- Jquery -->
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

      <!-- jQuery UI 1.11.4 -->
      <script src="./dashboard/plugins/jquery-ui/jquery-ui.min.js"></script>
      <!-- Resolve conflict in jQuery UI tooltip with Bootsthap tooltip -->
      <script>
        $.widget.bridge('uibutton', $.ui.button)
      </script>

      <!-- ChartJS -->
      <script src="./dashboard/plugins/chart.js/Chart.min.js"></script>
      <!-- Sparkline -->
      <script src="./dashboard/plugins/sparklines/sparkline.js"></script>

      <!-- jQuery Knob Chart -->
      <script src="./dashboard/plugins/jquery-knob/jquery.knob.min.js"></script>
      <!-- daterangepicker -->
      <script src="./dashboard/plugins/moment/moment.min.js"></script>
      <script src="./dashboard/plugins/daterangepicker/daterangepicker.js"></script>
      <!-- Summernote -->
      <script src="./dashboard/plugins/summernote/summernote-bs4.min.js"></script>
      <!-- overlayScrollbars -->
      <script src="./dashboard/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
      <!-- AdminLTE App -->
      <script src="./dashboard/dist/js/adminlte.js"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="./dashboard/dist/js/demo.js"></script>
      <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
      <script src="./dashboard/dist/js/pages/dashboard.js"></script>
      <!-- Script para eliminar -->
      <script src="../js/admineliminar.js"></script>
      <!-- Script para editar -->
      <script src="../js/admineditar.js"></script>
  <!-- Fin Script -->    
</body>
</html>
