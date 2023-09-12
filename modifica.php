<?php
 include("Conexion.php");

 $id = $_POST['id'];
 $nombre = $_POST['nombre'];
 $apellido = $_POST['apellido'];
 $correo = $_POST['correo'];
 $celular = $_POST['celular'];
 $contrasena = $_POST['contrasena'];
 $cargo = $_POST['cargo'];

 $actualizar = "UPDATE usuarios SET nombre='$nombre', apellido='$apellido', correo='$correo', celular='$celular', contrasena='$contrasena', Id_cargo='$cargo' WHERE id='$id'";
 
  $resultado=mysqli_query($con, $actualizar);

 if ($resultado) {
     
    header("location:http://localhost/Jonathan/Usuarios.php");

 } else {

   echo"<script>alert('No se pudo modificar los datos'); window.history.go(-1);</script>";

 }