<?php
include_once "CuentaBancaria.php";

session_start();

$errores = array();

if(!empty($_POST["cantidad"])){

    if($_POST["cantidad"] < 1){
        $errores[] = "<p>Debe retirar al menos 1€, si el saldo es positivo</p>";
    }

    if(!$_SESSION["cuenta"]->sacar($_POST["cantidad"])){
        $errores[] = "<p>El saldo no es suficiente para retirar esa cantidad</p>";
    }

}else{
    $errores[] = "<p>Debe introducir la cantidad a retirar</p>";
}

//Comprobamos si hay algún error dentro del array, si hay los encadenamos y devolvemos a index, si no hay errores guardamos las variables de session y pasamos a siguiente página
if(count($errores) > 0){
    for($x = 0; $x < count($errores); $x++){
        $cadena .= $errores[$x];
    }

    header("Location: retirar.php?mensaje=".$cadena);

}else {

    header("Location: principal.php");
}