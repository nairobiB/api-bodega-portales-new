<!-- Modal -->
<!-- MODIFICAR UNA SUCURSAL -->
<div class="modal fade" id="modificarsucursales" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modificar sucursal</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label> ID Sucursal </label>
                        <input type="text" name="IdSucursal" id="IdSucursal" class="form-control" disabled=»disabled»>
                    </div>
                    <div class="form-group">
                        <label> Descripcion Sucursal </label>
                        <input type="text" name="DescSucursal" id="DescSucursal" class="form-control" placeholder="Ingrese la Descripcion de la Sucursal">
                    </div>
                    <div class="form-group">
                        <label> Telefono Sucursal </label>
                        <input type="text" name="telsucursal" id="telsucursal" class="form-control" placeholder="Ingrese el telefono de la sucursal">
                    </div>

                    <div class="form-group">
                        <label> Email</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="Ingrese el email de la sucursal">
                    </div>
                    <div class="form-group">
                        <label> Direcion Sucursal </label>
                        <input type="text" name="direccionsucursal" id="direccionsucursal" class="form-control" placeholder="Ingrese la direccion de la sucursal">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btnmodificar">Cerrar</button>
                    <button type="submit" name="modificar" id="modificarS" class="btn btn-primary">Guardar cambios</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>


<!-- ################################################################################################################################################################################# -->


<!-- Modal -->
<!-- ELIMINAR UNA SUCURSAL -->
<div class="modal fade" id="borrarsucursal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Eliminar Sucursal</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label> ID Sucursal </label>
                        <input type="text" name="delIdSucursal" id="delIdSucursal" class="form-control" disabled=»disabled»>
                    </div>
                    <h4>Quiere eliminar este registro?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btnno">No</button>
                    <button type="submit" name="btnconfirmar" id="btnconfirmar" class="btn btn-primary">Si</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

<div class="container">
    <br>
<center><img src="public/assets/images/mapa.png" alt="" srcset="" width="200px">
    <h2>NUESTRAS SUCURSALES</h2>
    <br>
</center>

</article>
<table class="table table-striped table-responsive-lg">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Telefono</th>
            <th scope="col">Correo</th>
            <th scope="col">Direccion</th>
            <th scope="col">Acción</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($lista as $f) {
        ?>
            <tr>
                <td scope="row"><?php echo $f['IdSucursal']; ?>
                </td>
                <td><?php echo $f['DescSucursal']; ?>
                </td>
                <td><?php echo $f['telsucursal']; ?>
                </td>
                <td><?php echo $f['email']; ?>
                </td>
                <td><?php echo $f['direccionsucursal']; ?>
                </td>
                <td>
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-outline-warning btn-sm modsucursales" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Modificar
                        </button>
                        <button type="submit" class="btn btn-outline-danger btn-sm Btneliminarsucur" name="detborrar" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Eliminar
                        </button>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </tbody>

</table>
</div>

</div>

<div class="card-footer clearfix">
    <center>
    <br><br>
        <img src="public/assets/images/imprimir.png" alt="" srcset="" width="80px">
        <div class="container">
            <br>
        <a class="btn btn-outline-info btn-lg imprimirsucursal" href="/sucursales/imprimirsucursal">Generar Reporte</a>
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

<!--Script PARA MODIFICAR SUCURSALES-->
<script>
    $(document).ready(function() {
        //esa clase esta en el boton de modificar de la tabla de entradas
        $('.modsucursales').on('click', function() {
            //este id es el id del modal
            $('#modificarsucursales').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);
            //estos son los id de los campos que estan dentro del modal
            $('#IdSucursal').val(data[0]);
            $('#DescSucursal').val(data[1]);
            $('#telsucursal').val(data[2]);
            $('#email').val(data[3]);
            $('#direccionsucursal').val(data[4]);
        });
    });
</script>
<!-- ACCION QUE HARA EL BOTON AL DARLE CLICK EN GUARDAR CAMBIOS -->
<script>
    $('#modificarS').on('click', function() {
        $.post(
            "/sucursales/modificar", {
                IdSucursal: $("#IdSucursal").val(),
                DescSucursal: $("#DescSucursal").val(),
                telsucursal: $("#telsucursal").val(),
                email: $("#email").val(),
                direccionsucursal: $("#direccionsucursal").val(),
            }//,
            // function(data, status) {
            //     alert("Data: " + data + "\nStatus: " + status);
            // }
        );
    });
</script>

<!-- SCRIPT PARA ELIMINAR UN PERSONAL-->
<script>
    $(document).ready(function() {
        // lo hacemos con una class
        $('.Btneliminarsucur').on('click', function() {
            $('#borrarsucursal').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            $('#delIdSucursal').val(data[0]);

        });
    });
</script>
<!--ESTO ELIMINA LOS CAMPOS DE LA TABLA DE ENTRADAS-->
<script>
    $('#btnconfirmar').on('click', function() {
        $.post(
            "/sucursales/eliminar", {
                IdSucursal: $("#delIdSucursal").val(),
            }//,
            // function(data, status) {
            //     alert("Data: " + data + "\nStatus: " + status);
            // }
        );
    });
</script>