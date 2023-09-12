<?php
 include("Conexion.php");
 $usuarios = "SELECT * FROM usuarios";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link rel="stylesheet" href="EstiloUsu.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
</head>
<body>

   <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
          <i class="fas fa-bars"></i>
      </label>
      <a href="Admin.php" class="enlace">
          <img src="Imagenes/unicomNF.png" alt="" class="logo">
      </a>
      <ul>
          <li><a href="Admin.php">Inicio</a></li>
          <li><a href="Admin.php">Productos</a></li>
          <li><a href="Usuarios.php">Usuarios</a></li>
          <li><a href="Registro.html">Registro</a></li>
          <li><a href="Login.html">Cerrar Sesion</a></li>
      </ul>
  </nav>

    <div class="container-add">
        <h2 class="container__title">Registrar Usuario</h2>
        <form action="insertar.php" method="post" class="container__form">
           <label for="" class="container__label">Nombre:</label>
           <input name="nombre" type="text" class="container__input">
           <label for="" class="container__label">Apellido:</label>
           <input name="apellido" type="text" class="container__input">
           <label for="" class="container__label">Correo:</label>
           <input name="correo" type="text" class="container__input">
           <label for="" class="container__label">Celular:</label>
           <input name="celular" type="text" class="container__input">
           <label for="" class="container__label">Nacimiento:</label>
           <input name="nacimiento" type="text" class="container__input">
           <label for="" class="container__label">Contraseña:</label>
           <input name="contrasena" type="text" class="container__input">
           <label for="" class="container__label">Id_cargo:</label>
           <input name="cargo" type="text" class="container__input">
           <input class="container__submit" type="submit" value="Registrar">
        </form>
    </div>


    


    <div class="container-table">

       <div class="table__title">Usuarios <a href="edicion.php" class="title_edit">Edicion</a></div>
       <div class="table__header">Nombre</div>
       <div class="table__header">Apellido</div>
       <div class="table__header">Correo</div>
       <div class="table__header">Celular</div>
       <div class="table__header">Nacimiento</div>
       <div class="table__header">Contraseña</div>
       <div class="table__header">Id_Cargo</div>
     
       <?php $resultado = mysqli_query($con, $usuarios);
       while($row=mysqli_fetch_assoc($resultado)) {  ?>
       <div class="table__item"><?php echo $row["NOMBRE"]; ?> </div>
       <div class="table__item"><?php echo $row["APELLIDO"];  ?> </div>
       <div class="table__item"><?php echo $row["CORREO"];   ?> </div>
       <div class="table__item"><?php echo $row["CELULAR"];  ?> </div>
       <div class="table__item"><?php echo $row["NACIMIENTO"];  ?> </div>
       <div class="table__item"><?php echo $row["CONTRASENA"];  ?> </div>
       <div class="table__item"><?php echo $row["Id_cargo"];  ?> </div>
       <?php } mysqli_free_result($resultado); ?>

    </div>



<footer id = "Pie">
    <h3>Contacto</h3>
    <p>Correo: alma.munoz@unicomgdl.com.mx<br>Telefono: 3336678810</p>
</footer>
</body>
</html>
