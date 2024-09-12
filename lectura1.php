<?php
session_start();

$errores = array();

if(!empty($_POST["dni"]) && !empty($_POST["telefono"]) && !empty($_POST["email"]) && !empty($_POST["email2"])){

    $dni = $_POST["dni"];
    $expReg = '/^[0-9]{8}[A-Za-z]{1}$/';

    if(!preg_match($expReg, $dni) || !validarLetra($dni)){
        $errores[] = "<p>El DNI introducido no es valido</p>";
    }

    $telefono = $_POST["telefono"];
    $expReg2 = "/^(?:(?:\+|00)?34)?[679]\d{8}$/";

    if(!preg_match($expReg2, $telefono)){
        $errores[] = "<p>El numero de telefono debe comenzar por 6, 7 o 9 y contener 9 digitos</p>";
    }

    $email = $_POST["email"];
    $email2 = $_POST["email2"];

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errores[] = "<p>Debe introducir un email correcto</p>";
    }

    if(!($email == $email2)){
        $errores[] = "<p>Los email introducidos no coinciden</p>";
    }

}else{
    $errores[] = "<p>Debe introducir todos los datos para continuar</p>";
}

//Comprobamos si hay algún error dentro del array, si hay los encadenamos y devolvemos a index, si no hay errores guardamos las variables de session y pasamos a siguiente página
if(count($errores) > 0){
    for($x = 0; $x < count($errores); $x++){
        $cadena .= $errores[$x];
    }

    header("Location: index.php?mensaje=".$cadena);

}else {

    $_SESSION["dni"] = $dni;
    $_SESSION["telefono"] = $telefono;
    $_SESSION["email"] = $email;

    header("Location: next.php");
}

//Función con la que validamos si la letra del DNI es correcta:
function validarLetra($dni) {
    $letras = "TRWAGMYFPDXBNJZSQVHLCKE";

    //Cogemos desde la posición 0, 8 caracteres, dejando fuera el 9 que será la letra y nos quedamos sólo con los números
    $numeroDNI = substr($dni,0,8);

    //Calculamos el resto de los números, y nos da la posición de la letra
    $resto = $numeroDNI % 23;

    //Comprobamos en el "array" de caracteres la posición que nos ha dado el resto, y lo comparamos con la letra (pasandola a mayuscula) de la posición 8 del DNI(letra)
    if($letras[$resto] == strtoupper(substr($dni, 8, 1))){
        return true;
    }else{
        return false;
    }
}