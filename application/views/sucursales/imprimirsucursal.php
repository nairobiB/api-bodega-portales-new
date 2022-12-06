<?php
    $conexion=mysqli_connect('localhost', 'root', 'Sirm9705*', 'bodeguita')
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>HTML</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilo.css">
</head>

<body>
  <h1>Reporte de Sucursales.</h1>

  <table border="1">
    <tr>
        <td>Id Sucursal</td>
        <td>Descripcion Sucursal</td>
        <td>Telefono Sucursal</td>
        <td>Email</td>
        <td>Direccion de Sucursal</td>
      
    </tr>

    <?php 
        $sql="SELECT * from sucursales" ;
        $result=mysqli_query($conexion,$sql); 
        
        while($imprimir=mysqli_fetch_array($result)){
    ?>

    <tr>
        <td><?php echo $imprimir['IdSucursal'] ?></td>
        <td><?php echo $imprimir['DescSucursal'] ?></td>
        <td><?php echo $imprimir['telsucursal'] ?></td>
        <td><?php echo $imprimir['email'] ?></td>
        <td><?php echo $imprimir['direccionsucursal'] ?></td>
    </tr>

    <?php
    }
    ?>

</table>
  <script>
        window.addEventListener("load", window.print());
    </script>
</body>
</html>