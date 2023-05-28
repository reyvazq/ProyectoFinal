<?php include "modelo/session.php";?>

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
<?php include("recursos/headercont.php"); ?> 
<div class="conteiner flex-wrap">
    <div class="site-wrap">
        <div class="site-section ">
            <div class="container d-flex align-items-center justify-content-center vh-100">
                <div class="row d-flex">
                    <div class="col-md-12 text-center">
                         <span class="bi bi-check-circle-fill icono text-success"></span>
                         <h2 class="display-3 text-black">¡Gracias por la compra!</h2>
                         <p class="lead mb-5">Tu compra ha sido completada exitosamente</p>
                         <p><a href="productos.php" class="btn btn-sm btn-success">Continuar comprando</a></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php include("recursos/footer.html"); ?> 
</body>
</html>