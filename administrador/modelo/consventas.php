<?php session_start();
   include "../modelo/conexion.php";

   if (!isset($_SESSION['admin'])) {
     header("location: inicioad.php");
   } 
   $conexion_obj = new conexion();
  $conexion = $conexion_obj->conectar();
    $res = $conexion->query("
    SELECT ventas.*, cliente.nom_cliente, cliente.tel_cliente, cliente.correo_cliente FROM ventas 
    INNER JOIN cliente ON ventas.id_usuario = cliente.id_cliente
    ")or die($conexion->error);
?>