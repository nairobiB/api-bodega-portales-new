<?php

require_once('vistas/plantilla/head.php');
require_once('vistas/plantilla/nav.php');
require_once('vistas/plantilla/titulo.php');
?>

<!-- Modal -->
<!-- MODIFICAR UNA SALIDA -->
<div class="modal fade" id="modificarsalida" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modificar Salida</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label> Codigo </label>
                        <input type="text" name="codsalida" id="codsalida" class="form-control" disabled=»disabled»>
                    </div>
                    <div class="form-group">
                        <label> Fecha de Entrada </label>
                        <input type="text" name="fechaventa" id="fechaventa" class="form-control" placeholder="Ingrese la fechaventa de entradaa">
                    </div>


                    <div class="form-group">
                        <label> Encargado </label>
                        <input type="text" name="encargadosalida" id="encargadosalida" class="form-control" placeholder="Ingrese el encargadosalida">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btnmodificar">Cerrar</button>
                    <button type="submit" name="modsalida" id="modsalida" class="btn btn-primary">Guardar cambios</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>


<!-- ################################################################################################################################################################################# -->


<!-- Modal -->
<!-- ELIMINAR UNA ENTRADA -->
<div class="modal fade" id="borrarsalida" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Eliminar Entrada</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label> Codigo </label>
                        <input type="text" name="delcodsalida" id="delcodsalida" class="form-control" disabled=»disabled»>
                    </div>
                    <h4>Quiere eliminar este registro?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btnnodel">No</button>
                    <button type="submit" name="btnsidel" id="btnsidel" class="btn btn-primary">Si</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

<!-- ############################################################################################################################################################################################ -->

<!-- TABLA DE SALIDAS -->
<div class="container">
    <p>Módulo de gestión de <?php echo $this->titulo ?></p>
    <h3>SALIDAS</h3>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Fecha Venta</th>
                <th scope="col">Encargado</th>
                <th scope="col">Accion</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($this->datos as $f) {
            ?>
                <tr>
                    <td scope="row"><a href=""><?php echo $f['Codsalida']; ?></a>
                    </td>
                    <td><?php echo $f['FechaVenta']; ?>
                    </td>
                    <td><?php echo $f['NomUsr']; ?>
                    </td>
                    <td>
                        <div class="btn-group" role="group">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary modsalida" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Modificar
                            </button>
                            <button type="submit" class="btn btn-danger btneliminarsalida" name="btnborrar" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Eliminar
                            </button>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>

    </table>
    <!-- ############################################################################################################################################################################### -->
    <!-- TABLA DE DETALLE SALIDAS -->
    <h3>DETALLE SALIDAS</h3>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">ID Producto</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio de Salida</th>
                <th scope="col">Accion</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($this->datosdetalle as $f) {
            ?>
                <tr>
                    <th scope="row"><a href=""><?php echo $f['Codsalida']; ?></a>
                    </th>
                    <td><?php echo $f['IdProd']; ?>
                    </td>
                    <td><?php echo $f['Cantidad']; ?>
                    </td>
                    <td><?php echo $f['PrecSalida']; ?>
                    </td>
                    <td>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-primary">Mod</button>
                            <button type="button" class="btn btn-warning">Del</button>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>

    </table>
</div>
</div>
</div>
</section>
<?php
require_once('vistas/plantilla/pie.php');
require_once('vistas/plantilla/js.php');
?>
<!-- SCRIPT PARA ELIMINAR -->
<script>
    $(document).ready(function() {
        // lo hacemos con una class
        $('.btneliminarsalida').on('click', function() {
            $('#borrarsalida').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            $('#delcodsalida').val(data[0]);

        });
    });
</script>

<!-- ################################################################################################################### -->

<!--Script PARA MODIFICAR-->
<script>
    $(document).ready(function() {
        $('.modsalida').on('click', function() {
            $('#modificarsalida').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            $('#codsalida').val(data[0]);
            $('#fechaventa').val(data[1]);
            $('#encargadosalida').val(data[2]);

        });
    });
</script>
<?php
require_once('vistas/plantilla/fin.php');
?>
</article>