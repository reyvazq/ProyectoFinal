<?php include "modelo/consstatus.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Productos</title>
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
            <h1 class="m-0">Status</h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <?php 
        if(isset($_GET['error'])){ 
        ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>No se ha cambiado el status</strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        
        </div>
        <?php } ?>
        <?php if(isset($_GET['modificado'])){ ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Se ha modificado el status correctamente</strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php } ?>
        <table class="table">
          <thead>
            <tr>
              <th>Id venta</th>
              <th>Id cliente</th>
              <th>SubTotal</th>
              <th>Fecha</th>
              <th>Status</th>
              <th>Id pago</th>
            </tr>
          </thead>
          <tbody>
            
              <?php 
               while($f = mysqli_fetch_array($res)){

               
               ?>
               <tr>
              <td><?php echo $f['id']; ?></td>
              <td><?php echo $f['id_usuario']; ?></td>
              <td><?php echo $f['stotal']; ?></td>
              <td><?php echo $f['fecha']; ?></td>
              <td><?php echo $f['status']; ?></td>              
              <td><?php echo $f['id_pago']; ?></td>
              <td>
                <button class="btn btn-primary btn-small btnEditar" 
                data-id="<?php echo $f['id'] ?>"
                data-status="<?php echo $f['status'] ?>"
                data-bs-toggle="modal" data-bs-target="#modalEditar">
                  <i class="bi bi-pencil-square"></i> Modificar status
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



  <!-- Modal Editar -->
  <div class="modal fade" id="modalEditar" tabindex="-1" aria-labelledby="modalEditar" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <form action="modelo/editarstatus.php" method="post" enctype="multipart/form-data">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="modelEditar">Editar Status</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <input type="hidden" id="idEdit" name="id">
                <div class="form-group">
                  <label for="statusEdit">Status: </label>
                  <input type="text" name="status" placeholder="Nombre" id="statusEdit" class="form-control" >
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
      <!-- Script para editar -->
      <script src="../js/admineditarventas.js"></script>
  <!-- Fin Script -->    
</body>
</html>
