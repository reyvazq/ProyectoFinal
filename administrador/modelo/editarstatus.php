<?php include "../../modelo/conexion.php";
$conexion_obj = new conexion();
$conexion = $conexion_obj->conectar();
if(isset($_POST['status'])){

    
    $conexion->query("UPDATE ventas set 
    status='".$_POST['status']."'  
    WHERE id=".$_POST['id'])or die($conexion->error);
    header("location: ../Status.php?modificado");
}else{
    header("location: ../Status.php?error");
}


    ?>