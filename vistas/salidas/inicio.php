<?php

require_once('vistas/plantilla/head.php');
require_once('vistas/plantilla/nav.php');
require_once('vistas/plantilla/titulo.php');
?>



<p>Módulo de gestión de <?php echo $this->titulo ?></p>
<h3>SALIDAS</h3>

<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Fecha Venta</th>
            <th scope="col">Encargado</th>
            <th scope="col">Accion</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($this->datos as $f) {
        ?>
            <tr>
                <th scope="row"><a href=""><?php echo $f['Codsalida']; ?></a>
                </th>
                <td><?php echo $f['FechaVenta']; ?>
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
<h3>DETALLE SALIDAS</h3>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">ID Proveedor</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Precio de Salida</th>
            <th scope="col">Accion</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($this->datosdetalle as $f) {
        ?>
            <tr>
                <th scope="row"><a href=""><?php echo $f['Codsalida']; ?></a>
                </th>
                <td><?php echo $f['IdProd']; ?>
                </td>
                <td><?php echo $f['Cantidad']; ?>
                </td>
                <td><?php echo $f['PrecSalida']; ?>
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
</article>