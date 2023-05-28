<?php include "modelo/conscliente.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Clientes</title>
  <?php include "recursosadmin/links.php"; ?>

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
            <h1 class="m-0">Clientes</h1>
          </div>
          <div class="col-sm-6 text-right">
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="bi bi-plus-circle-fill"></i> Insertar producto
              </button>

            </div><!-- /.col -->


        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <?php if(isset($_GET['success'])){ ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Se ha insertado correctamente</strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php } ?>
        <?php if(isset($_GET['modificado'])){ ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Se ha modificado correctamente</strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php } ?>
        <table class="table">
          <thead>
            <tr>
              <th>Id usuario</th>
              <th>Nombre usuario</th>
              <th>telefono </th>
              <th>Correo usuario</th>
              <th>nivel</th>
            </tr>
          </thead>
          <tbody>
            
              <?php 
               while($f = mysqli_fetch_array($res)){

               
               ?>
               <tr>
              <td><?php echo $f['id_cliente']; ?></td>
              <td><?php echo $f['nom_cliente']; ?></td>
              <td><?php echo $f['tel_cliente']; ?></td>
              <td><?php echo $f['correo_cliente']; ?></td>
              <td><?php echo $f['nivel']; ?></td>
              <td>
                <button class="btn btn-primary btn-small btnEditar" 
                data-id="<?php echo $f['id_cliente']; ?>"
                data-nombre="<?php echo $f['nom_cliente']; ?>" 
                data-telefono="<?php echo $f['tel_cliente']; ?>"
                data-correo="<?php echo $f['correo_cliente']; ?>"
                data-nivel="<?php echo $f['nivel']; ?>"
                data-bs-toggle="modal" data-bs-target="#modalEditar">
                  <i class="bi bi-pencil-square"></i>
                </button>
              </td>
              <td>
                <button class="btn btn-danger btn-small btnEliminar" 
                data-id="<?php echo $f['id_cliente']; ?>"
                data-bs-toggle="modal" data-bs-target="#modalEliminar">
                  <i class="bi bi-trash-fill"></i>
                </button>
              </td>
            </tr>
            <?php  } ?>
          </tbody>
        </table>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- Modal Insertar -->
   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <form action="modelo/insertarusuario.php" method="post">
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
                  <label for="telefono">Telefono: </label>
                  <input type="text" name="telefono"  id="telefono" placeholder="Telefono" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="correo">Correo: </label>
                  <input type="text" name="correo" placeholder="Correo" id="correo" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="contra">Contrase&ntilde;a: </label>
                  <input type="text" name="contra" placeholder="Contrase&ntilde;a" id="contra" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="nivel">Rango: </label>
                  <input type="text" name="nivel" placeholder="nivel" id="nivel" class="form-control" required>
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
            <form action="modelo/editarusuario.php" method="post" >
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
                  <label for="telEdit">Telefono: </label>
                  <input type="text" name="telefono"  id="telEdit" class="form-control" >
                </div>
                <div class="form-group">
                  <label for="CorreoEdit">Correo: </label>
                  <input type="text" name="Correo" id="CorreoEdit" class="form-control" >
                </div>
                <div class="form-group">
                  <label for="nivelEdit">Nivle: </label>
                  <input type="text" name="Nivel"  id="nivelEdit" class="form-control" >
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
      <script src="../js/eliminarusu.js"></script>
      <!-- Script para editar -->
      <script src="../js/editarusu.js"></script>
  <!-- Fin Script -->    
</body>
</html>
