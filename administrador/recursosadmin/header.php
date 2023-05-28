<?php 

$correouser = $_SESSION['admin'];
$sql = "SELECT nom_cliente, tel_cliente, correo_cliente, nivel FROM cliente WHERE correo_cliente = '$correouser'";
$resultado = $conexion->query($sql);
$row = $resultado->fetch_assoc();
?>  
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">


     


      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
     
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #2D5540;">
    <!-- Brand Logo -->
    <a class="brand-link">
      <img src="../img/logobod.png" alt="Logo bodeguita" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">BODEGUITA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       
        <div class="info">
          <a class="d-block"></b> <?php echo $row['nom_cliente']; ?></a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="admin.php" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                incio
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="Productos.php" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Productos
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="Ventas.php" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Ventas
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="Status.php" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Status
              </p>
            </a>
          </li>
          <?php if($row['nivel']=="admin"){?>
          <li class="nav-item">
            <a href="Cliente.php" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Usurarios
              </p>
            </a>
          </li>
          <?php }?>
          <li class="nav-item">
            <a href="../modelo/salir.php" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                cerrar sesi&oacute;n
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
