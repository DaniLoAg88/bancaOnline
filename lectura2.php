<?php
session_start();

$errores = array();

if(!empty($_POST["nombre"]) && !empty($_POST["apellido1"]) && !empty($_POST["apellido2"]) && !empty($_POST["edad"])){

    $nombre = $_POST["nombre"];
    $apellido1 = $_POST["apellido1"];
    $apellido2 = $_POST["apellido2"];
    $edad = $_POST["edad"];

    if(!is_string($nombre) || preg_match("/[0-9]/", $nombre)){
        $errores[] = "<p>El nombre debe contener texto y no incluir numeros</p>";
    }

    if(!is_string($apellido1) || preg_match("/[0-9]/", $apellido1)){
        $errores[] = "<p>El primer apellido debe contener texto y no incluir numeros</p>";
    }

    if(!is_string($apellido2) || preg_match("/[0-9]/", $apellido2)){
        $errores[] = "<p>El segundo apellido debe contener texto y no incluir numeros</p>";
    }

    if($edad < 18){
        $errores[] = "<p>Lo sentimos, debe tener 18 anios o mas para crear una cuenta con nosotros</p>";
    }

}else{
    $errores[] = "<p>Debe introducir todos los datos para continuar</p>";
}

//Comprobamos si hay algún error dentro del array, si hay los encadenamos y devolvemos a index, si no hay errores guardamos las variables de session y pasamos a siguiente página
if(count($errores) > 0){
    for($x = 0; $x < count($errores); $x++){
        $cadena .= $errores[$x];
    }

    header("Location: next.php?mensaje=".$cadena);

}else {

    $_SESSION["nombre"] = $nombre;
    $_SESSION["apellido1"] = $apellido1;
    $_SESSION["apellido2"] = $apellido2;
    $_SESSION["edad"] = $edad;

    header("Location: confirmacion.php");
}
