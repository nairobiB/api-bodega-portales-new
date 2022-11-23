<?php
session_start();
?>
<div class="container">
    <br><br>
<form class="needs-validation" novalidate method="POST">
    <div class="form-row">
        <div class="col-md-3 mb-3">
            <label for="fecha">Fecha</label>
            <input type="date" class="form-control" id="inputfecha" required>
            <div class="valid-feedback">
                Correcto
            </div>
        </div>
        <div class="col-md-2 mb-3">
            <label> Proveedores </label>
            <select class="form-select form-control" aria-label="Default select example">
            <option selected>Elija proveedor</option>
            <?php
            foreach ($lista as $f) {
            ?>
                <option value=""><?php echo $f->Nomproveedor; ?></option>
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
            <select class="form-select form-control" aria-label="Default select example">
            <option selected>Elija compra</option>
            <?php
            foreach ($listarIdCompra as $f) {
            ?>
                <option value=""><?php echo $f->IdCompra; ?></option>
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
            <select class="form-select form-control" aria-label="Default select example">
            <option selected>Elija producto</option>
            <?php
            foreach ($listarProductos as $f) {
            ?>
                <option value=""><?php echo $f->NomProd; ?></option>
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
            <input type="text" class="form-control" id="inputprecio" placeholder="Ingrese la cantidad" required>
            <div class="valid-feedback">
                Correcto
            </div>
        </div>

        <div class="col-md-2 mb-3">
            <label> Usuario </label>
            <select class="form-select form-control" aria-label="Default select example">
            <option selected>Elija usuario</option>
            <?php
            foreach ($listarUsuarios as $f) {
            ?>
                <option value=""><?php echo $f->NomUsr; ?></option>
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


    <button class="btn btn-primary" id="btnGuardar" onClick="return validarEntrada()" type="button">Agregar registro</button>
    <p id="errorEntrada"></p>
</form>
<br>

<form class="needs-validation" novalidate method="POST">
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="inputcategoria">ID Categoria</label>
            <input type="text" class="form-control" id="inputcategoria" placeholder="Ingrese el ID de Categoria" required>
            <div class="valid-feedback">
                Correcto
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label for="inputnombre">Nombre</label>
            <input type="text" class="form-control" id="inputnombre" placeholder="Nombre de la Categoria" required>
            <div class="valid-feedback">
                Correcto
            </div>
        </div>
    </div>

    <button class="btn btn-primary" id="btnGuardarCategoria" onClick = 'return validarCat()' type="button">Agregar Categoria</button>
    <p id="errorCat"></p>
</form>
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
