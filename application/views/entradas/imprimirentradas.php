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
  <h1>Reporte de Entradas.</h1>

  <table border="1">
    <tr>
        <td>Id Compra</td>
        <td>Fecha Entrada</td>
        <td>Id Proveedor</td>
        <td>Nombre Usuario</td>
        <td>Estado</td>
      
    </tr>

    <?php 
        $sql="SELECT * from entradas" ;
        $result=mysqli_query($conexion,$sql); 
        
        while($imprimir=mysqli_fetch_array($result)){
    ?>

    <tr>
        <td><?php echo $imprimir['IdCompra'] ?></td>
        <td><?php echo $imprimir['Fechaentrada'] ?></td>
        <td><?php echo $imprimir['IdProv'] ?></td>
        <td><?php echo $imprimir['NomUsr'] ?></td>
        <td><?php echo $imprimir['Estado'] ?></td>
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