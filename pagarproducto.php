<?php include "modelo/session.php";
if(!isset($_SESSION['car'])){
  header('Location: ./carrito.php');
}
$arreglo  = $_SESSION['car'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produco a pagar</title>
    <?php include "recursos/encabezado.php";?>
</head>
<body>
<script src="https://www.paypal.com/sdk/js?client-id=Afl5_hYdVs_C5T8Ejz0Pub58Zq_x-2czhijH5lGONe1osVTYqJIwWZbRH-bsx4Hk6Vbdhev3yGmjrEa9&currency=MXN"></script>

<?php include "recursos/headercont.php";?>
<form class="form-horizontal needs-validation" novalidate method="post" action="modelo/venta.php">
  <fieldset>
            <div class="container flex-wrap">
              
                <div class="row"><!--Div Primera fila  -->
                      <div class="col-sm-6">  <!--Div de la Primera columna de la primera fila  -->
                        <div class="container">
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="well well-sm">


                                                <legend class="text-center contacto">Ingrese sus datos</legend>
                                                    
                                                <div class="form-group row mb-4">
                                                  <span class="col-md-1 col-md-offset-2"><i class="fa fa-user bigicon"></i></span>
                                                  <div class="col-md-11">
                                                    <input id="fname" name="nombre" type="text" placeholder="Escribe tu nombre" class="form-control" required>
                                                    <div class="invalid-feedback">
                                                      Necesita llenar el espacio
                                                    </div>  
                                                  </div>
                                                </div>

                                                <div class="form-group row mb-4">
                                                    <span class="col-md-1 col-md-offset-2 "><i class="fa fa-user bigicon"></i></span>
                                                    <div class="col-md-11">
                                                        <input id="lname" name="apellido" type="text" placeholder="Ingresa tus apellidos" class="form-control" required>
                                                        <div class="invalid-feedback">
                                                          Necesita llenar el espacio
                                                        </div>  
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-4">
                                                    <span class="col-md-1 col-md-offset-2 "><i class="bi bi-envelope-fill bigicon"></i></span>
                                                    <div class="col-md-11">
                                                        <input id="email" name="correo" type="text" placeholder="Ingresa tu correo" class="form-control" required>
                                                        <div class="invalid-feedback">
                                                          Necesita llenar el espacio
                                                        </div>  
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-4">
                                                    <span class="col-md-1 col-md-offset-2 "><i class="fa fa-phone-square bigicon"></i></span>
                                                    <div class="col-md-11">
                                                        <input id="phone" name="telefono" type="text" placeholder="Ingresa tu telefono" class="form-control" required>
                                                        <div class="invalid-feedback">
                                                          Necesita llenar el espacio
                                                        </div>  
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-4">
                                                    <span class="col-md-1 col-md-offset-2"><i class="bi bi-map bigicon"></i></span>
                                                    <div class="col-md-11">
                                                        <textarea class="form-control" id="message" name="direccion" placeholder="Ejemplo: Av. Principal 123, Piso 4, Departamento 402, Ciudad, País" rows="7" required></textarea>
                                                        <div class="invalid-feedback">
                                                          Necesita llenar el espacio
                                                        </div>  
                                                    </div>
                                                </div>
                                            
                                          
                                      
                                  </div>
                              </div>
                          </div>
                        </div>
                      </div><!--Fin del Div de la primera columna de la primera fila  -->  
                          

                
                        <div class="col-sm-6"> <!--Inicio del Div segunda columna de la primera fila  -->
                          <div class="row mb-5">
                                  <div class="col-md-12">
                                  <legend class="text-center contacto">Tu pedido</legend>
                                    <div class="p-3 p-lg-5 border">
                                      <table class="table site-block-order-table mb-5">
                                        <thead>
                                          <th>Product</th>
                                          <th>Total</th>
                                        </thead>
                                        <tbody>
                                        <?php
                                          $total = 0; 
                                          for($i=0;$i<count($arreglo);$i++){
                                            $total = $total+ ($arreglo[$i]['Precio']*$arreglo[$i]['Cantidad']);   
                                        ?>
                                          <tr>
                                            <td class="text-success"><?php echo $arreglo[$i]['Nombre']." x ".$arreglo[$i]['Cantidad'];?> </td>
                                            <td>$<?php echo  number_format($arreglo[$i]['Precio'], 2, '.', '');?></td>
                                          </tr>
                                      
                                          <?php 
                                            }
                                          ?>
                                          <tr>
                                            <td class="text-success">Order Total</td>
                                            <td>$<?php echo number_format($total, 2, '.', '');?></td>
                                          </tr>
                                          <tr>
                                            <td class="text-success"><b>Total Final</b>  </td>
                                            <td id="tdTotalFinal" 
                                                name="total"
                                              data-total="<?php echo $total;?>">$<?php echo number_format($total, 2, '.', '');?></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                        
                                            
                                            
                                      <div id="paypal-button-container"></div>

  
                                        <div class="form-group">
                                          <button class="btn btn-success btn-lg py-3 btn-block" value="enviar" type="submit">Pagar</button>
                                        </div>
                                        
                                    </div>
                                  </div>
                              </div>
                        </div> <!--Fin del Div segunda columna de la primera fila  -->  
                      
                </div><!--Fin Div de la primera fila-->
                
            </div>
  </fieldset>
</form>
<script src="js/scrip.js"></script>
<?php include "recursos/footer.html";?>    
<script src="js/paypal.js"></script>



</body>
</html>