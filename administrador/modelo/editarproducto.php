<?php include "../../modelo/conexion.php";
$conexion_obj = new conexion();
$conexion = $conexion_obj->conectar();
if(isset($_POST['nombre']) && isset($_POST['descripcion']) && isset($_POST['precio']) 
&& isset($_POST['inventario'])){

        if($_FILES['imgn']['name']!=""){
    $carpeta = "../../img/";
    $nom = $_FILES['imgn']['name'];

    $img = explode('.',$nom);
    $extension = end($img);
    $nombrefinal = time().'.'.$extension;
    if($extension == 'jpg' || $extension == 'png'){
        if(move_uploaded_file($_FILES['imgn']['tmp_name'], $carpeta.$nombrefinal)){
            $res = $conexion->query("SELECT * FROM productos WHERE id=".$_POST['id'])or die($conexion->error);
            $fila = mysqli_fetch_array($res);
            if(file_exists('../../img/'.$fila[4])){
                unlink('../../img/'.$fila[4]);
            }
        $conexion->query("UPDATE productos set imagen='".$nombrefinal."' WHERE id=".$_POST['id'])or die($conexion->error);
        }   
        }
        }
    
    
    
    $conexion->query("UPDATE productos set 
    nombre='".$_POST['nombre']."', 
    descripcion='".$_POST['descripcion']."',
    precio=".$_POST['precio'].",
    inventario=".$_POST['inventario']."  
    WHERE id=".$_POST['id'])or die($conexion->error);
    header("location: ../Productos.php?modificado");
}

    ?>