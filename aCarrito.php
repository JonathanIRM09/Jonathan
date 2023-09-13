<?php

include ("Conexion.php");
$nombre = $_POST['nombrep'];
$precio = $_POST['precio'];

$sql = mysqli_query($con, "INSERT INTO carrito(id_C, Nombre_C, Precio_C) VALUES (0, '$nombre', '$precio')");
header("location: Productos.php");

?>
