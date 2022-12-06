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
  <h1>Reporte de Categorias.</h1>

  <table border="1">
    <tr>
        <td>Id Proveedor</td>
        <td>Nombre Proveedor</td>
        <td>Telefono Proveedor</td>
        <td>Direccion Proveedor</td>
        <td>Estado</td>
        <td>Email</td>
      
    </tr>

    <?php 
        $sql="SELECT * from proveedores" ;
        $result=mysqli_query($conexion,$sql); 
        
        while($imprimir=mysqli_fetch_array($result)){
    ?>

    <tr>
        <td><?php echo $imprimir['IdProv'] ?></td>
        <td><?php echo $imprimir['Nomproveedor'] ?></td>
        <td><?php echo $imprimir['Telproveedor'] ?></td>
        <td><?php echo $imprimir['Dirproveedor'] ?></td>
        <td><?php echo $imprimir['Estado'] ?></td>
        <td><?php echo $imprimir['email'] ?></td>
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