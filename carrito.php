<?php include "modelo/agregarcar.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "recursos/encabezado.php"; ?>
</head>
<body>
<?php include "recursos/headercont.php";?>

<section class="container py-5">
        <div class="site-section">
            <div class="container">
                <div class="row mb-5">
                    <form class="col-md-12" method="post">
                        <div class="site-blocks-table">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="product-thumbnail">Imagen</th>
                                        <th class="product-name">Nombre del Producto</th>
                                        <th class="product-price">Precio</th>
                                        <th class="product-quantity">Cantidad</th>
                                        <th class="product-total">Total</th>
                                        <th class="product-remove">Remover</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $total = 0;
                                    if (isset($_SESSION['car'])) {
                                        $arreglocar = $_SESSION['car'];
                                        for ($i = 0; $i < count($arreglocar); $i++) {
                                            $total = $total + ($arreglocar[$i]['Precio'] * $arreglocar[$i]['Cantidad']);
                                    ?>
                                            <tr>
                                                <td class="product-thumbnail">
                                                    <center><img src="img/<?php echo $arreglocar[$i]['Imagen']; ?>" height="130" width="130" alt="Image" class="img-fluid"></center>
                                                </td>
                                                <td class="product-name">
                                                    <center>
                                                        <h2 class="h5 text-black"><?php echo $arreglocar[$i]['Nombre']; ?></h2>
                                                    </center>
                                                </td>
                                                <td>$<?php echo $arreglocar[$i]['Precio']; ?></td>
                                                <td>
                                                    <div class="input-group mb-3" style="max-width: 120px;">
                                                        <div class="input-group-prepend">
                                                            <button class="btn btn-outline-success js-btn-minus btnincrementar" type="button">&minus;</button>
                                                        </div>
                                                        <input type="text" class="form-control text-center js-input-cantidad txcantidad" 
                                                        data-precio="<?php echo $arreglocar[$i]['Precio'];?>"
                                                        data-id="<?php echo $arreglocar[$i]['Id'];?>"
                                                        value="<?php echo $arreglocar[$i]['Cantidad']; ?>" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-outline-success js-btn-plus btnincrementar" type="button">&plus;</button>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="cant<?php echo $arreglocar[$i]['Id'];?>">
                                                    $<?php echo $arreglocar[$i]['Precio'] * $arreglocar[$i]['Cantidad']; ?></td>
                                                <td><a href="#" class="btn btn-success btn-sm btnEliminar" data-id="<?php echo  $arreglocar[$i]['Id']; ?>">X</a></td>
                                            </tr>
                                    <?php  } } ?>
                                </tbody>
                              

                            </table>
                        </div>
                    </form>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="row mb-5">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <button class="btn btn-success btn-sm btn-block" onclick="window.location='carrito.php'">Actualizar carrito</button>
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-success btn-sm btn-block" onclick="window.location='productos.php'">Continuar comprando</button>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 pl-5">
                        <div class="row justify-content-end">
                            <div class="col-md-7">
                                <div class="row">
                                    <div class="col-md-12 text-right border-bottom mb-5">
                                        <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <span class="text-black">Subtotal</span>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <strong class="text-black" id="subtotal">$<?php echo $total; ?></strong>
                                    </div>
                                </div>
                                <div class="row mb-5">
                                    <div class="col-md-6">
                                        <span class="text-black">Total</span>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <strong class="text-black" id="total">$<?php echo $total; ?></strong>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="btn btn-success btn-lg py-3 btn-block" onclick="window.location='pagarproducto.php'">Pagar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>



<script src="js/eliminar.js"></script>
<script src="js/botonarreglo.js"></script> <!--imortamos el archivo de javascript que nos permite ver el cambio de numero al hacer clic en  "- y +"-->

<?php include "recursos/footer.html";?>

 
</body>
</html>