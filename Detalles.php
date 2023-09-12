<?php
include("conexion.php");
$sql = mysqli_query($con, "SELECT * FROM detalles");
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



    <div>
        <table id="theTable" class="display"
            style=" width: 90%; background-color:azure; margin:auto; margin-top:3%; text-align:center;">
            <thead style="font-size: xx-large;">
                <th>Producto</th>
                <th>Precio</th>
                <th>Fecha</th>
            </thead>
            <form action="aDetalles.php" method="post">
                <tbody style="font-size: x-large;">
                    <?php while ($row = $sql->fetch_assoc()) { ?>
                        <tr>
                            <td>
                                <?php echo $row['Nombre_D']; ?>
                            </td>
                            <td>
                                <?php echo $row['Precio_D']; ?>
                            </td>
                            <td>
                                <?php echo $row['Fecha_D']; ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </form>
        </table>
    </div>
    <footer class="Pie">
        <h1 id="Contacto">
            Contacto
        </h1>
        <p id="Datos">
            México, 44600 Guadalajara, Jal., Santa Teresita, 44600<br>33-14-65-02-09<br>atencionaclientes@tenki.mx<br>
        </p>
    </footer>
</body>

</html>