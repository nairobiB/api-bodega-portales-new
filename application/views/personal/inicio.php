<?php
session_start();
?>
<!-- Modal -->
<!-- MODIFICAR UNA Personal -->
<div class="modal fade" id="modificarpersonal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modificar Personal</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label> ID Personal </label>
                        <input type="text" name="idpersonal" id="idpersonal" class="form-control" disabled=»disabled»>
                    </div>
                    <div class="form-group">
                        <label> Telefono</label>
                        <input type="text" id="tel" class="form-control" placeholder="Ingrese el telefono">
                    </div>
                    <div class="form-group">
                        <label> Nombre</label>
                        <input type="text" id="nombre" class="form-control">
                    </div>
                    <div class="form-group">
                        <label> Apellido</label>
                        <input type="text" id="apellido" class="form-control">
                    </div>

                    <div class="form-group">
                        <label> Direccion </label>
                        <input type="text" id="direccion" class="form-control">
                    </div>
                    <div class="form-group">
                        <label> Email </label>
                        <input type="text" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label> Estado </label>
                        <input type="text" id="estado" class="form-control">
                    </div>
                    <div class="form-group">
                        <label> Fecha de Nacimiento </label>
                        <input type="text" id="fechaNac" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="cerrar">Cerrar</button>
                    <button type="submit" id="modifypersonal" class="btn btn-primary">Guardar cambios</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- ################################################################################################################################################################################# -->


<!-- Modal -->
<!-- ELIMINAR UN PERSONAL -->
<div class="modal fade" id="borrarpersonal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Eliminar Personal</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label> Id Personal </label>
                        <input type="text" name="delpersonalcod" id="delpersonalcod" class="form-control" disabled=»disabled»>
                    </div>
                    <h4>Quiere eliminar este registro?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btnno">No</button>
                    <button type="submit" name="btnsipersonal" id="btnsipersonal" class="btn btn-primary">Si</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- ############################################################################################################################################################################################ -->
<div class="container">
    <br>
    <center><img src="public/assets/images/ListaPersonal.png" alt="" srcset="" width="200px">
            <h2>PERSONAL DE NUESTRA BODEGA</h2>
            <br>
        </center>
    </article>
    <table class="table table-striped table-responsive-lg">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Telefono</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Direccion</th>
                <th scope="col">Email</th>
                <th scope="col">Estado</th>
                <th scope="col">Fecha de Nacimiento</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($lista as $f) {
            ?>
                <tr>
                    <td scope="row"><?php echo $f['IdPer']; ?></a>
                    </td>
                    <td><?php echo $f['TelPer']; ?>
                    </td>
                    <td><?php echo $f['NomPer']; ?>
                    </td>
                    <td><?php echo $f['ApePer']; ?>
                    </td>
                    <td><?php echo $f['DirPer']; ?>
                    </td>
                    <td><?php echo $f['Email']; ?>
                    </td>
                    <td><?php echo $f['Estado']; ?>
                    </td>
                    <td><?php echo $f['fecha_nacimineto']; ?>
                    </td>
                    <td>
                        <div class="btn-group" role="group">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-warning btn-sm modpersonal" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Modificar
                            </button>
                            <button type="submit" class="btn btn-outline-danger btn-sm buttondel" name="btnborrar" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
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
            <br>
            <a class="btn btn-outline-info btn-lg Imprimir" href="/personal/imprimir">Generar Reporte</a>
            </div>
        </center>
    </div>

                </div>
                </div>
                </section>
                </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>

<!--Script PARA MODIFICAR PERSONAL-->
<script>
    $(document).ready(function() {
        //esa clase esta en el boton de modificar de la tabla de entradas
        $('.modpersonal').on('click', function() {
            //este id es el id del modal
            $('#modificarpersonal').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();
            
            console.log(data);
            //estos son los id de los campos que estan dentro del modal
            $('#idpersonal').val(data[0]);
            $('#tel').val(data[1]);
            $('#nombre').val(data[2]);
            $('#apellido').val(data[3]);
            $('#direccion').val(data[4]);
            $('#email').val(data[5]);
            $('#estado').val(data[6]);
            $('#fechaNac').val(data[7]);
            
        });
    });
</script>
<!-- ACCION QUE HARA EL BOTON AL DARLE CLICK EN GUARDAR CAMBIOS -->
<script>
    //ESTE ID ES EL ID DE EL BOTON DE EL MODAL QUE GUARDARA LOS CAMBIOS
    $('#modifypersonal').on('click', function() {
        $.post(
            "/personalAgregar/modificar", {
                IdPer: $("#idpersonal").val(),
                TelPer: $("#tel").val(),
                NomPer: $("#nombre").val(),
                ApePer: $("#apellido").val(),
                DirPer: $("#direccion").val(),
                Email: $("#email").val(),
                Estado: $("#estado").val(),
                fecha_nacimineto: $("#fechaNac").val(),
            }
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
        $('.buttondel').on('click', function() {
            $('#borrarpersonal').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            $('#delpersonalcod').val(data[0]);

        });
    });
</script>
<!-- //ESTO ELIMINA LOS CAMPOS DE LA TABLA DE PERSONAL -->
<script>
    $('#btnsipersonal').on('click', function() {
        $.post(
            "/personalAgregar/eliminar", {
                IdPer: $("#delpersonalcod").val()
            }
            // function(data, status) {
            //     alert("Data: " + data + "\nStatus: " + status);
            // }
        );
    });
</script>