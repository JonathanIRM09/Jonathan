<?php
include("Conexion.php");
$sql = mysqli_query($con, "SELECT * FROM carrito");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unicom</title>
    <link rel="stylesheet" href="EstiloA.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
</head>
<body>

   <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
          <i class="fas fa-bars"></i>
      </label>
      <a href="Productos.php" class="enlace">
          <img src="Imagenes/unicomNF.png" alt="" class="logo">
      </a>
      <ul>
          <li><a href="Productos.php">Inicio</a></li>
          <li><a href="Productos.php">Productos</a></li>
          <li><a href="Ubicacion.html">Ubicacion</a></li>
          <li><a href="#">Registro</a></li>
          <li><a href="Login.html">Cerrar Sesion</a></li>
      </ul>
      
  </nav>




  <div>
        <?php error_reporting(0);
        $buscar = $_REQUEST['buscar'];
        ?>
        <table id="theTable" class="display"
            style=" width: 90%; background-color:azure; margin:auto; margin-top:3%; text-align:center;">
            <thead style="font-size: xx-large;">
                <th>Producto</th>
                <th>Precio</th>
                <th>Opciones</th>
            </thead>
            <a href="Detalles.php"></a>
            <form action="index.php" method="post">
                <tbody style="font-size: x-large;">
                    <?php while ($row = $sql->fetch_assoc()) { ?>
                        <tr>
                            <td>
                                <?php echo $row['Nombre_C']; ?>
                                <input type="hidden" name="Nombre_C" value="<?php echo $row['Nombre_C']; ?>">
                            </td>
                            <td>
                                <?php echo $row['Precio_C']; ?>
                                <input type="hidden" name="Precio_C" value="<?php echo $row['Precio_C']; ?>">
                            </td>
                            <td><a href="elCarrito.php?id=<?php echo $row["id_C"]; ?>">Eliminar</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
                <td>
                                
                <input placeholder="Correo para factura" id="Correo" name="Correo">
                <button type="submit" name="comprar" id="comprar">
                        Pagar
                    </button>
                            </td>

                
                
                </div>
            </form>
        </table>
    </div>





  <footer id = "Pie">
    <h3>Contacto</h3>
    <p>Correo: alma.munoz@unicomgdl.com.mx<br>Telefono: 3336678810</p>
</footer>
</body>
</html>