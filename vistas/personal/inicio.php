<?php

require_once('vistas/plantilla/head.php');
require_once('vistas/plantilla/nav.php');
require_once('vistas/plantilla/titulo.php');
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


<!-- !!!!!!!!!!!!!!!!!!PARTE DE USUARIOS!!!!!!!!!!!!! -->
<!-- Modal -->
<!-- MODIFICAR UNA USUARIO -->
<div class="modal fade" id="modificarusuario" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modificar Entrada</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label> Nombre de usuario </label>
                        <input type="text" id="usrname" class="form-control" disabled=»disabled»>
                    </div>
                    <div class="form-group">
                        <label> Contraseña</label>
                        <input type="text" name="fecha" id="contra" class="form-control" placeholder="Ingrese la fecha de entradaa">
                    </div>
                    <div class="form-group">
                        <label> ID Personal </label>
                        <input type="text" id="idperson" class="form-control" placeholder="Id del Proveedor">
                    </div>

                    <div class="form-group">
                        <label> Estado </label>
                        <input type="text" id="state" class="form-control" placeholder="Ingrese el encargado">
                    </div>
                    <div class="form-group">
                        <label> Nivel </label>
                        <input type="text" id="level" class="form-control" placeholder="Ingrese el encargado">
                    </div>
                    <div class="form-group">
                        <label> ID Sucursal </label>
                        <input type="text" id="idsucu" class="form-control" placeholder="Ingrese el encargado">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btnmodificar">Cerrar</button>
                    <button type="submit" name="moduser" id="moduser" class="btn btn-primary">Guardar cambios</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>


<!-- ################################################################################################################################################################################# -->


<!-- Modal -->
<!-- ELIMINAR UNA USUARIO -->
<div class="modal fade" id="borrarusuario" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Eliminar Entrada</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label> Nombre de usuario </label>
                        <input type="text" name="userdel" id="userdel" class="form-control" disabled=»disabled»>
                    </div>
                    <h4>Quiere eliminar este registro?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btnno">No</button>
                    <button type="submit" name="btnsi" id="btnDelete" class="btn btn-primary">Si</button>
                </div>
            </form>
        </div>
    </div>
</div>



<!-- ################################################################### -->


<p>Módulo de gestión de <?php echo $this->titulo ?></p>
<h3>PERSONAL</h3>
<div class="container">
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
            foreach ($this->datos as $f) {
            ?>
                <tr>
                    <td scope="row"><a href=""><?php echo $f['IdPer']; ?></a>
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
    <h3>USUARIOS</h3>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Usuario</th>
                <th scope="col">Contraseña</th>
                <th scope="col">#</th>
                <th scope="col">Estado</th>
                <th scope="col">Nivel</th>
                <th scope="col">ID de Sucursal</th>
                <th scope="col">Accion</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($this->datosusuario as $f) {
            ?>
                <tr>
                    <td scope="row"><a href=""><?php echo $f['NomUsr']; ?></a>
                    </td>
                    <td><?php echo $f['Contra']; ?>
                    </td>
                    <td><?php echo $f['IdPer']; ?>
                    </td>
                    <td><?php echo $f['Estado']; ?>
                    </td>
                    <td><?php echo $f['nivel']; ?>
                    </td>
                    <td><?php echo $f['IdSucursal']; ?>
                    </td>
                    <td>
                        <div class="btn-group" role="group">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary modusuario" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Modificar
                            </button>
                            <button type="submit" class="btn btn-danger eliminate" name="btnborrar" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
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
<?php
require_once('vistas/plantilla/pie.php');
require_once('vistas/plantilla/js.php');
?>
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

<?php
require_once('vistas/plantilla/fin.php');
?>