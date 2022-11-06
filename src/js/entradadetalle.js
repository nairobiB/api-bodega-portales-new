$("#btnGuardar").click(function () {
    $.post(
      "/entradadetalle/guardardetalle",
      {
        IdCompra: $("#inputcompra").val(),
        IdProd: $("#inputproducto").val(),
        Cantidad: $("#inputcantidad").val(),
        Precio: $("#inputprecio").val(),
      },
      function (data, status) {
        alert("Data: " + data + "\nStatus: " + status);
      }
    );
  });
  