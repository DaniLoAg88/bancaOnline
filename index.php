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
    <div id="divLogo" class="col-10">
        <div class="col-4"><img src="img/logo-banca-online.png" alt="Logo banca online"></div>
        <div class="col-4" id="divContacto"><p><img src="img/contact_support.svg" alt="Imagen contacto">¿Te ayudamos?</p></div>
    </div>
    <div id="divNumeros" class="col-10">
        <p><font color="#F9B801">1</font> <span class="material-symbols-outlined">arrow_forward</span> 2 <span class="material-symbols-outlined">arrow_forward</span> 3</p>
    </div>
    <div id="divPrincipal" class="col-10">
        <p><h1><b>¡Comencemos!</b></h1></p>
        <p>Por favor, necesitamos éstos datos para iniciar tu proceso de alta:</p>
        <form action="lectura1.php" method="post" novalidate>
            <p><input type="text" placeholder="DNI" name="dni" id="dni"><input type="number" placeholder="TELEFONO MOVIL" name="telefono" id="telefono"></p>
            <p><input type="email" placeholder="EMAIL" name="email" id="email"><input type="email" placeholder="CONFIRMA TU EMAIL" name="email2" id="email2"></p>
            <p><input type="checkbox" name="check" id="check">He leido y acepto la politica de privacidad y de proteccion de datos.</p>
            <p>
                <input type="submit" disabled value="Siguiente" id="btnSiguiente" name="btnSiguiente" class="boton">
                <button class="boton" id="btnLimpiar" name="btnLimpiar">Limpiar</button>
            </p>
        </form>
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
