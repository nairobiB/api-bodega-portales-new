<?php
session_start();
require_once('vistas/plantilla/head.php');
require_once('vistas/plantilla/nav.php');
require_once('vistas/plantilla/titulo.php');
?>

<!-- Modal -->
<!-- MODIFICAR UNA ENTRADA -->
<div class="modal fade" id="modificarentrada" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modificar Entrada</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <form action="" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <label> Codigo </label>
                            <input type="text" name="codigo" id="codigo" class="form-control" disabled=»disabled»>
                        </div>
                        <div class="form-group">
                            <label> Fecha de Entrada </label>
                            <input type="text" name="fecha" id="fecha" class="form-control" placeholder="Ingrese la fecha de entradaa">
                        </div>
                        <div class="form-group">
                            <label> Id del Proveedor </label>
                            <input type="text" name="proveedor" id="proveedor" class="form-control" placeholder="Id del Proveedor">
                        </div>

                        <div class="form-group">
                            <label> Encargado </label>
                            <input type="text" name="encargado" id="encargado" class="form-control" placeholder="Ingrese el encargado">
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
<div class="modal fade" id="borrarentrada" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Eliminar Entrada</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <form action="" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <label> Codigo </label>
                            <input type="text" name="delcodigo" id="delcodigo" class="form-control" disabled=»disabled»>
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

<!-- ############################################################################################################################################################################################ -->

<!-- TABLA DE ENTRADAS -->
<div class="container">
<table class="table table-bordered">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Fecha Entrada</th>
            <th scope="col">Proveedor</th>
            <th scope="col">Encargado</th>
            <th scope="col">Acción</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($this->datos as $f) {
        ?>
            <tr>
                <td scope="row"><?php echo $f['IdCompra']; ?>
                </td>
                <td><?php echo $f['Fechaentrada']; ?>
                </td>
                <td><?php echo $f['IdProv']; ?>
                </td>
                <td><?php echo $f['NomUsr']; ?>
                </td>
                <td>
                    <div class="btn-group" role="group">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary modentrada" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Modificar
                        </button>
                        <button type="submit" class="btn btn-danger btneliminar" name="btnborrar" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Eliminar
                        </button>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </tbody>

</table>

<!-- ############################################################################################################################################################################### -->

<!-- TABLA DE DETALLE DE ENTRADAS -->
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
                <td scope="row"><a href=""><?php echo $f2['IdCompra']; ?></a>
                </td>
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

<!-- ###################################################################################################################################################################### -->

<!-- TABLA DE CATEGORIAS -->
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
</div>
</section>
<?php
require_once('vistas/plantilla/pie.php');
require_once('vistas/plantilla/js.php');
?>
<!-- SCRIPT PARA ELIMINAR -->
<script>
$(document).ready(function(){
    // lo hacemos con una class
    $('.btneliminar').on('click',function(){
        $('#borrarentrada').modal('show');
        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function () {
            return $(this).text();
        }).get();

        console.log(data);

        $('#delcodigo').val(data[0]);

    });
});
</script>

<!-- ################################################################################################################### -->

<!--Script PARA MODIFICAR-->
<script>
$(document).ready(function(){
    $('.modentrada').on('click',function(){
        $('#modificarentrada').modal('show');
        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function () {
            return $(this).text();
        }).get();

        console.log(data);

        $('#codigo').val(data[0]);
        $('#fecha').val(data[1]);
        $('#proveedor').val(data[2]);
        $('#encargado').val(data[3]);
    });
});
</script>
<?php
require_once('vistas/plantilla/fin.php');
?>