<?php
include_once "CuentaBancaria.php";

session_start();

$errores = array();

if(!empty($_POST["cantidad"])){

    if($_POST["cantidad"] < 1){
        $errores[] = "<p>Debe ingresar al menos 1€, no se realizaran ingresos inferiores</p>";
    }

}else{
    $errores[] = "<p>Debe introducir la cantidad a ingresar</p>";
}

//Comprobamos si hay algún error dentro del array, si hay los encadenamos y devolvemos a index, si no hay errores guardamos las variables de session y pasamos a siguiente página
if(count($errores) > 0){
    for($x = 0; $x < count($errores); $x++){
        $cadena .= $errores[$x];
    }

    header("Location: ingresar.php?mensaje=".$cadena);

}else {

    $_SESSION["cuenta"]->ingresar($_POST["cantidad"]);
    header("Location: principal.php");
}