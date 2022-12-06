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
  <h1>Reporte de Productos.</h1>

  <table border="1">
    <tr>
        <td>Id Producto</td>
        <td>Nombre Producto</td>
        <td>Precio Producto</td>
        <td>Precio Compra</td>
        <td>En Stock</td>
        <td>Descripcion</td>
        <td>Id Proveedor</td>
        <td>Id Categoria</td>
        <td>Fecha de Caducidad</td>
        <td>Numero de Lote</td>
        <td>Id Sucursal</td>
      
    </tr>

    <?php 
        $sql="SELECT * from productos" ;
        $result=mysqli_query($conexion,$sql); 
        
        while($imprimir=mysqli_fetch_array($result)){
    ?>

    <tr>
        <td><?php echo $imprimir['IdProd'] ?></td>
        <td><?php echo $imprimir['NomProd'] ?></td>
        <td><?php echo $imprimir['PrecProd'] ?></td>
        <td><?php echo $imprimir['PrecCompra'] ?></td>
        <td><?php echo $imprimir['stock'] ?></td>
        <td><?php echo $imprimir['Descripcion'] ?></td>
        <td><?php echo $imprimir['IdProv'] ?></td>
        <td><?php echo $imprimir['IdCat'] ?></td>
        <td><?php echo $imprimir['FechaCad'] ?></td>
        <td><?php echo $imprimir['numero_lote'] ?></td>
        <td><?php echo $imprimir['IdSucursal'] ?></td>
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