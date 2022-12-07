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
                        <label> Proveedor </label>
                        <input type="text" name="IdProv" id="IdProv" class="form-control" disabled=»disabled»>
                    </div>
                    <div class="form-group">
                        <label> Categoria</label>
                        <input type="text" name="IdCat" id="IdCat" class="form-control" disabled=»disabled»>
                    </div>
                    <div class="form-group">
                        <label> Sucursal</label>
                        <input type="text" name="IdSucursal" id="IdSucursal" class="form-control" disabled=»disabled»>
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
                    <!-- <div class="form-group">
                        <label> Proveedores </label>
                        <select class="form-select form-control" name="IdProv" id="IdProv" aria-label="Default select example">
                            <option selected>Elija proveedor</option>
                            <?php
                            foreach ($listarProveedores as $f) {
                            ?>
                                <option value="<?php echo $f->IdProv; ?>"><?php echo $f->Nomproveedor; ?></option>
                            <?php } ?>
                        </select>
                    </div> -->
                    <div class="form-group">
                        <label> Fecha Caducidad</label>
                        <input type="text" name="FechaCad" id="FechaCad" class="form-control" placeholder="Ingrese la fecha caducidad">
                    </div>
                    <div class="form-group">
                        <label> Numero de Lote</label>
                        <input type="text" name="numero_lote" id="numero_lote" class="form-control" placeholder="Ingrese el numero de lote">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btnmodificar">Cerrar</button>
                    <button type="submit" name="modificar" id="modificarP" class="btn btn-primary">Guardar cambios</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>


<!-- ################################################################################################################################################################################# -->


<!-- Modal -->
<!-- ELIMINAR UN PRODUCTO -->
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
                    <button type="submit" name="btnsi" id="btnsi" class="btn btn-primary">Si</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

</article>
<br>
<center><img src="public/assets/images/productos.png" alt="" srcset="" width="200px">
    <h2>NUESTROS PRODUCTOS</h2>
    <br>
</center>
<div class="container-sm">
    <table class="table table-striped table-responsive-lg">
        <thead class="thead-dark align-middle">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Precio</th>
                <th scope="col">Precio de Compra</th>
                <th scope="col">Stock</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Id Proveedor</th>
                <th scope="col">Proveedor</th>
                <th scope="col">Id Categoria</th>
                <th scope="col">Categoria</th>
                <th scope="col">Fecha de Caducidad</th>
                <th scope="col">Numero de Lote</th>
                <th scope="col">Id Sucursal</th>
                <th scope="col">Sucursal</th>
                <th scope="col">Acción</th>

            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($lista as $f) {
            ?>
                <tr>

                <td scope="row"><?php echo $f->IdProd; ?>
                    </td>
                    <td><?php echo $f->NomProd ?>
                    </td>
                    <td><?php echo $f->PrecProd ?>
                    </td>
                    <td><?php echo $f->PrecCompra ?>
                    </td>
                    <td><?php echo $f->stock ?>
                    </td>
                    <td><?php echo $f->Descripcion ?>
                    </td>
                    <td><?php echo $f->IdProv?>
                    </td>
                    <td><?php echo $f->Nomproveedor?>
                    </td>
                    <td><?php echo $f->IdCat?>
                    </td>
                    <td><?php echo $f->NombreCat?>
                    </td>
                    <td><?php echo $f->FechaCad?>
                    </td>
                    <td><?php echo $f->numero_lote?>
                    </td>
                    <td><?php echo $f->IdSucursal ?>
                    </td>
                    <td><?php echo $f->DescSucursal ?>
                    </td>
                    <td>

                        <button type="button" class="btn btn-outline-warning btn-sm modproductos" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Modificar
                        </button>
                        <button type="submit" class="btn btn-outline-danger btn-sm Btneliminar" name="detborrar" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Eliminar
                        </button>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</div>
<div class="card-footer clearfix">
    <center>
    <br><br>
        <img src="public/assets/images/imprimir.png" alt="" srcset="" width="80px">
        <div class="container">
            <br>
            <a class="btn btn-outline-info btn-lg imprimirproducto" href="/productos/imprimirproducto">Generar Reporte</a>
        </div>
    </center>
 <!--<a class="btn btn-primary Pdf" href="/categorias/pdf">PDF</a> -->
</div>
</div>
</div>
</section>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<!--Script PARA MODIFICAR ENTRADA-->


<!-- MUESTRA EL MODAL DE ELIMINACION DE UN PRODUCTO -->
<script>
    $(document).ready(function() {
        // lo hacemos con una class
        $('.Btneliminar').on('click', function() {
            $('#borrarproductos').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            $('#delIdProd').val(data[0]);

        });
    });
</script>
<script>
    //ESTO ELIMINA LOS CAMPOS DE LA TABLA DE PRODUCTOS
    $('#btnsi').on('click', function() {
        $.post(
            "/productos/eliminar", {
                IdProd: $("#delIdProd").val(),
            }
            // function(data, status) {
            //     alert("Data: " + data + "\nStatus: " + status);
            // }
        );
    });
</script>


<!-- MODIFICAR UN PRODUCTO -->
<script>
    $(document).ready(function() {
        //esa clase esta en el boton de modificar de la tabla de entradas
        $('.modproductos').on('click', function() {
            //este id es el id del modal
            $('#modificarproductos').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function() {
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
            $('#IdCat').val(data[8]);
            $('#FechaCad').val(data[10]);
            $('#numero_lote').val(data[11]);
            $('#IdSucursal').val(data[12]);
        });
    });
</script>

<!-- ACCION DEL BOTON DE MODIFICAR DE LA TABLA DE PRODUCTOS -->
<script>
    //id del modal boton 
    $('#modificarP').on('click', function() {
        $.post(
            "/productos/modificar", {
                IdProd: $("#IdProd").val(),
                NomProd: $("#NomProd").val(),
                PrecProd: $("#PrecProd").val(),
                PrecCompra: $("#PrecCompra").val(),
                stock: $("#stock").val(),
                Descripcion: $("#Descripcion").val(),
                IdProv: $("#IdProv").val(),
                IdCat: $("#IdCat").val(),
                FechaCad: $("#FechaCad").val(),
                numero_lote: $("#numero_lote").val(),
                IdSucursal: $("#IdSucursal").val(),
            }//,
            // function(data, status) {
            //     alert("Data: " + data + "\nStatus: " + status);
            // }
        );
    });
</script>