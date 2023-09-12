<?php

include("Conexion.php");
$nombre = $_POST['Nombre'];
$precio = $_POST['Precio'];
$sql = mysqli_query($con, "INSERT INTO detalles select id_C, Nombre_C, CURDATE(), Precio_C from carrito");
$vaciar = mysqli_query($con, "TRUNCATE TABLE carrito");
header("location:http://localhost/Jonathan/Productos.php");

?>