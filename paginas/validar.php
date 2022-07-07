<?php
include('con_db.php');
$email=$_POST['email'];
$password=$_POST['password'];


$consulta="SELECT*FROM datos where email='$email' and password='$password'";
$resultado=mysqli_query($conex,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:index.html");

}else{
    ?>
    <?php
    include("loginvista.php");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conex);
