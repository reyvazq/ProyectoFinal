<?php 

include "session.php";
if(isset($_SESSION['car'])){
if(isset($_GET['id'])){
    $arreglo = $_SESSION['car'];
    $encontro=false;
    $numero= 0;
    for($i=0;$i<count($arreglo);$i++){
        if($arreglo[$i]['Id']==$_GET['id']){
            $encontro=true;
            $numero=$i;

        }
    }
    if($encontro==true){
        $arreglo[$numero]['Cantidad']=$arreglo[$numero]['Cantidad']+1;
        $_SESSION['car']=$arreglo;
        header("location: ./carrito.php");
    }else{
        
        $nombre ="";
    $precio ="";
    $imagen ="";

    $conexion_obj = new conexion();
  $conexion = $conexion_obj->conectar();
    $res = $conexion->query("SELECT * FROM productos WHERE id=".$_GET['id'])or die($conexion->error);
    $fila = mysqli_fetch_array($res);
    $nombre=$fila[1];
    $precio=$fila[3];
    $imagen=$fila[4];
    $arregloNew=array(
        'Id'=>$_GET['id'],
        'Nombre'=>$nombre,
        'Precio'=>$precio,
        'Imagen'=>$imagen,
        'Cantidad' => 1
    );
    array_push($arreglo,$arregloNew);
    $_SESSION['car']=$arreglo;
    header("location: ./carrito.php");
    }
}
}
else{
if(isset($_GET['id'])){
    $nombre ="";
    $precio ="";
    $imagen ="";
 

    $conexion_obj = new conexion();
  $conexion = $conexion_obj->conectar();
    $res = $conexion->query("SELECT * FROM productos WHERE id=".$_GET['id'])or die($conexion->error);
    $fila = mysqli_fetch_array($res);
    $nombre=$fila[1];
    $precio=$fila[3];
    $imagen=$fila[4];
    $arreglo[]=array(
        'Id'=>$_GET['id'],
        'Nombre'=>$nombre,
        'Precio'=>$precio,
        'Imagen'=>$imagen,
        'Cantidad'=> 1
    );
    $_SESSION['car']=$arreglo;
    header("location: ./carrito.php");
}
}

?>