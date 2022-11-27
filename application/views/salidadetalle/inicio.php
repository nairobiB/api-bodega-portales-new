<?php
session_start();
?>


<div class="container">
    <br><br>
<h3><?php echo $titulo; ?></h3>

<form class="needs-validation" novalidate method="POST">
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="fecha">Fecha</label>
            <input type="date" class="form-control" id="inputfecha" required>
            <div class="valid-feedback">
                Correcto
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label for="inputventa">ID Venta</label>
            <input type="text" class="form-control" id="inputventa" placeholder="Ingrese el ID de la venta" required>
            <div class="valid-feedback">
                Correcto
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <label for="inputproducto">ID Producto</label>
            <input type="text" class="form-control" id="inputproducto" placeholder="Ingrese el ID del producto" required>
            <div class="valid-feedback">
                Correcto
            </div>
        </div>
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
        </div>
    </div>


    <button class="btn btn-primary" id="btnGuardarSalida" onClick="return validarSalida()" type="button">Agregar registro</button>
    <p id="errorSalida"></p>
</form>
</div>

<br>
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
</section>

</article>