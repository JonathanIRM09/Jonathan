<?php

include ("Conexion.php");

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$celular = $_POST['celular'];
$nacimiento = $_POST['fecha_nacimiento'];
$contrasena = $_POST['password'];
$sql = mysqli_query($con,"INSERT INTO usuarios(id,NOMBRE,APELLIDO,CORREO,CELULAR,NACIMIENTO,CONTRASENA, Id_cargo)
VALUES (0, '$nombre', '$apellido', '$correo', '$celular', '$nacimiento', '$contrasena', 2)");

if($sql){
    echo "Registro exitoso";
    header("location: Login.html");
}else{
    echo "Fallo el registro";
}

?>