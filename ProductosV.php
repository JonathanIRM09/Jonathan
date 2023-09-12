<?php
include("Conexion.php");
$sql = mysqli_query($con, "SELECT id, nombrep, precio, imagen FROM productos WHERE 1");
$resultado = mysqli_fetch_all($sql, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unicom</title>
    <link rel="stylesheet" href="EstiloPro.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
</head>

      <body>

      <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
          <i class="fas fa-bars"></i>
      </label>
      <a href="Index.html" class="enlace">
          <img src="Imagenes/unicomNF.png" alt="" class="logo">
      </a>
      <ul>
          <li><a href="Index.html">Inicio</a></li>
          <li><a href="ProductosV.php">Productos</a></li>
          <li><a href="Ubicacion.html">Ubicacion</a></li>
          <li><a href="Registro.html">Registro</a></li>
          <li><a href="Login.html">Login</a></li>
      </ul>
      
     </nav>



    <section class="products">
    <h2></h2>
		<div class="all-products">
        <?php
        foreach ($resultado as $row) {
            ?>
            <form method="POST" action="Login.html">
                   <?php

                    $id = $row['id'];
                    $imagen = $row['imagen'];
                    if (empty($imagen)) {
                        $imagen = "img/productos/no-img.jpg";
                    }
                    ?>
			<div class="product">
            <a><img src="<?php echo $imagen; ?>"></a>
				<div class="product-info">
					<h4 class="product-title">
                        <?php echo $row["nombrep"]; ?>
                        <input type="hidden" name="nombrep" value="<?php echo $row["nombrep"]; ?>">
					</h4>
					<p class="product-price">
                    <span class="precio">$
                            <?php echo $row["precio"]; ?>
                            <input type="hidden" name="precio" value="<?php echo $row["precio"]; ?>">
                        </span>
                    </p>
                    <a>
					<button type="submit" class="product-btn">Añadir carrito</button>
                </a>
				</div>
			</div>
                </form>
           <?php
        }
        ?>
        </div>
        <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
     </section>
     




    <footer id = "Pie">
    <h3>Contacto</h3>
    <p>Correo: alma.munoz@unicomgdl.com.mx<br>Telefono: 3336678810</p>
</footer>
</body>
</html>