<?php
session_start();
require_once('vistas/plantilla/head.php');
require_once('vistas/plantilla/nav.php');
require_once('vistas/plantilla/titulo.php');
?>

<!-- Modal -->
<!-- MODIFICAR UNA ENTRADA -->
<div class="modal fade" id="modificarentrada" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modificar Entrada</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label> Codigo </label>
                        <input type="text" name="codigo" id="codigo" class="form-control" disabled=»disabled»>
                    </div>
                    <div class="form-group">
                        <label> Fecha de Entrada </label>
                        <input type="text" name="fecha" id="fecha" class="form-control" placeholder="Ingrese la fecha de entradaa">
                    </div>
                    <div class="form-group">
                        <label> Id del Proveedor </label>
                        <input type="text" name="proveedor" id="proveedor" class="form-control" placeholder="Id del Proveedor">
                    </div>

                    <div class="form-group">
                        <label> Encargado </label>
                        <input type="text" name="encargado" id="encargado" class="form-control" placeholder="Ingrese el encargado">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btnmodificar">Cerrar</button>
                    <button type="submit" name="modificar" id="modificar" class="btn btn-primary">Guardar cambios</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- ################################################################################################################################################################################# -->


<!-- Modal -->
<!-- ELIMINAR UNA ENTRADA -->
<div class="modal fade" id="borrarentrada" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                        <input type="text" name="delcodigo" id="delcodigo" class="form-control" disabled=»disabled»>
                    </div>
                    <h4>Quiere eliminar este registro?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btnno">No</button>
                    <button type="submit" name="btnsi" id="btnsi" class="btn btn-primary">Si</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- ############################################################################################################################################################################################ -->


<!-- Modal -->
<!-- MODIFICAR UN DETALLE ENTRADA -->
<div class="modal fade" id="modificardetalle" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                        <input type="text" name="dcodigo" id="dcodigo" class="form-control" disabled=»disabled»>
                    </div>
                    <div class="form-group">
                        <label> Id Producto </label>
                        <input type="text" name="idprod" id="idprod" class="form-control" disabled=»disabled» placeholder="Id del Producto">
                    </div>
                    <div class="form-group">
                        <label> Cantidad </label>
                        <input type="text" name="cantidad" id="cantidad" class="form-control" placeholder="Cantidad">
                    </div>

                    <div class="form-group">
                        <label> Precio </label>
                        <input type="text" name="precio" id="precio" class="form-control" placeholder="Precio">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btnmodificar">Cerrar</button>
                    <button type="submit" name="dmodificar" id="dmodificar" class="btn btn-primary">Guardar cambios</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- ################################################################################################################################################################################# -->


<!-- Modal -->
<!-- ELIMINAR UN DETALLE DE ENTRADA -->
<div class="modal fade" id="borrardetalle" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                        <input type="text" name="delDcodigo" id="delDcodigo" class="form-control" disabled=»disabled»>
                    </div>
                    <div class="form-group">
                        <label> Codigo Producto </label>
                        <input type="text" name="delDcodigo" id="delDcodigoP" class="form-control" disabled=»disabled»>
                    </div>
                    <h4>Quiere eliminar este registro?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btnno">No</button>
                    <button type="submit" name="btnaccionar" id="btnaccionar" class="btn btn-primary">Si</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- ############################################################################################################################################################################################ -->

<!-- !!!!!!!!!!!!!!!!!!PARTE DE CATEGORIAS!!!!!!!!!!!!! -->
<!-- Modal -->
<!-- MODIFICAR UNA CATEGORIA -->
<div class="modal fade" id="modificarcate" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modificar Categoría</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label> ID Categoria </label>
                        <input type="text" id="codcategoria" class="form-control" disabled=»disabled»>
                    </div>
                    <div class="form-group">
                        <label> Nombre categoría</label>
                        <input type="text" name="fecha" id="nombrecategoria" class="form-control" placeholder="Ingrese la fecha de entradaa">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btnmodificar">Cerrar</button>
                        <button type="submit" name="modificarcategoria" id="modificarcategoria" class="btn btn-primary">Guardar cambios</button>
                    </div>
            </form>
        </div>
    </div>
</div>
</div>


<!-- ################################################################################################################################################################################# -->


<!-- Modal -->
<!-- ELIMINAR UNA USUARIO -->
<div class="modal fade" id="borrarcategoria" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                        <input type="text" name="catedelcod" id="catedelcod" class="form-control" disabled=»disabled»>
                    </div>
                    <h4>Quiere eliminar este registro?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btnno">No</button>
                    <button type="submit" name="btnsi" id="btnsicate" class="btn btn-primary">Si</button>
                </div>
            </form>
        </div>
    </div>
</div>



<!-- ################################################################### -->
<!-- TABLA DE ENTRADAS -->
<div class="container">
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Fecha Entrada</th>
                <th scope="col">Proveedor</th>
                <th scope="col">Encargado</th>
                <th scope="col">Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($this->datos as $f) {
            ?>
                <tr>
                    <td scope="row"><?php echo $f['IdCompra']; ?>
                    </td>
                    <td><?php echo $f['Fechaentrada']; ?>
                    </td>
                    <td><?php echo $f['IdProv']; ?>
                    </td>
                    <td><?php echo $f['NomUsr']; ?>
                    </td>
                    <td>
                        <div class="btn-group" role="group">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary modentrada" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Modificar
                            </button>
                            <button type="submit" class="btn btn-danger btneliminar" name="btnborrar" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Eliminar
                            </button>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>

    </table>

    <!-- ############################################################################################################################################################################### -->

    <!-- TABLA DE DETALLE DE ENTRADAS -->
    <h3>DETALLE ENTRADAS</h3>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Id Prod</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio</th>
                <th scope="col">Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($this->datosdetalle as $f2) {
            ?>
                <tr>
                    <td scope="row"><?php echo $f2['IdCompra']; ?>
                    </td>
                    <td><?php echo $f2['IdProd']; ?>
                    </td>
                    <td><?php echo $f2['Cantidad']; ?>
                    </td>
                    <td><?php echo $f2['Precio']; ?>
                    </td>
                    <td>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-primary detentrada" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Modificar
                            </button>
                            <button type="submit" class="btn btn-danger deteliminar" name="detborrar" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Eliminar
                            </button>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>

    </table>

    <!-- ###################################################################################################################################################################### -->

    <!-- TABLA DE CATEGORIAS -->
    <h3>CATEGORIAS</h3>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre Categoria</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($this->datoscate as $f3) {
            ?>
                <tr>
                    <td scope="row"><a href=""><?php echo $f3['IdCat']; ?></a>
                    </td>
                    <td><?php echo $f3['NombreCat']; ?>
                    </td>
                    <td>
                        <div class="btn-group" role="group">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary modcate" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Modificar
                            </button>
                            <button type="submit" class="btn btn-danger elmnt" name="btnborrar" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
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
<!-- SCRIPT PARA ELIMINAR UNA ENTRADA-->
<script>
    $(document).ready(function() {
        // lo hacemos con una class
        $('.btneliminar').on('click', function() {
            $('#borrarentrada').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            $('#delcodigo').val(data[0]);

        });
    });
</script>
<!-- SCRIPT PARA ELIMINAR UN DETALLE DE ENTRADA-->
<!-- ASI SE ELIMINA -->
<script>
    $(document).ready(function() {
        // lo hacemos con una class
        $('.deteliminar').on('click', function() {
            $('#borrardetalle').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            $('#delDcodigo').val(data[0]);
            $('#delDcodigoP').val(data[1]);


        });
    });
</script>

<!-- ################################################################################################################### -->
<!--Script PARA MODIFICAR ENTRADA-->
<script>
    $(document).ready(function() {
        //esa clase esta en el boton de modificar de la tabla de entradas
        $('.modentrada').on('click', function() {
            //este id es el id del modal
            $('#modificarentrada').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);
            //estos son los id de los campos que estan dentro del modal
            $('#codigo').val(data[0]);
            $('#fecha').val(data[1]);
            $('#proveedor').val(data[2]);
            $('#encargado').val(data[3]);
        });
    });
</script>

<!--Script PARA MODIFICAR DETALLE DE ENTRADA-->
<script>
    $(document).ready(function() {
        $('.detentrada').on('click', function() {
            $('#modificardetalle').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            $('#dcodigo').val(data[0]);
            $('#idprod').val(data[1]);
            $('#cantidad').val(data[2]);
            $('#precio').val(data[3]);
        });
    });
</script>

<!-- ACCION QUE HARA EL BOTON AL DARLE CLICK EN GUARDAR CAMBIOS -->
<!-- MODIFICAR UN DETALLE DE ENTRADA -->
<script>
    //ESTE ID ES EL ID DE EL BOTON DE EL MODAL QUE GUARDARA LOS CAMBIOS
    $('#dmodificar').on('click', function() {
        $.post(
            "/entradadetalle/modificardetalle", {
                IdCompra: $("#dcodigo").val(),
                IdProd: $("#idprod").val(),
                Cantidad: $("#cantidad").val(),
                Precio: $("#precio").val(),
            },
            function(data, status) {
                alert("Data: " + data + "\nStatus: " + status);
            }
        );
    });
</script>

<!-- //ESTO ELIMINA LOS CAMPOS DE LA TABLA DE DETALLE DE DENTRADAS -->
<script>
    $('#btnaccionar').on('click', function() {
        $.post(
            "/entradadetalle/eliminardetalle", {
                IdCompra: $("#delDcodigo").val(),
                IdProd: $("#delDcodigoP").val(),
            },
            function(data, status) {
                alert("Data: " + data + "\nStatus: " + status);
            }
        );
    });
</script>

<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
<!-- PARTE DE CATEGORIAS -->
<!-- SCRIPT PARA ELIMINAR UNA CATEGORIA-->
<script>
    $(document).ready(function() {
        // lo hacemos con una class
        $('.elmnt').on('click', function() {
            $('#borrarcategoria').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            $('#catedelcod').val(data[0]);

        });
    });
</script>
<!--Script PARA MODIFICAR CATEGORIA-->
<script>
    $(document).ready(function() {
        //esa clase esta en el boton de modificar de la tabla de entradas
        $('.modcate').on('click', function() {
            //este id es el id del modal
            $('#modificarcate').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);
            //estos son los id de los campos que estan dentro del modal
            $('#codcategoria').val(data[0]);
            $('#nombrecategoria').val(data[1]);



        });
    });
</script>
<script>
    $("#modificarcategoria").on("click", function() {
        $.post(
            "/entradas/modificarcategoria", {
                IdCat: $("#codcategoria").val(),
                NombreCat: $("#nombrecategoria").val(),
            },
            function(data, status) {
                alert("Data: " + data + "\nStatus: " + status);
            }
        );
    });
</script>

<script>
    $("#btnsicate").on("click", function() {
        $.post(
            "/entradas/eliminarcategoria", {
                IdCat: $("#catedelcod").val(),
            },
            function(data, status) {
                alert("Data: " + data + "\nStatus: " + status);
            }
        );
    });
</script>
<?php
require_once('vistas/plantilla/fin.php');
?>