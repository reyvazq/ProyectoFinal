<?php include "../../modelo/conexion.php";
$conexion_obj = new conexion();
$conexion = $conexion_obj->conectar();
if(isset($_POST['nombre']) && isset($_POST['telefono']) && isset($_POST['Correo']) 
 && isset($_POST['Nivel'])){


    
    $conexion->query("UPDATE cliente set 
    nom_cliente='".$_POST['nombre']."', 
    tel_cliente='".$_POST['telefono']."',
    correo_cliente='".$_POST['Correo']."',
    nivel='".$_POST['Nivel']."'  
    WHERE id_cliente=".$_POST['id'])or die($conexion->error);
    header("location: ../Cliente.php?modificado");
}

    ?>