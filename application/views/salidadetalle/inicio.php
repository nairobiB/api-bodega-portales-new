<?php
session_start();
?>
<br>
<center><img src="public/assets/images/revisa.png" alt="" srcset="" width="200px">
    <h2>AGREGA UNA SALIDA</h2>
</center>

<div class="container">
    <br>
    <form class="needs-validation" novalidate method="POST">
        <div class="form-row d-flex justify-content-center">
            <div class="col-md-4 mb-3">
                <label for="fecha">Fecha</label>
                <input type="date" class="form-control" id="inputfecha" required>
                <div class="valid-feedback">
                    Correcto
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label> Id de Venta </label>
                <select class="form-select form-control" aria-label="Default select example" id="inputventa">
                    <option selected>Elija venta</option>
                    <?php
                    foreach ($listarIdVenta as $f) {
                    ?>
                        <option value="<?php echo $f->Codsalida; ?>"><?php echo $f->Codsalida; ?></option>
                    <?php } ?>
                </select>
            </div>
            <!-- <div class="col-md-4 mb-3">
                <label for="inputventa">ID Venta</label>
                <input type="text" class="form-control" id="inputventa" placeholder="Ingrese el ID de la venta" required>
                <div class="valid-feedback">
                    Correcto
                </div>
            </div> -->

            <div class="col-md-4 mb-3">
                <label> Productos </label>
                <select class="form-select form-control" aria-label="Default select example" id="inputproducto">
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
            <div class="col-md-4 mb-3">
                <label for="inputcantidad">Cantidad</label>
                <input type="number" class="form-control" id="inputcantidad" placeholder="Ingrese la cantidad" required>
                <div class="valid-feedback">
                    Correcto
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="inputprecio">Precio</label>
                <input type="text" class="form-control" id="inputprecio" placeholder="Ingrese el precio de la salida" required>
                <div class="valid-feedback">
                    Correcto
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label> Usuario </label>
                <select class="form-select form-control" aria-label="Default select example" id="inputusuario">
                    <option selected>Elija usuario</option>
                    <?php
                    foreach ($listarUsuarios as $f) {
                    ?>
                        <option value="<?php echo $f->NomUsr; ?>"><?php echo $f->NomUsr; ?></option>
                    <?php } ?>
                </select>
            </div>
            <!-- <div class="col-md-4 mb-3">
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
            <button class="btn btn-success" id="btnGuardarSalida" type="submit">Agregar registro</button>
            <p id="errorSalida"></p>
        </center>
    </form>
</div>

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
                        //GUARDAR DATOS EN LA TABLAS DE SALIDAS

                        $.post(
                            "/salidadetalle/guardar", {
                                FechaVenta: $("#inputfecha").val(),
                                NomUsr: $("#inputusuario").val(),
                            }//,
                            // function(data, status) {
                            //     alert("Data: " + data + "\nStatus: " + status);
                            // }
                        );

                        $.post(
                            "/salidadetalle/guardardetalle", {
                                Codsalida: $("#inputventa").val(),
                                IdProd: $("#inputproducto").val(),
                                Cantidad: $("#inputcantidad").val(),
                                Precsalida: $("#inputprecio").val(),
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