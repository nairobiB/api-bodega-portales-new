<?php

require_once('vistas/plantilla/head.php');
require_once('vistas/plantilla/nav.php');
require_once('vistas/plantilla/titulo.php');
?>




<h3>SUCURSALES</h3>

</article>
<table class="table table-bordered">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Telefono</th>
            <th scope="col">Correo</th>
            <th scope="col">Direccion</th>
            <th scope="col">Acción</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($this->datos as $f) {
        ?>
            <tr>
                <th scope="row"><a href=""><?php echo $f['IdSucursal']; ?></a>
                </th>
                <td><?php echo $f['DescSucursal']; ?>
                </td>
                <td><?php echo $f['telsucursal']; ?>
                </td>
                <td><?php echo $f['email']; ?>
                </td>
                <td><?php echo $f['direccionsucursal']; ?>
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