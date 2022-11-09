<?php
session_start();
require_once('vistas/plantilla/head.php');
require_once('vistas/plantilla/nav.php');
require_once('vistas/plantilla/titulo.php');
?>
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

<form class="needs-validation" novalidate method="POST">
    <div class="form-row">
        <div class="col-md-4 mb-3">
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
            <label for="inputcontraseña">Contraseña</label>
            <input type="password" class="form-control" id="inputcontraseña" placeholder="Ingrese la Contraseña" required>
            <div class="valid-feedback">
                Correcto
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label for="inputidpersonal">ID Personal</label>
            <input type="text" class="form-control" id="inputidpersonal" placeholder="Ingrese el ID Personal" required>
            <div class="valid-feedback">
                Correcto
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label for="inputnivel">Nivel</label>
            <input type="text" class="form-control" id="inputnivel" placeholder="Ingrese el Nivel del Usuario" required>
            <div class="valid-feedback">
                Correcto
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label for="inputidsucursal">ID Sucursal</label>
            <input type="text" class="form-control" id="inputidsucursal" placeholder="Ingrese el ID de la Sucursal" required>
            <div class="valid-feedback">
                Correcto
            </div>
        </div> 
    </div>


    <button class="btn btn-primary" id="btnGuardarUsuario" onClick='return validarUsuario()' type="button">Agregar Usuario</button>
    <p id="errorUser"></p>
</form>

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

<?php
require_once('vistas/plantilla/pie.php');
require_once('vistas/plantilla/js.php');
require_once('vistas/plantilla/fin.php');
?>