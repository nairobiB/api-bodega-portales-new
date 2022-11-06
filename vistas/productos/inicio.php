<?php

require_once('vistas/plantilla/head.php');
require_once('vistas/plantilla/nav.php');
require_once('vistas/plantilla/titulo.php');
?>



<p>Módulo de gestión de <?php echo $this->titulo ?></p>
<h3>Productos</h3>

</article>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Precio</th>
            <th scope="col">Precio de Compra</th>
            <th scope="col">Stock</th>
            <th scope="col">Descripcion</th>
            <th scope="col">ID del Proveedor</th>
            <th scope="col">ID de Categoria</th>
            <th scope="col">Fecha de Caducidad</th>
            <th scope="col">Numero de Lote</th>
            <th scope="col">ID de Sucursal</th>
            <th scope="col">Acción</th>

        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($this->datos as $f) {
        ?>
            <tr>

                <td><?php echo $f['IdProd']; ?>
                </td>
                <td><?php echo $f['NomProd']; ?>
                </td>
                <td><?php echo $f['PrecProd']; ?>
                </td>
                <td><?php echo $f['PrecCompra']; ?>
                </td>
                <td><?php echo $f['stock']; ?>
                </td>
                <td><?php echo $f['Descripcion']; ?>
                </td>
                <td><?php echo $f['IdProv']; ?>
                </td>

                <td><?php echo $f['IdCat']; ?>
                </td>
                <td><?php echo $f['FechaCad']; ?>
                </td>
                <td><?php echo $f['numero_lote']; ?>
                </td>
                <td><?php echo $f['IdSucursal']; ?>
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
<h3>PROVEEDORES</h3>
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
</div>
</div>
</section>
<?php
require_once('vistas/plantilla/pie.php');
require_once('vistas/plantilla/js.php');
require_once('vistas/plantilla/fin.php');
?>