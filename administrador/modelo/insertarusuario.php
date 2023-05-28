<?php include "../../modelo/conexion.php";
$conexion_obj = new conexion();
$conexion = $conexion_obj->conectar();
if(isset($_POST['nombre']) && isset($_POST['telefono']) && isset($_POST['correo']) 
&& isset($_POST['contra']) && isset($_POST['nivel'])){
    $contra = password_hash($_POST['contra'],PASSWORD_DEFAULT);    
            $conexion->query("INSERT INTO cliente (nom_cliente, tel_cliente, correo_cliente, password, nivel) 
            VALUES 
            (
                '".$_POST['nombre']."',
                '".$_POST['telefono']."',
                '".$_POST['correo']."',
                 '".$contra."',
                '".$_POST['nivel']."'
            )
            ")or die($conexion->error);
            header("location: ../Cliente.php?success");
       
    }else{
    header("location: ../Cliente.php?error=Favor de llenar los campos");
}





?>