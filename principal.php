<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Banca Online</title>
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/favicon.jpg" type="image/x-icon">
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
<?php
include_once "CuentaBancaria.php";
session_start();
?>
<div id="divLogo" class="col-10">
    <div class="col-4"><img src="img/logo-banca-online.png" alt="Logo banca online" id="imgLogo"></div>
    <div class="col-4" id="divContacto"><p><img src="img/contact_support.svg" alt="Imagen contacto" id="imgContacto">¿Te ayudamos?</p></div>
</div>
<div id="divNumeros" class="col-8">
    <p><?php echo $_SESSION["cuenta"]->getUsuario()."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSaldo actual: ".$_SESSION["cuenta"]->getSaldo()."€"; ?></p>
</div>
<div id="divPrincipal" class="col-8">
    <p><h1><b>Area privada</b></h1></p>
    <p>Realizar una operación:</p>
    <p>
        <form action="ingresar.php" method="post" novalidate>
            <input type="submit" value="Ingresar" id="btnIngresar" name="btnIngresar" class="boton">
        </form>
        <form action="retirar.php" method="post" novalidate>
            <input type="submit" value="Retirar" id="btnRetirar" name="btnRetirar" class="boton">
        </form>
        <form action="cambiarPin.php" method="post" novalidate>
            <input type="submit" value="Cambiar Pin" id="btnPin" name="btnPin" class="boton">
        </form>
    </p>
</div>
<div id="divErrores" class="col-10">
    <?php
    if(isset($_GET["mensaje"])){
        echo $_GET["mensaje"];
    }
    ?>
</div>
</body>
</html>
