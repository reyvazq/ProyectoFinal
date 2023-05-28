<?php
include "../../modelo/conexion.php";

$conexion_obj = new conexion();
$conexion = $conexion_obj->conectar();
$res = $conexion->query("SELECT * FROM productos WHERE id=".$_POST['id'])or die($conexion->error);
$fila = mysqli_fetch_array($res);
if(file_exists('../../img/'.$fila[4])){
    unlink('../../img/'.$fila[4]);
}
$conexion->query("DELETE FROM productos WHERE id=".$_POST['id'])or die($conexion->error);

?>