<?php
 include("Conexion.php");

 $id = $_GET['id'];
 $eliminar = "DELETE FROM usuarios WHERE id = '$id'";

 $resultado = mysqli_query($con, $eliminar);

 if ($resultado) {
     
    header("location:http://localhost/Jonathan/edicion.php");

 } else {

   echo"<script>alert('No se pudo eliminar los datos'); window.history.go(-1);</script>";

 }