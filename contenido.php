<?php include "modelo/session.php";

$insconexion = new conexion();
$conexion = $insconexion->conectar();
$correouser = $_SESSION['correo_cliente'];
$sql = "SELECT nom_cliente, tel_cliente, correo_cliente FROM cliente WHERE correo_cliente = '$correouser'";
$resultado = $conexion->query($sql);
$row = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de abarrotes</title>
    <?php include "recursos/encabezado.php";?>
</head>
<body>
<?php
include "recursos/headercont.php";
?>
<!--Perfil-->
<section class="profile" id="profile">
        <div class="container py-3">
            <div class="row pt-3">
                <div class="col-lg-5 m-auto text-center">
                    <h1 class="text-success">Bienvenido: <?php echo $row['nom_cliente']; ?></h1>
                    <i class="bi bi-person-circle large-icon text-success" ></i><style>.large-icon {font-size: 150px; /* Ajusta el tamaño deseado */}</style>
                    <br>
                    <br>
                    <h6 class="text-success"><b>INFORMACION DEL USUARIO</b></h6>
                    <p class="mb-0"><b class="text-success">Correo: </b> <?php echo $row['correo_cliente']; ?></p>
                    <p class="mb-0"><b class="text-success">Nombre: </b> <?php echo $row['nom_cliente']; ?></p>
                    <p class="mb-0"><b class="text-success">Telefono: </b> <?php echo $row['tel_cliente']; ?></p>
                </div>
            </div>
        </div>
    </section>
<?php include "recursos/footer.html";?>

</body>
</html>
