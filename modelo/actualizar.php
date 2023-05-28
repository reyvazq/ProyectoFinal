<?php 
session_start();
$arreglo = $_SESSION['car'];
$total=0;
for($i=0;$i<count($arreglo);$i++){
    if($arreglo[$i]['Id'] == $_POST['id']){
        $arreglo[$i]['Cantidad']=$_POST['cantidad'];
        $_SESSION['car'] = $arreglo;
        //break;
    }
    $total+=($arreglo[$i]['Cantidad']*$arreglo[$i]['Precio']);
}
echo $total;
?>