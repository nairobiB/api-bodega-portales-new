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
                        <label> Fecha de Salida </label>
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



<!-- ################################################################################################################################################################################# -->


<!-- Modal -->
<!-- ELIMINAR UNA SALIDA -->
<div class="modal fade" id="borrarsalida" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Eliminar Salida</h1>
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
                    <button type="submit" name="btnsi" id="btnsidel" class="btn btn-primary">Si</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- ############################################################################################################################################################################################ -->

<!-- Modal -->
<!-- MODIFICAR UN DETALLE SALIDA -->
<div class="modal fade" id="modetalle" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modificar Detalle</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label> Codigo </label>
                        <input type="text" name="detallecod" id="detallecod" class="form-control" disabled=»disabled»>
                    </div>
                    <div class="form-group">
                        <label> Id Producto </label>
                        <input type="text" name="codprod" id="codprod" class="form-control" disabled=»disabled» placeholder="Id del Producto">
                    </div>
                    <div class="form-group">
                        <label> Cantidad </label>
                        <input type="text" name="cantidadsalida" id="cantidadsalida" class="form-control" placeholder="Cantidad">
                    </div>

                    <div class="form-group">
                        <label> Precio </label>
                        <input type="text" name="preciosalida" id="preciosalida" class="form-control" placeholder="Precio">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btnmodificar">Cerrar</button>
                    <button type="submit" id="detallemod" class="btn btn-primary">Guardar cambios</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- ################################################################################################################################################################################# -->


<!-- Modal -->
<!-- ELIMINAR UN DETALLE DE SALIDA -->
<div class="modal fade" id="borrardetallesalida" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Eliminar Entrada</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label> Codigo de detalles</label>
                        <input type="text" id="elimcodigo" class="form-control" disabled=»disabled»>
                    </div>
                    <div class="form-group">
                        <label> Codigo Producto </label>
                        <input type="text" id="elimcodigoproducto" class="form-control" disabled=»disabled»>
                    </div>
                    <h4>Quiere eliminar este registro?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btnno">No</button>
                    <button type="submit" name="btnaccionardetalle" id="btnaccionardetalle" class="btn btn-primary">Si</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- ############################################################################################################################################################################################ -->

<!-- TABLA DE SALIDAS -->
<br>
<center><img src="public/assets/images/pedido.png" alt="" srcset="" width="200px">
    <h2>NUESTRAS SALIDAS</h2>
    <br>
</center>
<div class="container">

    <table class="table table-striped table-responsive-lg">
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
            foreach ($lista as $f) {
            ?>
                <tr>
                    <td scope="row"><?php echo $f['Codsalida']; ?></a>
                    </td>
                    <td><?php echo $f['FechaVenta']; ?>
                    </td>
                    <td><?php echo $f['NomUsr']; ?>
                    </td>
                    <td>
                        <div class="btn-group" role="group">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-warning btn-sm modsalida" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Modificar
                            </button>
                            <button type="submit" class="btn btn-outline-danger btn-sm btneliminarsalida" name="btnborrar" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
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
                <th scope="col">Id Producto</th>
                <th scope="col">Nombre Producto</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio de Salida</th>
                <th scope="col">Accion</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($listadetalle as $f) {
            ?>
                <tr>
                    <td scope="row"><?php echo $f->Codsalida; ?></a>
                    </td>
                    <td><?php echo $f->IdProd; ?>
                    </td>
                    <td><?php echo $f->NomProd; ?>
                    </td>
                    <td><?php echo $f->Cantidad; ?>
                    </td>
                    <td><?php echo $f->Precsalida; ?>
                    </td>
                    <td>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-outline-warning btn-sm detsalida" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Modificar
                            </button>
                            <button type="submit" class="btn btn-outline-danger btn-sm deteliminarsalida" name="detborrar" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Eliminar
                            </button>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>

    </table>
</div>

<div class="card-footer clearfix">
    <center>
        <br><br>
        <img src="public/assets/images/imprimir.png" alt="" srcset="" width="80px">
        <div class="container">
        <a class="btn btn-outline-info btn-lg imprimirsalidas" href="/salidas/imprimirsalidas">Generar Reporte</a>
        </div>
    </center>
 
 <!--<a class="btn btn-primary Pdf" href="/categorias/pdf">PDF</a> -->
</div>
</div>
</div>
</section>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
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
<script>
    $("#btnsidel").on("click", function() {
        $.post(
            "/salidas/eliminarSalida", {
                Codsalida: $("#delcodsalida").val(),
            }//,
            // function(data, status) {
            //     alert("Data: " + data + "\nStatus: " + status);
            // }
        );
    });
</script>
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
<script>
    $("#modsalida").on("click", function() {
        $.post(
            "/salidas/modificarSalida", {
                Codsalida: $("#codsalida").val(),
                FechaVenta: $("#fechaventa").val(),
                NomUsr: $("#encargadosalida").val(),
            }//,
            // function(data, status) {
            //     alert("Data: " + data + "\nStatus: " + status);
            // }
        );
    });
</script>

<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
<!--Script PARA MODIFICAR DETALLE DE SALIDA-->
<script>
    $(document).ready(function() {
        $('.detsalida').on('click', function() {
            $('#modetalle').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            $('#detallecod').val(data[0]);
            $('#codprod').val(data[1]);
            $('#cantidadsalida').val(data[3]);
            $('#preciosalida').val(data[4]);
        });
    });
</script>

<!-- MODIFICAR UN DETALLE DE SALIDA -->
<script>
    $('#detallemod').on('click', function() {
        $.post(
            "/salidadetalle/modificardetalleS", {
                Codsalida: $("#detallecod").val(),
                IdProd: $("#codprod").val(),
                Cantidad: $("#cantidadsalida").val(),
                Precsalida: $("#preciosalida").val(),
            }//,
            // function(data, status) {
            //     alert("Data: " + data + "\nStatus: " + status);
            // }
        );
    });
</script>
<!-- SCRIPT PARA ELIMINAR UN DETALLE DE SALIDA-->
<script>
    $(document).ready(function() {
        // lo hacemos con una class
        $('.deteliminarsalida').on('click', function() {
            $('#borrardetallesalida').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            $('#elimcodigo').val(data[0]);
            $('#elimcodigoproducto').val(data[1]);


        });
    });
</script>
<!-- //ESTO ELIMINA LOS CAMPOS DE LA TABLA DE DETALLE DE salidas -->
<script>
    $('#btnaccionardetalle').on('click', function() {
        $.post(
            "/salidadetalle/eliminardetalleS", {
                Codsalida: $("#elimcodigo").val(),
                IdProd: $("#elimcodigoproducto").val(),
            }//,
            // function(data, status) {
            //     alert("Data: " + data + "\nStatus: " + status);
            // }
        );
    });
</script>
</article>