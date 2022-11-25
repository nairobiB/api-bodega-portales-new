<?php
session_start();
?>
<div class="container">
    <form class="needs-validation" novalidate method="POST">
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="inputpersonal">ID Personal</label>
                <input type="text" class="form-control" id="inputpersonal" placeholder="Ingrese el ID del Personal" required>
                <div class="valid-feedback">
                    Correcto
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="inputTelefono">Telefono</label>
                <input type="text" class="form-control" id="inputTelefono" placeholder="Ingrese el Telefono" required>
                <div class="valid-feedback">
                    Correcto
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="inputnombre">Nombre</label>
                <input type="text" class="form-control" id="inputnombre" placeholder="Ingrese el Nombre" required>
                <div class="valid-feedback">
                    Correcto
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="inputapellido">Apellido</label>
                <input type="text" class="form-control" id="inputapellido" placeholder="Ingrese el Apellido" required>
                <div class="valid-feedback">
                    Correcto
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="inputdireccion">Direccion</label>
                <input type="text" class="form-control" id="inputdireccion" placeholder="Ingrese la Direccion" required>
                <div class="valid-feedback">
                    Correcto
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="inputemail">Correo</label>
                <input type="text" class="form-control" id="inputemail" placeholder="Ingrese el Correo" required>
                <div class="valid-feedback">
                    Correcto
                </div>
            </div>
            
            <div class="col-md-4 mb-3">
                <label for="inputfechanacimiento">Fecha de Nacimiento</label>
                <input type="date" class="form-control" id="inputfechanacimiento" required>
                <div class="valid-feedback">
                    Correcto
                </div>
            </div>
        </div>


        <button class="btn btn-primary" id="btnGuardarPersonal" onClick='return validarPersonal()' type="button">Agregar Personal</button>
        <p id="errorPersonal"></p>
    </form>
    <br>
</div>


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
