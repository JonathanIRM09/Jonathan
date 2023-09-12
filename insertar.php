<?php
 include("Conexion.php");

 $nombre = $_POST["nombre"];
 $apellido = $_POST["apellido"];
 $correo = $_POST["correo"];
 $celular = $_POST["celular"];
 $nacimiento = $_POST["nacimiento"];
 $contrasena = $_POST["contrasena"];
 $cargo = $_POST["cargo"];

 $insertar = "INSERT INTO usuarios(NOMBRE, APELLIDO, CORREO, CELULAR, NACIMIENTO, CONTRASENA, Id_cargo) 
 VALUES ('$nombre', '$apellido', '$correo', '$celular', '$nacimiento', '$contrasena', '$cargo')";

 $resultado = mysqli_query($con, $insertar);

 if($resultado) {

    header("location:http://localhost/Jonathan/Usuarios.php");

 } else {
    echo "<script>alert('No se pudo registrar');window.history.go(-1);</script";
 }
