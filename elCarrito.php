<?php 

include("Conexion.php");

$id = $_GET['id'];
$sql = mysqli_query($con, "DELETE FROM carrito WHERE id_C='$id'");
header("location:http://localhost/Jonathan/Carrito.php");

?>