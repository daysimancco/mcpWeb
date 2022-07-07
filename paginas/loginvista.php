<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>login</title>
	<link rel="stylesheet" href="../css/estilos2.css">
    <link rel="stylesheet" href="../css/estilos.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	

</head>
<!-- Aquí puedes escribir tu comentario -->
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

	<!--<div class="Caja">
		<form action="validar.php" method="post">
			<h1 class="animate__animated animate__backInLeft">Sistema de login</h1>


			<div class="input-contenedor">
				<i class="fas fa-envelope icon"></i>
				<p class="blanco">Email <input type="email" placeholder="ingrese su correo" name="email"></p>
			</div>

			<div class="input-contenedor">
				<i class="fas fa-key icon"></i>
				<p class="blanco">Contraseña <input type="password" placeholder="ingrese su contraseña" name="password"></p>

			</div>
			<input class="btn btn-success" type="submit" value="Ingresar">
		</form>
	</div>
	<a href="resgistrarvista.php">Registrarse</a>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
	-->

       
	<form action="validar.php" method="post" class="formulario">
              
			  <h1>Inicio de Sesion</h1>
			  <div class="contenedor">
  
				  <div class="input-contenedor">
					  <i class="fas fa-envelope icon"></i>
					  <input type="text" name="email" placeholder="Correo Electronico">
  
				  </div>
  
				  <div class="input-contenedor">
					  <i class="fas fa-key icon"></i>
					  <input type="password" name="password" placeholder="Contraseña">
  
				  </div>
				  <input type="submit" value="Login" class="button">
				  <!--<input class="btn btn-success" type="submit" value="Ingresar">-->
				  <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
				  <p>¿No tienes una cuenta? <a class="link" href="registrarvista.php">Registrate </a></p>
			  </div>
		  </form>



</body>

</html>