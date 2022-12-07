<?php
session_start();
?>
<div class="container">
    <br>
    <center><img src="public/assets/images/tienda.png" alt="" srcset="" width="200px">
        <h2>AGREGA UNA SUCURSAL</h2>
    </center>
    <br>
    <form class="needs-validation" novalidate method="POST">
        <div class="form-row d-flex justify-content-center">
            <!-- <div class="col-md-4 mb-3">
                <label for="inputIdSucursal">ID Sucursal</label>
                <input type="text" class="form-control" id="inputIdSucursal" placeholder="Ingrese el ID de la Sucursal" required>
                <div class="valid-feedback">
                    Correcto
                </div>
            </div> -->
            <div class="col-md-4 mb-3">
                <label for="inputDescSucursal">Descripcion de la Sucursal</label>
                <input type="text" class="form-control" id="inputDescSucursal" placeholder="Ingrese descripcion de la sucursal" required>
                <div class="valid-feedback">
                    Correcto
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="inputtelsucursal">Telefono Sucursal</label>
                <input type="text" class="form-control" id="inputtelsucursal" placeholder="Ingrese el Numero de telefono de la Sucursal" required>
                <div class="valid-feedback">
                    Correcto
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="inputemail">Email</label>
                <input type="text" class="form-control" id="inputemail" placeholder="Ingrese el Email de la Sucursal" required>
                <div class="valid-feedback">
                    Correcto
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="inputdireccionsucursal">Direccion Sucursal</label>
                <input type="text" class="form-control" id="inputdireccionsucursal" placeholder="Ingrese la Direccion de la Sucursal" required>
                <div class="valid-feedback">
                    Correcto
                </div>
            </div>
        </div>
        <center>
            <button class="btn btn-success" id="btnguardarS" type="submit">Agregar registro</button>
            <p id="errorSucursal"></p>
        </center>

</div>
</form>
</div>
<br>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>


<!-- VALIDACIONES -->
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

<script>
    (function() {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    } else {
                        //GUARDAR DATOS EN LA TABLA DE CATEGORIAS
                        $.post(
                            "/sucursales/guardar", {
                                DescSucursal: $("#inputDescSucursal").val(),
                                telsucursal: $("#inputtelsucursal").val(),
                                email: $("#inputemail").val(),
                                direccionsucursal: $("#inputdireccionsucursal").val(),
                            }//,
                            // function(data, status) {
                            //     alert("Data: " + data + "\nStatus: " + status);
                            // }

                        );

                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>