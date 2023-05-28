<?php session_start();
   include "../modelo/conexion.php";

   if (!isset($_SESSION['admin'])) {
     header("location: inicioad.php");
   } 
   $conexion_obj = new conexion();
  $conexion = $conexion_obj->conectar();
    $res = $conexion->query("SELECT * FROM productos order by id DESC")or die($conexion->error);
?>