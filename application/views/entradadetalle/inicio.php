<?php
session_start();
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
    </symbol>
    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
    </symbol>
</svg>

<div class="container">
    <br><br>
    <form class="needs-validation" novalidate method="POST" action="">
        <center><img src="public/assets/images/bandeja-de-entrada.png" alt="" srcset="" width="200px">
            <h2>INGRESA LAS NUEVAS ENTRADAS</h2>
            <br>
        </center>
        <div class="form-row d-flex justify-content-center">
            <div class="col-md-3 mb-3">
                <label for="fecha">Fecha</label>
                <input type="date" class="form-control" id="inputfecha" required>
                <div class="valid-feedback">
                    Correcto
                </div>
            </div>
            <div class="col-md-2 mb-3">
                <label> Proveedores </label>
                <select class="form-select form-control" name="IdProv" id='inputproveedor' aria-label="Default select example">
                    <option selected>Elija proveedor</option>
                    <?php
                    foreach ($lista as $f) {
                    ?>
                        <option value="<?php echo $f->IdProv; ?>"><?php echo $f->Nomproveedor; ?></option>
                    <?php } ?>
                </select>
            </div>
            <!-- <div class="col-md-4 mb-3">
            <label for="inputproveedor">ID Proveedor</label>
            <input type="text" class="form-control" id="inputproveedor" placeholder="Ingrese el ID del proveedor" required>
            <div class="valid-feedback">
                Correcto
            </div>
        </div> -->

            <div class="col-md-2 mb-3">
                <label> Id de Compras </label>
                <select class="form-select form-control" id='inputcompra' aria-label="Default select example">
                    <option selected>Elija compra</option>
                    <?php
                    foreach ($listarIdCompra as $f) {
                    ?>
                        <option value="<?php echo $f->IdCompra; ?>"><?php echo $f->IdCompra; ?></option>
                    <?php } ?>
                </select>
            </div>

            <!-- <div class="col-md-4 mb-3">
            <label for="inputcompra">ID Compra</label>
            <input type="text" class="form-control" id="inputcompra" placeholder="Ingrese el ID de la compra" required>
            <div class="valid-feedback">
                Correcto
            </div>
        </div> -->
            <div class="col-md-2 mb-3">
                <label> Productos </label>
                <select class="form-select form-control" id='inputproducto' aria-label="Default select example">
                    <option selected>Elija producto</option>
                    <?php
                    foreach ($listarProductos as $f) {
                    ?>
                        <option value="<?php echo $f->IdProd; ?>"><?php echo $f->NomProd; ?></option>
                    <?php } ?>
                </select>
            </div>

            <!-- <div class="col-md-4 mb-3">
            <label for="inputproducto">ID Producto</label>
            <input type="text" class="form-control" id="inputproducto" placeholder="Ingrese el ID del producto" required>
            <div class="valid-feedback">
                Correcto
            </div>
        </div> -->
            <div class="col-md-2 mb-3">
                <label for="inputcantidad">Cantidad</label>
                <input type="number" class="form-control" id="inputcantidad" placeholder="Ingrese la cantidad" required>
                <div class="valid-feedback">
                    Correcto
                </div>
            </div>
            <div class="col-md-2 mb-3">
                <label for="inputprecio">Precio</label>
                <input type="text" class="form-control" id="inputprecio" placeholder="Ingrese el precio" required>
                <div class="valid-feedback">
                    Correcto
                </div>
            </div>

            <div class="col-md-2 mb-3">
                <label> Usuario </label>
                <select class="form-select form-control" id="inputusuario" aria-label="Default select example">
                    <option selected>Elija usuario</option>
                    <?php
                    foreach ($listarUsuarios as $f) {
                    ?>
                        <option value="<?php echo $f->NomUsr; ?>"><?php echo $f->NomUsr; ?></option>
                    <?php } ?>
                </select>
            </div>

            <!-- <div class="col-md-2 mb-3">
            <label for="inputusuario">Usuario</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                </div>
                <input type="text" class="form-control" id="inputusuario" placeholder="Usuario" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                    Ingrese el nombre de usuario
                </div>
            </div>
        </div> -->

        </div>

        <center>
            <button class="btn btn-success" id="btnGuardarDetalle" type="submit">Agregar registro</button>
        </center>
    </form>
    <br>

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
                                "/entradadetalle/guardar", {
                                    Fechaentrada: $("#inputfecha").val(),
                                    IdProv: $("#inputproveedor").val(),
                                    NomUsr: $("#inputusuario").val(),
                                },
                                function(data, status) {
                                    alert("Data: " + data + "\nStatus: " + status);
                                }
                            );

                            $.post(
                                "/entradadetalle/guardardetalle", {
                                    IdCompra: $("#inputcompra").val(),
                                    IdProd: $("#inputproducto").val(),
                                    Cantidad: $("#inputcantidad").val(),
                                    Precio: $("#inputprecio").val(),
                                },
                                function(data, status) {
                                    alert("Data: " + data + "\nStatus: " + status);
                                }
                            );
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>