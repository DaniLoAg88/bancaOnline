<?php
include_once "CuentaBancaria.php";

session_start();

$errores = array();

if(!empty($_POST["pin1"]) && !empty($_POST["pin2"])){

    $pin1 = $_POST["pin1"];
    $pin2= $_POST["pin2"];
    $expRegPin = '/^[0-9]{4}$/';

    if(!preg_match($expRegPin, $pin1)){
        $errores[] = "<p>La contrasenia debe ser un PIN de cuatro numeros</p>";
    }

    if($pin1 != $pin2){
        $errores[] = "<p>Los dos PIN introducidos no coinciden</p>";
    }

}else{
    $errores[] = "<p>Debe introducir todos los campos para continuar</p>";
}

//Comprobamos si hay algún error dentro del array, si hay los encadenamos y devolvemos a index, si no hay errores guardamos las variables de session y pasamos a siguiente página
if(count($errores) > 0){
    for($x = 0; $x < count($errores); $x++){
        $cadena .= $errores[$x];
    }

    header("Location: cambiarPin.php?mensaje=".$cadena);

}else {

    $_SESSION["cuenta"]->cambiaPin($pin1);
    header("Location: principal.php?mensaje=PIN cambiado correctamente");
}