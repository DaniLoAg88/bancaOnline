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
    <img src="img/logo-banca-online.png" alt="Logo banca online">
    <img src="img/contact_support.svg" alt="Imagen contacto">¿Te ayudamos?
</div>
<div id="divNumeros" class="col-10">
    <p>1<span class="material-symbols-outlined">arrow_forward</span> 2 <span class="material-symbols-outlined">arrow_forward</span><font color="#F9B801"> 3 </font></p>
</div>
<div id="divPrincipal" class="col-10">
    <p>¡Terminamos!</p>
    <?php
    session_start();

    $destinatario = $_SESSION["email"];
    $remitente = "dani@dani.cursoceat.es";
    $asunto = "Registro online";
    $mensaje = "Hola ".$_SESSION["nombre"]."<br><br>Se ha registrado correctamente en nuestro servicio de banca online. 
                <br>En breve un agente se comunicará para realizar una videoconferencia y confirmar sus datos.
                <br><br>¡Gracias por confiar en nosotros!";

    $cabeceras = "MIME-Version: 1.0\r\n";
    $cabeceras .= "Content-type: text/html; charset=UTF-8\r\n";
    $cabeceras .= "Content-Transfer-Encoding: 8bit\r\n";
    $cabeceras .= "From: $remitente\r\n";

    Try{
        @mail($destinatario, $asunto, $mensaje, $cabeceras);
        echo "El alta en BANCA ONLINE se ha realizado exitosamente. Recibira en breve un mail en $destinatario para realizar una videollamada y confirmar los datos.";
    }catch (Throwable $e) {
        echo "Se ha producido un error. " . $e->getMessage();
    }
    ?>
    <p><b>¡Gracias por dejarnos ser tu banco!</b></p>
    <form action="index.php" method="post" novalidate>
        <p>
            <input type="submit" value="Ir a Inicio" id="btnInicio" name="btnInicio" class="boton">
        </p>
    </form>
</div>
</body>
</html>
