<?php
session_start();
?>
<!-- Modal -->
<!-- MODIFICAR UN PROVEEDOR -->
<div class="modal fade" id="modificarproveedores" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modificar Proveedores</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label> ID Proveedor </label>
                        <input type="text" name="IdProv" id="IdProv" class="form-control" disabled=»disabled»>
                    </div>
                    <div class="form-group">
                        <label> Nombre Proveedor </label>
                        <input type="text" name="Nomproveedor" id="Nomproveedor" class="form-control" placeholder="Ingrese el nombre del proveedor">
                    </div>
                    <div class="form-group">
                        <label> Telefono del Proveedor </label>
                        <input type="text" name="Telproveedor" id="Telproveedor" class="form-control" placeholder="Ingrese el telefono del proveedor">
                    </div>

                    <div class="form-group">
                        <label> Direccion Proveedor</label>
                        <input type="text" name="Dirproveedor" id="Dirproveedor" class="form-control" placeholder="Ingrese el precio de compra">
                    </div>
                    <div class="form-group">
                        <label> Email </label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="Ingrese la descripcion">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btnmodificar">Cerrar</button>
                    <button type="submit" name="modificarProveedor" id="modificarProveedor" class="btn btn-primary">Guardar cambios</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>


<!-- ################################################################################################################################################################################# -->


<!-- Modal -->
<!-- ELIMINAR UNA ENTRADA -->
<div class="modal fade" id="borrarproveedores" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Eliminar Sucursales</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label> ID Proveedor </label>
                        <input type="text" name="delIdProv" id="delIdProv" class="form-control" disabled=»disabled»>
                    </div>
                    <h4>Quiere eliminar este registro?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btnno">No</button>
                    <button type="submit" name="btndelete" id="btndelete" class="btn btn-primary">Si</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

<!-- ########################################################################################################################################################################### -->


<center><img src="public/assets/images/PROVEEDORES.png" alt="" srcset="" width="200px">
    <h2>PROVEEDORES</h2>
</center>
<div class="container-sm">
    <br>
    <form class="needs-validation" novalidate method="POST">
        <div class="form-row d-flex justify-content-center">
            <!-- <div class="col-md-4 mb-3">
                <label for="inputIdProv">Id Proveedores</label>
                <input type="text" class="form-control" id="inputIdProv" placeholder="Ingrese el ID del proveedor" required>
                <div class="valid-feedback">
                    Correcto
                </div>
            </div> -->
            <div class="col-md-4 mb-3">
                <label for="inputNomproveedor">Nombre Proveedor</label>
                <input type="text" class="form-control" id="inputNomproveedor" placeholder="Ingrese el Nombre del Proveedor" required>
                <div class="valid-feedback">
                    Correcto
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="inputTelproveedor">Telefono del proveedor</label>
                <input type="text" class="form-control" id="inputTelproveedor" placeholder="Ingrese el telefono del proveedor" required>
                <div class="valid-feedback">
                    Correcto
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="inputDirproveedor">Direccion Proveedor</label>
                <input type="text" class="form-control" id="inputDirproveedor" placeholder="Ingrese la direccion del proveedor" required>
                <div class="valid-feedback">
                    Correcto
                </div>
            </div>
            <!-- <div class="col-md-4 mb-3">
            <label for="inputEstado">Estado</label>
            <input type="text" class="form-control" id="inputEstado" placeholder="Ingrese el Estado del Provvedor" required>
            <div class="valid-feedback">
                Correcto
            </div>
        </div> -->
            <div class="col-md-4 mb-3">
                <label for="inputemail">Email</label>
                <input type="text" class="form-control" id="inputemail" placeholder="Ingrese el email" required>
                <div class="valid-feedback">
                    Correcto
                </div>
            </div>
        </div>
        <center>
            <button class="btn btn-success" id="btnGuardarProve" type="submit">Agregar registro</button>
            <p id="errorProveedor"></p>
        </center>
    </form>
    <br>

    <table class="table table-striped table-responsive-lg">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre del Proveedor</th>
                <th scope="col">Telefono</th>
                <th scope="col">Direccion</th>
                <th scope="col">Email</th>
                <th scope="col">Accion</th>

            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($lista as $f) {
            ?>
                <tr>
                    <td><?php echo $f['IdProv']; ?>
                    </td>
                    <td><?php echo $f['Nomproveedor']; ?>
                    </td>
                    <td><?php echo $f['Telproveedor']; ?>
                    </td>
                    <td><?php echo $f['Dirproveedor']; ?>
                    </td>
                    <td><?php echo $f['email']; ?>
                    </td>
                    <td>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-outline-warning btn-sm modproveedores" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Modificar
                            </button>
                            <button type="submit" class="btn btn-outline-danger btn-sm BtneliminarProv" name="detborrar" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
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
        <a class="btn btn-outline-info btn-lg imprimirproveedores" href="/proveedoresguardar/imprimirproveedores">Generar Reporte</a>
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

    <script>
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>

</div>
</div>
</div>
</section>

<!-- SCRIPT PARA ELIMINAR UN PROVEEDOR-->
<!-- ASI SE LLAMA AL MODAL DE PROVEEDORES -->
<script>
    $(document).ready(function() {
        // lo hacemos con una class
        $('.BtneliminarProv').on('click', function() {
            $('#borrarproveedores').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            $('#delIdProv').val(data[0]);

        });
    });
</script>
<!-- //ESTO ELIMINA LOS CAMPOS DE LA TABLA DE PROVEEDORES -->
<script>
    $('#btndelete').on('click', function() {
        $.post(
            "/proveedoresguardar/eliminar", {
                IdProv: $("#delIdProv").val()
            }//,
            // function(data, status) {
            //     alert("Data: " + data + "\nStatus: " + status);
            // }
        );
    });
</script>

<!-- SCRIPT PARA MODIFICAR UN PROVEEDOR-->
<!-- ASI SE LLAMA AL MODAL DE PROVEEDORES -->
<script>
    $(document).ready(function() {
        //esa clase esta en el boton de modificar de la tabla de entradas
        $('.modproveedores').on('click', function() {
            //este id es el id del modal
            $('#modificarproveedores').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);
            //estos son los id de los campos que estan dentro del modal
            $('#IdProv').val(data[0]);
            $('#Nomproveedor').val(data[1]);
            $('#Telproveedor').val(data[2]);
            $('#Dirproveedor').val(data[3]);
            $('#email').val(data[4]);
        });
    });
</script>
<!-- //ESTO MODIFICA LOS CAMPOS DE LA TABLA DE PROVEEDORES -->
<script>
    $('#modificarProveedor').on('click', function() {
        $.post(
            "/proveedoresguardar/modificar", {
                IdProv: $("#IdProv").val(),
                Nomproveedor: $("#Nomproveedor").val(),
                Telproveedor: $("#Telproveedor").val(),
                Dirproveedor: $("#Dirproveedor").val(),
                email: $("#email").val(),
            }//,
            // function(data, status) {
            //     alert("Data: " + data + "\nStatus: " + status);
            // }
        );
    });
</script>


<!-- VALIDACIONES -->
<script>
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>

<script>
    (function() {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    } else {
                        $.post(
                            "/proveedoresguardar/guardar", {
                                Nomproveedor: $("#inputNomproveedor").val(),
                                Telproveedor: $("#inputTelproveedor").val(),
                                Dirproveedor: $("#inputDirproveedor").val(),
                                email: $("#inputemail").val(),
                            }
                            // function(data, status) {
                            //     alert("Data: " + data + "\nStatus: " + status);
                            // }
                        );

                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>