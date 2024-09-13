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
    <div class="col-4"><img src="img/logo-banca-online.png" alt="Logo banca online" id="imgLogo"></div>
    <div class="col-4" id="divContacto"><p><img src="img/contact_support.svg" alt="Imagen contacto" id="imgContacto">¿Te ayudamos?</p></div>
</div>
<div id="divNumeros" class="col-8">
    <p>1<span class="material-symbols-outlined">arrow_forward</span><font color="#F9B801"> 2 </font><span class="material-symbols-outlined">arrow_forward</span> 3 </p>
</div>
<div id="divPrincipal" class="col-8">
    <p><h1><b>¡Continuamos!</b></h1></p>
    <p>Por favor, necesitamos mas datos para continuar tu proceso de alta:</p>
    <form action="lectura2.php" method="post" novalidate>
        <p><input type="text" placeholder="NOMBRE" name="nombre" id="nombre" class="inputEntrada"><input type="text" placeholder="PRIMER APELLIDO" name="apellido1" id="apellido1" class="inputEntrada"></p>
        <p><input type="number" placeholder="EDAD" name="edad" id="edad" class="inputEntrada"><input type="text" placeholder="SEGUNDO APELLIDO" name="apellido2" id="apellido2" class="inputEntrada"></p>
        <p>
            <input type="submit" value="Siguiente" id="btnSiguiente2" name="btnSiguiente2" class="boton">
            <button class="boton" id="btnLimpiar2" name="btnLimpiar2">Limpiar</button>
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
