<?php
session_start();
require_once('vistas/plantilla/head.php');
require_once('vistas/plantilla/nav.php');
require_once('vistas/plantilla/titulo.php');
?>
<form class="needs-validation" novalidate method="POST">
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="inputIdProv">Id Proveedores</label>
            <input type="text" class="form-control" id="inputIdProv" placeholder="Ingrese el ID del proveedor" required>
            <div class="valid-feedback">
                Correcto
            </div>
        </div>
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
        <div class="col-md-4 mb-3">
            <label for="inputEstado">Estado</label>
            <input type="text" class="form-control" id="inputEstado" placeholder="Ingrese el Estado del Provvedor" required>
            <div class="valid-feedback">
                Correcto
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label for="inputemail">Email</label>
            <input type="text" class="form-control" id="inputemail" placeholder="Ingrese el email" required>
            <div class="valid-feedback">
                Correcto
            </div>
        </div>
        
    </div>

    <button class="btn btn-primary" id="btnGuardarProv" type="button">Agregar registro</button>

</form>
<br>
<table class="table">
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
        foreach ($this->datosproveedor as $f) {
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
                        <button type="button" class="btn btn-primary">Mod</button>
                        <button type="button" class="btn btn-warning">Del</button>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </tbody>

</table>
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