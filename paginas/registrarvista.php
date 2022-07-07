<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Registrarse</title>
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

    <link rel="stylesheet" href="../css/estilos2.css">
    <link rel="stylesheet" href="../css/estilos.css">


</head>

<body>

<nav>
        <a href="#">
            <img src="../imagenes/logoMPC.png" alt="Logo MPC" />
        </a>

        <div style="margin-top: 15px;">
            <a id="menu" aria-current="page" href="index.html">Inicio</a>
            <a id="menu" href="servicios.html">Servicios</a>
            <a id="menu" href="noticias.html">Noticias</a>
            <a id="menu" href="eventos.html">Eventos</a>
            <a id="menu" href="#">Cultura</a>
            <a id="menu" href="#">Turismo</a>
            <a id="menu" href="contactanos.html">Contactanos</a>
            <a href="loginvista.php"> <i id="inicio" class="fas fa-user icon">Iniciar
                Sesion</i> </a>
        </div>
    <!--    <form method="post">

            <h1>Registrarse</h1>

            <div class="input-contenedor">
                <i class="fas fa-user icon"></i>
                <input type="text" name="name" placeholder="Nombre completo">
            </div>
            <div class="input-contenedor">
                <i class="fas fa-envelope icon"></i>
                <input type="email" name="email" placeholder="Email">
            </div>

            <div class="input-contenedor">
                    <i class="fas fa-key icon"></i>
                    <input type="password" name="password" placeholder="ingrese una contraseña" ></p>

                </div>

            <input type="submit" name="register">
                <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
                <p>¿Ya tienes una cuenta?<a class="link" href="index.php">Iniciar Sesion</a></p>
-->

    <form method="post" class="formulario">

        <h1>Registrarse</h1>
        <div class="contenedor">

            <div class="input-contenedor">
                <i class="fas fa-user icon"></i>
                <input type="text" name="name" placeholder="Nombre completo">
            </div>
            <div class="input-contenedor">
                <i class="fas fa-user icon"></i>
                <input type="text" name="apellido" placeholder="Apellido">
            </div>
            <div class="input-contenedor">
                <i class="fas fa-envelope icon"></i>
                <input type="text" name="email" placeholder="Email">

            </div>

            <div class="input-contenedor">
                <i class="fas fa-key icon"></i>
                <input type="password" name="password" placeholder="ingrese una contraseña">

            </div>
            <input type="submit" class="button" name="register">
            <!-- <input type="submit" value="Registrate" class="button">-->
            <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
            <p>¿Ya tienes una cuenta?<a class="link" href="loginvista.php">Iniciar Sesion</a></p>
        </div>

    </form>
    <?php
    include("registrar.php");
    ?>
</body>

</html>