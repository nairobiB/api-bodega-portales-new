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
                        <input type="text" name="contra" id="contra" class="form-control" placeholder="Ingrese la fecha de entradaa">
                    </div>
                    <div class="form-group">
                        <label> Empleado </label>
                        <select class="form-select form-control" id="idperson" aria-label="Default select example">
                            <option selected>Elija empleado</option>
                            <?php
                            foreach ($listarPersonal as $f) {
                            ?>
                                <option value="<?php echo $f->IdPer; ?>"><?php echo $f->NomPer; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <!-- <div class="form-group">
                        <label> Empleado </label>
                        <input type="text" id="idperson" class="form-control" placeholder="Id del Proveedor">
                    </div> -->
                    <div class="form-group">
                        <label> Nivel </label>
                        <input type="text" id="level" class="form-control" placeholder="Ingrese el encargado">
                    </div>
                    <div class="form-group">
                        <label> Sucursales </label>
                        <select class="form-select form-control" id="idsucu" aria-label="Default select example">
                            <option selected>Elija sucursal</option>
                            <?php
                            foreach ($listarSucursales as $f2) {
                            ?>
                                <option value="<?php echo $f2->IdSucursal; ?>"><?php echo $f2->DescSucursal; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <!-- <div class="form-group">
                        <label> ID Sucursal </label>
                        <input type="text" id="idsucu" class="form-control" placeholder="Ingrese el encargado">
                    </div> -->
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
                        <input type="text" name="userdel" id="userdelete" class="form-control" disabled=»disabled»>
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
<div class="container-sm">
    <br>
    <center><img src="public/assets/images/USUARIO.png" alt="" srcset="" width="200px">
        <h2>USUARIOS</h2>
    </center>
    <form class="needs-validation" novalidate method="POST">
        <div class="form-row d-flex justify-content-center">
            <div class="col-md-3 mb-3">
                <label for="inputusuario">Usuario</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                    </div>
                    <input type="text" class="form-control" id="inputusuario" placeholder="Ingrese el Username" aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                        Ingrese el nombre de usuario
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <label for="inputcontrasena">Contraseña</label>
                <input type="password" class="form-control" id="inputcontrasena" placeholder="Ingrese la Contraseña" required>
                <div class="valid-feedback">
                    Correcto
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label> Empleado </label>
                <select class="form-select form-control" id="inputpersonal" aria-label="Default select example">
                    <option selected>Elija empleado</option>
                    <?php
                    foreach ($listarPersonal as $f) {
                    ?>
                        <option value="<?php echo $f->IdPer; ?>"><?php echo $f->NomPer; ?></option>
                    <?php } ?>
                </select>
            </div>
            <!-- <div class="col-md-4 mb-3">
                <label for="inputidpersonal">Identidad</label>
                <input type="text" class="form-control" id="inputpersonal" placeholder="Ingrese el ID Personal" required>
                <div class="valid-feedback">
                    Correcto
                </div>
            </div> -->
            <div class="col-md-2 mb-3">
                <label for="inputnivel">Nivel</label>
                <input type="text" class="form-control" id="inputnivel" placeholder="Ingrese el Nivel" required>
                <div class="valid-feedback">
                    Correcto
                </div>
            </div>

            <div class="col-md-2 mb-3">
                <label> Sucursales </label>
                <select class="form-select form-control" id="inputidsucursal" aria-label="Default select example">
                    <option selected>Elija sucursal</option>
                    <?php
                    foreach ($listarSucursales as $f2) {
                    ?>
                        <option value="<?php echo $f2->IdSucursal; ?>"><?php echo $f2->DescSucursal; ?></option>
                    <?php } ?>
                </select>
            </div>
            <!-- <div class="col-md-4 mb-3">
                <label for="inputidsucursal">ID Sucursal</label>
                <input type="text" class="form-control" id="inputidsucursal" placeholder="Ingrese el ID de la Sucursal" required>
                <div class="valid-feedback">
                    Correcto
                </div>
            </div> -->
        </div>
        <center>
            <button class="btn btn-success" id="btnGuardarUsuario" type="submit">Agregar Usuario</button>
            <p id="errorUser"></p>
        </center>

    </form>
    <br>
    <table class="table table-striped table-responsive-lg">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Usuario</th>
                <th scope="col">Contraseña</th>
                <th scope="col">Id Empleado</th>
                <th scope="col">Empleado</th>
                <th scope="col">Nivel</th>
                <th scope="col">Id Sucursal</th>
                <th scope="col">Sucursal</th>
                <th scope="col">Accion</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($listaUsuarios as $f) {
            ?>
                <tr>
                    <td scope="row"><?php echo $f->NomUsr; ?>
                    </td>
                    <td><?php echo $f->Contra; ?>
                    </td>
                    <td><?php echo $f->IdPer; ?>
                    </td>
                    <td><?php echo $f->NomPer; ?>
                    </td>
                    <td><?php echo $f->nivel; ?>
                    </td>
                    <td><?php echo $f->IdSucursal; ?>
                    </td>
                    <td><?php echo $f->DescSucursal; ?>
                    </td>
                    <td>
                        <div class="btn-group" role="group">
                            <!-- Button trigger modal -->
                            <button type="button" class=" btn btn-outline-warning btn-sm modusuario" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Modificar
                            </button>
                            <button type="submit" class="btn btn-outline-danger btn-sm eliminate" name="btnborrar" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Eliminar
                            </button>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>

    </table>
</div>

<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<!-- PARTE DE USUARIOS -->
<!-- SCRIPT PARA ELIMINAR UN USUARIO-->
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

            $('#userdelete').val(data[0]);

        });
    });
</script>
<script>
    $('#btnDelete').on('click', function() {
        $.post(
            "/usuarios/eliminar", {
                NomUsr: $("#userdelete").val(),
            }//,
            // function(data, status) {
            //     alert("Data: " + data + "\nStatus: " + status);
            // }
        );
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
            $('#level').val(data[4]);
            $('#idsucu').val(data[5]);


        });
    });
</script>
<script>
    $("#moduser").click(function () {
  $.post(
    "/usuarios/modificar",
    {
      NomUsr: $("#usrname").val(),
      Contra: $("#contra").val(),
      IdPer: $("#idperson").val(),
      nivel: $("#level").val(),
      IdSucursal: $("#idsucu").val(),
    }//,
    // function (data, status) {
    //   alert("Data: " + data + "\nStatus: " + status);
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
                        //GUARDAR DATOS EN LA TABLA DE CATEGORIAS
                        $.post(
                            "/usuarios/guardar", {
                                NomUsr: $("#inputusuario").val(),
                                Contra: $("#inputcontrasena").val(),
                                IdPer: $("#inputpersonal").val(),
                                nivel: $("#inputnivel").val(),
                                IdSucursal: $("#inputidsucursal").val(),
                            }//,
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