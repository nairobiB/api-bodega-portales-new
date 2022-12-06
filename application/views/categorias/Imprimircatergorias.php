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
        <td>Id Categoria</td>
        <td>Nombre Categoria</td>
        <td>Estado</td>
      
    </tr>

    <?php 
        $sql="SELECT * from categorias" ;
        $result=mysqli_query($conexion,$sql); 
        
        while($imprimir=mysqli_fetch_array($result)){
    ?>

    <tr>
        <td><?php echo $imprimir['IdCat'] ?></td>
        <td><?php echo $imprimir['NombreCat'] ?></td>
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