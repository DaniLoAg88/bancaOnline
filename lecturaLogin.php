<?php
include_once "CuentaBancaria.php";

session_start();

$errores = array();
$_SESSION["cuenta"] = new CuentaBancaria("Dani", "1234");

if(!empty($_POST["usuario"]) && !empty($_POST["password"])){

    $usuario = $_POST["usuario"];
    $password = $_POST["password"];
    $expRegPin = '/^[0-9]{4}$/';

    if(!preg_match($expRegPin, $password)){
        $errores[] = "<p>La contrasenia debe ser un PIN de cuatro numeros</p>";
    }

    if(!$_SESSION["cuenta"]->validaUsuario($usuario, $password)){
        $errores[] = "<p>Usuario o contrasenia no son correctos</p>";
    }

}else{
    $errores[] = "<p>Debe introducir todos los datos para continuar</p>";
}

//Comprobamos si hay algún error dentro del array, si hay los encadenamos y devolvemos a index, si no hay errores guardamos las variables de session y pasamos a siguiente página
if(count($errores) > 0){
    for($x = 0; $x < count($errores); $x++){
        $cadena .= $errores[$x];
    }

    header("Location: login.php?mensaje=".$cadena);

}else {

    header("Location: principal.php");
}