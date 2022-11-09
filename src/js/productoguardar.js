$("#bguardar").click(function () {
    $.post(
      "/productoguardar/guardar",
      {
        IdProd: $("#inputIdProd").val(),
        NomProd: $("#inputNomProd").val(),
        PrecProd: $("#inputPrecProd").val(),
        PrecCompra: $("#inputPrecCompra").val(),
        stock: $("#inputcstock").val(),
        Descripcion: $("#inputDescripcion").val(),
        IdProv: $("#inputIdProv").val(),
        Estado: $("#inputEstado").val(),
        IdCat: $("#inputIdCat").val(),
        FechaCad: $("#inputfechaCad").val(),
        numero_lote: $("#inputnumero_lote").val(),
        IdSucursal: $("#inputIdSucursal").val(),
      },
      function (data, status) {
        alert("Data: " + data + "\nStatus: " + status);
      }
    );
  });
  