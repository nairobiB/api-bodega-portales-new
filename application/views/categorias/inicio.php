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
    <!-- ELIMINAR UNA CATEGORIA -->
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



    <div class="container-sm">
        <br><br>
        <center><img src="public/assets/images/categoria.png" alt="" srcset="">
            <h2>CREA TU NUEVA CATEGORÍA</h2>
        </center>
        <form class="needs-validation" novalidate method="POST">
            <div class="form-row d-flex justify-content-center">
                <div class="col-md-4 mb-3">
                    <label for="inputnombre">Nombre</label>
                    <input type="text" class="form-control" id="inputnombre" placeholder="Nombre de la Categoria" required>
                    <div class="valid-feedback">
                        Correcto
                    </div>
                </div>
            </div>
            <center>
            <button class="btn btn-success" id="btnGuardarCategoria" onClick='return validarCat()' type="button">Agregar Categoria</button>
            <p id="errorCat"></p>
            </center>
        </form>
        <!-- TABLA DE CATEGORIAS -->
        <table class="table table-striped table-responsive-lg">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre Categoria</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($listarcategorias as $f3) {
                ?>
                    <tr>
                        <td scope="row"><?php echo $f3['IdCat']; ?>
                        </td>
                        <td><?php echo $f3['NombreCat']; ?>
                        </td>
                        <td>
                            <div class="btn-group" role="group">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-outline-warning btn-sm modcate" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    Modificar
                                </button>
                                <button type="submit" class="btn btn-outline-danger btn-sm elmnt" name="btnborrar" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    Eliminar
                                </button>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>

        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>

    <!-- PARTE DE CATEGORIAS -->
    <!-- GUARDAR CATEGORIA -->
    <script>
        $("#btnGuardarCategoria").click(function() {
            $.post(
                "/categorias/guardar", {
                    //IdCat: $("#inputcategoria").val(),
                    NombreCat: $("#inputnombre").val(),
                },
                function(data, status) {
                    alert("Data: " + data + "\nStatus: " + status);
                }
            );
        });
    </script>
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
    <script>
        $("#btnsicate").on("click", function() {
            $.post(
                "/categorias/eliminar", {
                    IdCat: $("#catedelcod").val(),
                },
                function(data, status) {
                    alert("Data: " + data + "\nStatus: " + status);
                }
            );
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
                "/categorias/modificar", {
                    IdCat: $("#codcategoria").val(),
                    NombreCat: $("#nombrecategoria").val(),
                },
                function(data, status) {
                    alert("Data: " + data + "\nStatus: " + status);
                }
            );
        });
    </script>