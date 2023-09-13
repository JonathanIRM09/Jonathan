<?php
include ("Conexion.php");

$nombrep = $_POST['nombrep'];
$precio = $_POST['precio'];
$imagen = $_POST['imagen'];

$sql = mysqli_query($con, "INSERT INTO productos(id, nombrep, precio, imagen) VALUES (0,'$nombrep','$precio','$imagen')");


    header("location: Admin.php");


?>
