<?php

require_once('vistas/plantilla/head.php');
require_once('vistas/plantilla/nav.php');
require_once('vistas/plantilla/titulo.php');
?>
<!-- Modal -->
<!-- MODIFICAR UN PRODUCTO -->
<div class="modal fade" id="modificarproductos" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modificar Productos</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <form action="" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <label> ID Producto </label>
                            <input type="text" name="IdProd" id="IdProd" class="form-control" disabled=»disabled»>
                        </div>
                        <div class="form-group">
                            <label> Nombre Producto </label>
                            <input type="text" name="NomProd" id="NomProd" class="form-control" placeholder="Ingrese el nombre del producto">
                        </div>
                        <div class="form-group">
                            <label> Precio Producto </label>
                            <input type="text" name="PrecProd" id="PrecProd" class="form-control" placeholder="Ingrese el precio del producto">
                        </div>

                        <div class="form-group">
                            <label> Precio Compra </label>
                            <input type="text" name="PrecCompra" id="PrecCompra" class="form-control" placeholder="Ingrese el precio de compra">
                        </div>
                        <div class="form-group">
                            <label> Stock </label>
                            <input type="text" name="stock" id="stock" class="form-control" placeholder="Ingrese el stock">
                        </div>
                        <div class="form-group">
                            <label> Descripcion </label>
                            <input type="text" name="Descripcion" id="Descripcion" class="form-control" placeholder="Ingrese la descripcion">
                        </div>
                        <div class="form-group">
                            <label> ID Proveedor </label>
                            <input type="text" name="IdProv" id="IdProv" class="form-control" placeholder="Ingrese el ID proveedor">
                        </div>
                        <div class="form-group">
                            <label> Estado </label>
                            <input type="text" name="Estado" id="Estado" class="form-control" placeholder="Ingrese el estado">
                        </div>
                        <div class="form-group">
                            <label> ID Categoria</label>
                            <input type="text" name="IdCat" id="IdCat" class="form-control" placeholder="Ingrese el ID categoria">
                        </div>
                        <div class="form-group">
                            <label> Fecha Caducidad</label>
                            <input type="text" name="FechaCad" id="FechaCad" class="form-control" placeholder="Ingrese la fecha caducidad">
                        </div>
                        <div class="form-group">
                            <label> Numero de Lote</label>
                            <input type="text" name="numero_lote" id="numero_lote" class="form-control" placeholder="Ingrese el numero de lote">
                        </div>
                        <div class="form-group">
                            <label> ID Sucursal</label>
                            <input type="text" name="IdSucursal" id="IdSucursal" class="form-control" placeholder="Ingrese el ID sucursal">
                        </div>
                    </div>
                    <div class="modal-footer"> 
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btnmodificar">Cerrar</button>
                        <button type="submit" name="modificar" id="modificar" class="btn btn-primary">Guardar cambios</button>
                    </div>
                </form>
            </div>
        </div>
  </div>
</div>


<!-- ################################################################################################################################################################################# -->


<!-- Modal -->
<!-- ELIMINAR UNA ENTRADA -->
<div class="modal fade" id="borrarproductos" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Eliminar Producto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <form action="" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <label> ID Producto </label>
                            <input type="text" name="delIdProd" id="delIdProd" class="form-control" disabled=»disabled»>
                        </div>
                        <h4>Quiere eliminar este registro?</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btnno">No</button>
                        <button type="submit" name="btnsi" id="btnsi" class="btn btn-primary" >Si</button>
                    </div>
                </form>
            </div>
        </div>
  </div>
</div>


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
                    <button type="button" class="btn btn-primary modproductos" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Modificar
                        </button>
                        <button type="submit" class="btn btn-danger Btneliminar" name="detborrar" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Eliminar
                        </button>
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
?>
<script>
$(document).ready(function(){
    // lo hacemos con una class
    $('.Btneliminar').on('click',function(){
        $('#borrarproductos').modal('show');
        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function () {
            return $(this).text();
        }).get();

        console.log(data);

        $('#delIdProd').val(data[0]);

    });
});
</script>
<script>
$(document).ready(function(){
    //esa clase esta en el boton de modificar de la tabla de entradas
    $('.modproductos').on('click',function(){
        //este id es el id del modal
        $('#modificarproductos').modal('show');
        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function () {
            return $(this).text();
        }).get();

        console.log(data);
        //estos son los id de los campos que estan dentro del modal
        $('#IdProd').val(data[0]);
        $('#NomProd').val(data[1]);
        $('#PrecProd').val(data[2]);
        $('#PrecCompra').val(data[3]);
        $('#stock').val(data[4]);
        $('#Descripcion').val(data[5]);
        $('#IdProv').val(data[6]);
        $('#Estado').val(data[7]);
        $('#IdCat').val(data[8]);
        $('#FechaCad').val(data[9]);
        $('#numero_lote').val(data[10]);
        $('#IdSucursal').val(data[11]);
    });
});
</script>
<?php
require_once('vistas/plantilla/fin.php');
?>