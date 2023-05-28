<?php session_start();
include "../../modelo/conexion.php";

$correo = $_POST['correo'];
$contra = $_POST['contra'];


    $conexion_obj = new conexion();
    $conexion = $conexion_obj->conectar();
        $res = $conexion->query("SELECT * FROM cliente 
        WHERE correo_cliente = '$correo'")or die($conexion->error);
        $fila = mysqli_fetch_array($res);
        $contraexi  =  $fila['password'];
        $nivel  =  $fila['nivel'];
        if (password_verify($contra, $contraexi) and ($nivel == "admin")){
            $_SESSION['admin'] = $correo;
            header("location:  ../admin.php");
        }
        else{
            header("location:  ../inicioad.php".urlencode($mensaje));
        }

?>