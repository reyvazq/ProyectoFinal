<?php include "session.php";

if(!isset($_SESSION['car'])){header("Location: ./carrito.php"); } /*  */
$arreglo = $_SESSION['car'];
$total = 0;
for($i=0;$i<count($arreglo);$i++){
    $total = $total+ ($arreglo[$i]['Precio']*$arreglo[$i]['Cantidad']); 
}




/* Registro de envios */
$conexion_obj = new conexion();/* Instanciamos la conexion */
$conexion = $conexion_obj->conectar(); /* llamamos al metodo conectar y lo guardamos en nuestra variable */


$id = 0;
$correo[]= $_SESSION['correo_cliente'];/* Le agregamos el elemento de nuestra session al array */
$corr=$correo[0];/* Le pasamos el valor que se encuentra en nuestra columna en la posicion 0  */
  $res = $conexion->query("SELECT * FROM cliente WHERE correo_cliente='$corr'")or die($conexion->error);/* hacemos una consulta */
  $fila = mysqli_fetch_array($res);/* Guardamos el resultado en nuestra variable $fila */
  $id=$fila[0];/* guardamos nuestro el valor que se encuentre en nuetra columna 0 */

  $arr[]=array(  /*  se está creando un array de arrays,  */
    'Id'=>$id /* se le asigna el el valos de $id a 'Id'.  */
); /* Esto puede ser útil cuando se quiere almacenar y manejar múltiples valores de una misma variable en un solo lugar. */
/* registro de envio */

for($i=0;$i<count($arr);$i++){
   $ID=$arr[$i]['Id'];/* rrecorremos el for para obtener el valor del 'Id'  y lo almacenamos en $ID */
 }

 $conexion -> query("INSERT INTO ventas(id_usuario,stotal,status) /* insertar venta */
 values($ID,$total,'en proceso')") or die($conexion->error);


$id_venta = $conexion -> insert_id;
for($i=0;$i<count($arreglo);$i++){
    $conexion -> query("INSERT INTO productos_venta (id_venta,id_producto,cantidad,precio,total)
    VALUES($id_venta,
    ".$arreglo[$i]['Id'].",
    ".$arreglo[$i]['Cantidad'].",
    ".$arreglo[$i]['Precio'].",
    ".$arreglo[$i]['Cantidad']*$arreglo[$i]['Precio']."
    )") or die($conexion->error);
    $conexion->query("UPDATE productos SET inventario=inventario-".$arreglo[$i]['Cantidad']." WHERE id=".$arreglo[$i]['Id'])or die($conexion->error);
}
$nom=$_POST['nombre'];
$ape=$_POST['apellido'];
$cor=$_POST['correo'];
$tel=$_POST['telefono'];
$direc=$_POST['direccion'];
$conexion -> query("INSERT INTO envios(nombre,apellido,correo,telefono,direccion,id_venta) 
VALUES ('$nom','$ape','$cor','$tel','$direc',$id_venta)") or die($conexion->error);
/* Fin de registro de envios */

unset($_SESSION['car']);




header("Location: ../graciasCom.php");

?>