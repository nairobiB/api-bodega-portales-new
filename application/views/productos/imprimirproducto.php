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
        <h2>Reporte de Productos</h2>
    </center>

    <div class="container-sm">
        <table class="table table-bordered">
            <thead class="">
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
            </thead>
            <tbody class="table-group-divider">
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
            </tbody>
        </table>
    </div>
  <script>
        window.addEventListener("load", window.print());
    </script>
</body>
</html>