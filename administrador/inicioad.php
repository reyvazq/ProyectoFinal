<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modo admin</title>
    <?php include "../recursos/encabezado.php"; ?>
</head>
<body>
<div id="template-bg-1">
<div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
<div class="card p-4 text-light bg-dark mb-5">
<div class="card-header">
<h3>Iniciar sesión </h3>
<hr>
</div>
<div class="card-body w-100">
<form name="login" action="modelo/iniciarad.php" method="post">
<div class="input-group form-group mt-3">
<div class="bg-secondary rounded-start">
<span class="m-3"><i class="fas fa-user mt-2"></i></span>
</div>
<input type="text" class="form-control" placeholder="Correo"
name="correo">
</div>
<div class="input-group form-group mt-3">
<div class="bg-secondary rounded-start">
<span class="m-3"><i class="fas fa-key mt-2"></i></span>
</div>
<input type="password" class="form-control" placeholder="Contraseña"
name="contra">
</div>

<div class="form-group mt-3">
<input type="submit" value="Acceder"
class="btn bg-secondary float-end text-white w-100"
name="login-btn">
</div>
</form>


</div>

</div>
</div>
</div>
<div class="col-md-6 mb-3 mb-md-0">
<button class="btn btn-success btn-sm btn-block" onclick="window.location='../index.php'">Regresar</button>
</div>
</body>
</html>