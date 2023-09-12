<?php

include("Conexion.php");

$id = $_POST['id'];
$nombrep = $_POST['nombrep'];
$precio = $_POST['precio'];
$imagen = $_POST['imagen'];

$sql = mysqli_query($con, "UPDATE productos SET nombrep='$nombrep', precio='$precio', imagen='$imagen' WHERE id='$id'");

header("location:http://localhost/Jonathan/Admin.php");

?>