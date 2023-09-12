<?php
include ("Conexion.php");


$id = $_GET['id'];
$sql = mysqli_query($con, "DELETE FROM productos WHERE id='$id'");

header("location:http://localhost/Jonathan/Admin.php");

?>