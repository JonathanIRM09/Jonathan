<?php
include ('Conexion.php');
$email = $_POST['CORREO'];
$password = $_POST['CONTRASENA'];

$query = mysqli_query($con, "SELECT * FROM usuarios where CORREO = '".$email."' and CONTRASENA = '".$password."'");

$cont = mysqli_fetch_array($query);


if($cont['Id_cargo']==1){   
    header("location: Admin.php");
}else
if($cont['Id_cargo']==2)
{
    header("location: Productos.php");
}
else
{
    header("location: Error.html");
}
?>
