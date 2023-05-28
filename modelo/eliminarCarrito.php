<?php
session_start();
$arreglo = $_SESSION['car'];
for($i=0;$i<count($arreglo);$i++){
    if($arreglo[$i]['Id'] != $_POST['id']){
        $arregloNew[]= array(
            'Id'=>$arreglo[$i]['Id'],
            'Nombre'=>$arreglo[$i]['Nombre'],
            'Precio'=>$arreglo[$i]['Precio'],
            'Imagen'=>$arreglo[$i]['Imagen'],
            'Cantidad'=>$arreglo[$i]['Cantidad']
        );
    }
}

if(isset($arregloNew)){//verifica si ha algo en el $arregloNew(algun registro)
    $_SESSION['car']=$arregloNew;
}else{
//no habia registros a eliminar
unset($_SESSION['car']);//borrar la sesion de carrito
}

?>