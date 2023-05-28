<?php include "../../modelo/conexion.php";
$conexion_obj = new conexion();
$conexion = $conexion_obj->conectar();
if(isset($_POST['nombre']) && isset($_POST['descripcion']) && isset($_POST['precio']) 
&& isset($_POST['inventario'])){
    $carpeta = "../../img/";
    $nom = $_FILES['imgn']['name'];
    $img = explode('.',$nom);
    $extension = end($img);
    $nombrefinal = time().'.'.$extension;
    if($extension == 'jpg' || $extension == 'png'){
        if(move_uploaded_file($_FILES['imgn']['tmp_name'], $carpeta.$nombrefinal)){
            
            $conexion->query("INSERT INTO productos (nombre,descripcion,precio,imagen,inventario) 
            VALUES 
            (
                '".$_POST['nombre']."',
                '".$_POST['descripcion']."',
                ".$_POST['precio'].",
                '$nombrefinal',
                ".$_POST['inventario'].".
            )
            ")or die($conexion->error);
            header("location: ../Productos.php?success");
        }else{
            header("location: ../Productos.php?error=No se pudo subir la imagen");

        }
    }else{
    header("location: ../Productos.php?error=Favor de subir una imagen .jpg o .png");
    }
}else{
    header("location: ../Productos.php?error=Favor de llenar los campos");
}





?>