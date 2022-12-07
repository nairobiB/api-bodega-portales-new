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
        <br>
        <h2>Reporte de Entradas</h2>
    </center>
    <div class="container-sm">
        <table class="table table-bordered">
            <thead class="">
                <tr>
                    <td>Id Compra</td>
                    <td>Fecha Entrada</td>
                    <td>Id Proveedor</td>
                    <td>Nombre Usuario</td>
                    <td>Estado</td>
                </tr>
            </thead>
            <tbody class="table-group-divider">
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
            </tbody>

        </table>
    </div>
  <script>
        window.addEventListener("load", window.print());
    </script>
</body>
</html>