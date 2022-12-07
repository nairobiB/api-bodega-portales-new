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
        <h2>Reporte de Proveedores</h2>
    </center>
    <div class="container-sm">
        <table border="table table-bordered">
            <thead class="">
                <tr>
                    <td>Id Proveedor</td>
                    <td>Nombre Proveedor</td>
                    <td>Telefono Proveedor</td>
                    <td>Direccion Proveedor</td>
                    <td>Estado</td>
                    <td>Email</td>
                </tr>
            </thead>
            <tbody class="table-group-divider">
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
            </tbody>

        

    </table>
    </div>

  
  <script>
        window.addEventListener("load", window.print());
    </script>
</body>
</html>