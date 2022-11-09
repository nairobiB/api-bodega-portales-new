<?php
session_start();
require_once('vistas/plantilla/head.php');
require_once('vistas/plantilla/nav.php');
require_once('vistas/plantilla/titulo.php');
?>
<form class="needs-validation" novalidate method="POST">
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="inputIdSucursal">ID Sucursal</label>
            <input type="text" class="form-control" id="inputIdSucursal" placeholder="Ingrese el ID de la Sucursal" required>
            <div class="valid-feedback">
                Correcto
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label for="inputDescSucursal">Descripcion de la Sucursal</label>
            <input type="text" class="form-control" id="inputDescSucursal" placeholder="Ingrese descripcion de la sucursal" required>
            <div class="valid-feedback">
                Correcto
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label for="inputtelsucursal">Telefono Sucursal</label>
            <input type="number" class="form-control" id="inputtelsucursal" placeholder="Ingrese el Numero de telefono de la Sucursal" required>
            <div class="valid-feedback">
                Correcto
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label for="inputemail">Email</label>
            <input type="number" class="form-control" id="inputemail" placeholder="Ingrese el Email de la Sucursal" required>
            <div class="valid-feedback">
                Correcto
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label for="inputdireccionsucursal">Direccion Sucursal</label>
            <input type="text" class="form-control" id="inputdireccionsucursal" placeholder="Ingrese la Direccion de la Sucursal" required>
            <div class="valid-feedback">
                Correcto
            </div>
        </div>
        </div>
    </div>


    <button class="btn btn-primary" id="btnGuardar" type="button">Agregar registro</button>

</form>
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
<?php
require_once('vistas/plantilla/pie.php');
require_once('vistas/plantilla/js.php');
require_once('vistas/plantilla/fin.php');
?>