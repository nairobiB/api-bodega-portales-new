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
  <h1>Reporte de Categorias.</h1>

  <div class="container-sm">
    <table class="table table-bordered">
        <thead class="">
            <tr>
                <td>Id Categoria</td>
                <td>Nombre Categoria</td>
                <td>Estado</td>
            </tr>
        </thead>

        <tbody class="table-group-divider">
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
        </tbody>
    </table>
  </div>

  <script>
        window.addEventListener("load", window.print());
    </script>
</body>
</html>