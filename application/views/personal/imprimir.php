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
  <h1>Reporte del Personal.</h1>

  <table border="1">
    <tr>
        <td>Id Persona</td>
        <td>Telefono</td>
        <td>Nombre</td>
        <td>Apellido</td>
        <td>Direccion</td>
        <td>Email</td>
        <td>Estado</td>
        <td>Fecha de Nacimiento</td>
    </tr>

    <?php 
        $sql="SELECT * from personal" ;
        $result=mysqli_query($conexion,$sql); 
        
        while($imprimir=mysqli_fetch_array($result)){
    ?>

    <tr>
        <td><?php echo $imprimir['IdPer'] ?></td>
        <td><?php echo $imprimir['TelPer'] ?></td>
        <td><?php echo $imprimir['NomPer'] ?></td>
        <td><?php echo $imprimir['ApePer'] ?></td>
        <td><?php echo $imprimir['DirPer'] ?></td>
        <td><?php echo $imprimir['Email'] ?></td>
        <td><?php echo $imprimir['Estado'] ?></td>
        <td><?php echo $imprimir['fecha_nacimineto'] ?></td>
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