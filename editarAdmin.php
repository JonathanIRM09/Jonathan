<?php 
include("Conexion.php");
$id = $_GET["id"];
$sql = mysqli_query($con, "SELECT * FROM productos WHERE id='$id'");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edicion</title>
    <link rel="stylesheet" href="EstiloA.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
</head>

<body>

   <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
          <i class="fas fa-bars"></i>
      </label>
      <a href="editarAdmin.php" class="enlace">
          <img src="Imagenes/unicomNF.png" alt="" class="logo">
      </a>
      <ul>
          <li><a href="editarAdmin.php">Inicio</a></li>
          <li><a href="editarAdmin.php">Productos</a></li>
          <li><a href="Usuarios.php">Usuarios</a></li>
          <li><a href="Registro.html">Registro</a></li>
          <li><a href="Login.html">Cerrar Sesion</a></li>
      </ul>
  </nav>

  

  <div class="container-add">
  <?php $row = mysqli_fetch_assoc($sql) ?>
  <h2 class="container__title">Editar Producto</h2>
       <form action="eProductos.php" method="POST" class="container__form">


            <div class="in-Prod">      
                <input type="hidden" class="Regp" placeholder="id" id="id" name="id" value="<?php echo $row["id"];?>">
            </div>
            <div class="in-Prod">
            <label for="" class="container__label">Producto:</label>      
                <input class="Regp" placeholder="nombrep" id="nombrep" name="nombrep" value="<?php echo $row["nombrep"];?>">
            </div>
            <div class="in-Prod">      
            <label for="" class="container__label">Precio:</label>
                <input  class="Regp" placeholder="precio" id="precio" name="precio" value="<?php echo $row["precio"];?>">
            </div>
            <div class="in-Prod">      
            <label for="" class="container__label">URL Imagen:  </label>     
                <input class="Regp" placeholder="imagen" id="imagen" name="imagen" value="<?php echo $row["imagen"];?>">
            </div>
           
            
            <button class="BLogin" type="submit">
                Editar
            </button>
            
        </form>
        </div>


<footer id = "Pie">
    <h3>Contacto</h3>
    <p>Correo: alma.munoz@unicomgdl.com.mx<br>Telefono: 3336678810</p>
</footer>
</body>
</html>