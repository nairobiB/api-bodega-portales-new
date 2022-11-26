<?php
session_start();
?>
<div class="container">
    <form class="needs-validation" novalidate method="POST">
        <div class="form-row">
            <div class="col-md-3 mb-3">
                <label for="inputIdProd">Id Producto</label>
                <input type="text" class="form-control" id="inputIdProd" placeholder="Ingrese el ID del producto" required>
                <div class="valid-feedback">
                    Correcto
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="inputNomProd">Nombre Producto</label>
                <input type="text" class="form-control" id="inputNomProd" placeholder="Ingrese el Nombre del Producto" required>
                <div class="valid-feedback">
                    Correcto
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="inputPrecProd">Precio Porducto</label>
                <input type="number" class="form-control" id="inputPrecProd" placeholder="Ingrese el Precio del Porducto" required>
                <div class="valid-feedback">
                    Correcto
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="inputPrecCompra">Precio Compra</label>
                <input type="number" class="form-control" id="inputPrecCompra" placeholder="Ingrese el Precio de compra del Producto" required>
                <div class="valid-feedback">
                    Correcto
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="inputcstock">Stock</label>
                <input type="number" class="form-control" id="inputcstock" placeholder="Ingrese la Cantidad en Stock" required>
                <div class="valid-feedback">
                    Correcto
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="inputDescripcion">Descripcion</label>
                <input type="text" class="form-control" id="inputDescripcion" placeholder="Ingrese la Descripcion" required>
                <div class="valid-feedback">
                    Correcto
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label> Proveedores </label>
                <select class="form-select form-control" aria-label="Default select example">
                    <option selected>Elija proveedor</option>
                    <?php
                    foreach ($listar as $f2) {
                    ?>
                        <option value="<?php echo $f2->IdProv; ?>"><?php echo $f2->Nomproveedor; ?></option>
                    <?php } ?>
                </select>
            </div>
            <!-- <div class="col-md-4 mb-3">
                <label for="inputIdProv">ID Proveedor</label>
                <input type="text" class="form-control" id="inputIdProv" placeholder="Ingrese el ID del Proveedor" required>
                <div class="valid-feedback">
                    Correcto
                </div>
            </div> -->
            <!-- <div class="col-md-4 mb-3">
                <label for="inputEstado">Estado</label>
                <input type="number" class="form-control" id="inputEstado" placeholder="Ingrese el estado" required>
                <div class="valid-feedback">
                    Correcto
                </div>
            </div> -->
            <!-- <div class="col-md-4 mb-3">
                <label for="inputIdCat">ID Categoria</label>
                <input type="text" class="form-control" id="inputIdCat" placeholder="Ingrese el ID de la Categoria" required>
                <div class="valid-feedback">
                    Correcto
                </div>
            </div> -->
            <div class="col-md-4 mb-3">
                <label> Categorías </label>
                <select class="form-select form-control" aria-label="Default select example">
                    <option selected>Elija categoría</option>
                    <?php
                    foreach ($listarcat as $f2) {
                    ?>
                        <option value="<?php echo $f2->IdCat; ?>"><?php echo $f2->NombreCat; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-md-3 mb-3">
                <label for="fecha">Fecha</label>
                <input type="date" class="form-control" id="inputfechaCad" required>
                <div class="valid-feedback">
                    Correcto
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="inputnumero_lote">Numero de Lote</label>
                <input type="text" class="form-control" id="inputnumero_lote" placeholder="Ingrese el Numero de Lote" required>
                <div class="valid-feedback">
                    Correcto
                </div>
            </div>
            <!-- <div class="col-md-3 mb-3">
                <label for="inputIdSucursal">ID Sucursal</label>
                <input type="text" class="form-control" id="inputIdSucursal" placeholder="Ingrese el ID de la Sucursal" required>
                <div class="valid-feedback">
                    Correcto
                </div>
            </div> -->
            <div class="col-md-4 mb-3">
                <label> Sucursales </label>
                <select class="form-select form-control" aria-label="Default select example">
                    <option selected>Elija sucursal</option>
                    <?php
                    foreach ($listarSuc as $f2) {
                    ?>
                        <option value="<?php echo $f2->IdSucursal; ?>"><?php echo $f2->DescSucursal; ?></option>
                    <?php } ?>
                </select>
            </div>
            <p id="errorProducto"></p>
        </div>
        <div class="col-md-3 mb-3">
            <button class="btn btn-primary" id="bguardar" onClick='return validarProducto()' type="submit">Agregar registro</button>
        </div>
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