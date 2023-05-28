<?php
    include "modelo/session.php";
  if(isset($_GET['id'])){

  $conexion_obj = new conexion();
  $conexion = $conexion_obj->conectar();
  $res = $conexion->query("select * from productos where id=".$_GET['id'])or die($conexion->error);
  if(mysqli_num_rows($res) > 0){
    $fila = mysqli_fetch_array($res);
  }else{
    header("location: productos.php");  
  }
  }else{
    header("location: productos.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "recursos/encabezado.php";?>
</head>
<body>
    <?php include ("recursos/headercont.php");?>

      <section>

  <div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="img/<?php echo $fila[4];?>" alt="Image" class="img-fluid">
        </div>
        
          <div class="card col-md-6 d-flex align-items-center justify-content-center text-center">


            <div class="container ">
            <h2 class="text-black"><?php echo $fila[1];?> </h2>
            <p><?php echo $fila[2];?></p>
            <p class="mb-4"></p>
            <p><strong class="text-success h4">$<?php echo $fila[3];?></strong></p>
        
              <div class="d-flex justify-content-center">
                <div class="mb-5">
                  <div class="input-group mb-3" style="max-width: 120px;">
                    
                  </div>
                </div>
              </div>

            <script src="js/boton.js"></script><!--imortamos el archivo de javascript que nos permite ver el cambio de numero al hacer clic en  "- y +"-->

            <p><a href="carrito.php?id=<?php echo $fila[0];?>" class="buy-now btn btn-md btn-success">Agregar al carrito</a></p>
            </div>


          </div>
        
      </div>
    </div>
  </div>


  </section>




<?php include ("recursos/footer.html");?>

</body>
</html>