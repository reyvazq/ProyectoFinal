<?php session_start();
   include "conexion.php";

   if (!isset($_SESSION['correo_cliente'])) {
     header("location:index.php");
   } 
?>