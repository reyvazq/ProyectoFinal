<?php include "modelo/session.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "recursos/encabezado.php"; ?><!--Recursos-->
</head>
<body> <?php include "recursos/headercont.php";?>

<section class="product" id="product">
        <div class="container py-5">
            <div class="row mb-5">
                        <?php 
                      $conexion_obj = new conexion();
                      $conexion = $conexion_obj->conectar();
                      $res = $conexion -> query("SELECT * FROM productos WHERE inventario>0 
                      ORDER BY id DESC LIMIT 10")or die($conexion -> error);
                      while($fila = mysqli_fetch_array($res)){?>   
                    <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                        <div class="block-4 text-center border">
                            <figure class="block-4-image">
                                <a href="piezaven.php?id=<?php echo $fila['id']; ?>">
                                    <img src="img/<?php echo $fila['imagen']; ?>" alt="<?php echo $fila['nombre']; ?>" class="img-fluid">
                                </a>
                            </figure>
                            <div class="block-4-text p-4">
                                <h3><a class="text-success" href="piezaven.php?id=<?php echo $fila['id']; ?>"><?php echo $fila['nombre']; ?></a></h3>
                                <p class="mb-0"><?php echo $fila['descripcion']; ?></p>
                                <p class="text-success font-weight-bold">$<?php echo $fila['precio']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php  } ?>
            </div>
        </div>

    </section>



<?php include  "recursos/footer.html";//incluimos el footer?> 

</body>
</html>