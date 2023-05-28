<?php session_start();
   include "../modelo/conexion.php";

   if (!isset($_SESSION['admin'])) {
     header("location: inicioad.php");
   } 
   $conexion_obj = new conexion();
  $conexion = $conexion_obj->conectar();
  $sql = "SELECT nom_cliente, tel_cliente, correo_cliente FROM cliente";
  $resultado = $conexion->query($sql);
  $row = $resultado->fetch_assoc();
?>