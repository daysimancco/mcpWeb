<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['email']) >= 1  && strlen($_POST['password']) >= 1) {
	    $name = trim($_POST['name']);
		$ape= trim($_POST['apellido']);
	    $email = trim($_POST['email']);
		$password = trim($_POST['password']);
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO datos(nombre, apellido, email, password, fecha_reg) VALUES ('$name','$ape','$email','$password','$fechareg')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {

	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
        

	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>