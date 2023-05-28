
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "recursos/encabezado.php";?>
</head>
<body class="fondoinireg ">
    

<section class="intro">
  <div class="bg-image h-100">
    <div class="mask d-flex align-items-center h-100" style="background-color: #f3f2f2;">
      <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
          <div class="col-12 col-lg-9 col-xl-8">
            <div class="card" style="border-radius: 1rem;">
              <div class="row g-0">
                <div class="col-md-4 d-none d-md-block h-100">
                  <img
                    src="img/store.png"
                    alt="login form"
                    class="img-fluid h-100" style="border-top-left-radius: 1rem; border-bottom-left-radius: 1rem;"
                  />
                </div>
                <div class="col-md-8 d-flex align-items-center">
                  <div class="card-body py-5 px-4 p-md-5">

                    <form class="needs-validation" novalidate  method="post" action="modelo/inicio.php">
                      <h4 class="fw-bold mb-4" style="color: #2D5540;">Inicia sesion</h4>
                      <hr>
                      <div class="form-outline mb-4">
                        <label class="form-label" for="correo" >Correo electronico</label>
                        <input type="email" id="correo" name="correo" class="form-control" placeholder="name@example.com" required>
                        <div class="invalid-feedback">
                        Necesita llenar el espacio
                        </div>
                      </div>

                      <div class="form-outline mb-4">
                        <label class="form-label" for="contra" >Contrase&ntilde;a</label>
                        <input type="password" id="contra" name="contra" class="form-control" placeholder="Contraseña" required>
                        <div class="invalid-feedback">
                        Necesita llenar el espacio
                        </div>
                      </div>
                      <hr>
                      <div class="col">
                        <?php if(isset($_GET['mensaje'])) {
                        $mensaje = urldecode($_GET['mensaje']);
                        ?>
                          <h6><?php echo $mensaje; ?></h6>
                        <?php }?>  
                          <!-- href para ir a Registrar -->
                          <a href="registrar.php">¿No tienes cuentas? Registrar</a>
                        </div>
                      <div class="d-flex justify-content-end pt-1 mb-4">
                        <button class="btn btn-primary btn-rounded" value="iniciar" type="submit" style="background-color: #2D5540;">Log in</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>





<script src="js/scrip.js"></script>
<?php
include("recursos/footer.html");
?>
</body>
</html>