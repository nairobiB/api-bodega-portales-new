<?php
    $conexion=mysqli_connect('localhost', 'portales', 'Portales2.', 'bodegajn')
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>HTML</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilo.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <center>
        <h2>Reporte del Personal</h2>
    </center>
  <!-- <h1>Reporte del Personal.</h1> -->
    <div class="container-sm">
    <table class="table table-bordered">
        <thead class="">
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
        </thead>
        <tbody class="table-group-divider">
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
        </tbody>
</table>
    </div>

  <script>
        window.addEventListener("load", window.print());
    </script>
</body>
</html>