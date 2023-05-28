
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <?php include "recursos/encabezado.php";?>
</head>
<body>

<section class="" style="background-color: #f3f2f2;">
  <div class="container">
    <div class="bg-image h-100">
      <div class="mask d-flex align-items-center" >
        <div class="container">
          <div class="row d-flex justify-content-center align-items-center">
            <div class="col-12 col-lg-9 col-xl-8">
              <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                  <div class="col-md-4 d-none d-md-block">
                    <img
                      src="img/reg.png"
                      alt="login form"
                      class="img-fluid" style="border-top-left-radius: 1rem; border-bottom-left-radius: 1rem; "
                    />
                  </div>
                  <div class="col-md-8 d-flex align-items-center">
                    <div class="card-body py-5 px-4 p-md-5">

                              

                      <form class="needs-validation" novalidate method="POST" action="modelo/registro.php">
                        <h4 class="fw-bold mb-4" style="color: #2D5540;">Registrarse  </h4>
                            <hr>
                        <!--Nombre-->
                        <div class="row rg-2">
                              <div class="col-6 mb-4">
                                      <label class="form-label" for="nombre" >Nombre</label>
                                      <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" required>
                                      <div class="invalid-feedback">
                                          Necesita llenar el espacio
                                      </div>
                              </div>

                              <div class="col-6 mb-4">
                                      <label class="form-label" for="tel" >Telefono</label>
                                      <input type="text" id="tel" name="tel" class="form-control" placeholder="Telefono" required>
                                      <div class="invalid-feedback">
                                          Necesita llenar el espacio
                                      </div>
                              </div>
                          
                        </div>
                        
                      
                          <div class="mb-4">
                                      <label class="form-label" for="correo" >Correo electronico</label>
                                      <input type="email" id="correo" name="correo" class="form-control" placeholder="name@example.com" required>
                                      <div class="invalid-feedback">
                                          Necesita llenar el espacio
                                      </div>
                          </div>


                          <div class="row g-2">
                              <div class="col-6 mb-4">
                                  <label class="form-label" for="contra" >Contrase&ntilde;a</label>
                                  <input type="password" id="contra" name="contra" class="form-control" placeholder="Contraseña" required>
                                  <div class="invalid-feedback">
                                      Necesita llenar el espacio
                                  </div>
                              </div>
                              <div class="col-6 mb-4">
                                  <label class="form-label" for="repcontra" >Repita Contrase&ntilde;a</label>
                                  <input type="password" id="repcontra" name="repcontra" class="form-control" placeholder="Repita contraseña" required>
                                  <div class="invalid-feedback">
                                      Necesita llenar el espacio
                                  </div>
                              </div>
                          </div>

                          <hr>
                          <div class="col">
                            <!-- href para ir a iniciar sesion -->
                            <a href="iniciar.php">Iniciar sesi&oacute;n</a>
                          </div>



                        
                        <div class="d-flex justify-content-end pt-1 mb-4">
                          <button class="btn btn-primary btn-rounded"  type="submit" value="submit" style="background-color: #2D5540;">Registar</button>
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
  </div>
</section>
          <!--Scrip para mandar mensajes de llena los campos-->
<script src="js/scrip.js"></script>
<footer>
<?php
include("recursos/footer.html");
?>
</footer>

</body>
</html>