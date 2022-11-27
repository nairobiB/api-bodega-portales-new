<?php
session_start();
require_once('vistas/plantilla/head.php');
require_once('vistas/plantilla/nav.php');
require_once('vistas/plantilla/titulo.php');
?>
<!--<form class="needs-validation" novalidate method="POST">
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="fecha">Fecha</label>
            <input type="date" class="form-control" id="inputfecha" required>
            <div class="valid-feedback">
                Correcto
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label for="inputproveedor">ID Proveedor</label>
            <input type="text" class="form-control" id="inputproveedor" placeholder="Ingrese el ID del proveedor" required>
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
</script>-->
<table class="table table-bordered">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Fecha Entrada</th>
            <th scope="col">Encargado</th>
            <th scope="col">Acción</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($this->datos as $f) {
        ?>
            <tr>
                <th scope="row"><a href=""><?php echo $f['IdCompra']; ?></a>
                </th>
                <td><?php echo $f['Fechaentrada']; ?>
                </td>
                <td><?php echo $f['NomUsr']; ?>
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
<h3>DETALLE ENTRADAS</h3>
<table class="table table-bordered">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Id Prod</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Precio</th>
            <th scope="col">Acción</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($this->datosdetalle as $f2) {
        ?>
            <tr>
                <th scope="row"><a href=""><?php echo $f2['IdCompra']; ?></a>
                </th>
                <td><?php echo $f2['IdProd']; ?>
                </td>
                <td><?php echo $f2['Cantidad']; ?>
                </td>
                <td><?php echo $f2['Precio']; ?>
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
<h3>CATEGORIAS</h3>
<table class="table table-bordered">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre Categoria</th>
            <th scope="col">Acción</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($this->datoscate as $f3) {
        ?>
            <tr>
                <th scope="row"><a href=""><?php echo $f3['IdCat']; ?></a>
                </th>

                <td><?php echo $f3['NombreCat']; ?>
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
</div>
</div>
</section>
<?php
require_once('vistas/plantilla/pie.php');
require_once('vistas/plantilla/js.php');
require_once('vistas/plantilla/fin.php');
?>