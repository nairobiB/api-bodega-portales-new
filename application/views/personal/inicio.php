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
    <h3><?php echo $titulo; ?></h3>
    <br>
    <h2>Personal</h2>
    </article>
    <table class="table">
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
                            <button type="button" class="btn btn-primary modpersonal" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Modificar
                            </button>
                            <button type="submit" class="btn btn-danger buttondel" name="btnborrar" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
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
</div>
</section>
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

<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
<!-- PARTE DE USUARIOS -->
<!-- SCRIPT PARA ELIMINAR UNA ENTRADA-->
<script>
    $(document).ready(function() {
        // lo hacemos con una class
        $('.eliminate').on('click', function() {
            $('#borrarusuario').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            $('#userdel').val(data[0]);

        });
    });
</script>
<!--Script PARA MODIFICAR USUARIO-->
<script>
    $(document).ready(function() {
        //esa clase esta en el boton de modificar de la tabla de entradas
        $('.modusuario').on('click', function() {
            //este id es el id del modal
            $('#modificarusuario').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);
            //estos son los id de los campos que estan dentro del modal
            $('#usrname').val(data[0]);
            $('#contra').val(data[1]);
            $('#idperson').val(data[2]);
            $('#state').val(data[3]);
            $('#level').val(data[4]);
            $('#idsucu').val(data[5]);


        });
    });
</script>