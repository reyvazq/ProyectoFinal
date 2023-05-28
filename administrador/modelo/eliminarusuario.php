<?php
include "../../modelo/conexion.php";

$conexion_obj = new conexion();
$conexion = $conexion_obj->conectar();
$conexion->query("DELETE FROM cliente WHERE id_cliente=".$_POST['id'])or die($conexion->error);

?>