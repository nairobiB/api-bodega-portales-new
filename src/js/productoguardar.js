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

  //id del modal boton
  $('#modificar').on('click',function(){
    $.post(
        "/productos/modificar",
        {
          IdProd: $("#IdProd").val(),
          NomProd: $("#NomProd").val(),
          PrecProd: $("#PrecProd").val(),
          PrecCompra: $("#PrecCompra").val(),
          stock: $("#stock").val(),
          Descripcion: $("#Descripcion").val(),
          IdProv: $("#IdProv").val(),
          Estado: $("#Estado").val(),
          IdCat: $("#encargaIdCatdo").val(),
          FechaCad: $("#FechaCad").val(),
          numero_lote: $("#numero_lote").val(),
          IdSucursal: $("#IdSucursal").val(),
        },
        function (data, status) {
        alert("Data: " + data + "\nStatus: " + status);
        }
        );
    });
  
  // ###############################################################################################
  
    //ESTO ELIMINA LOS CAMPOS DE LA TABLA DE ENTRADAS
    $('#btnsi').on('click',function(){
      $.post(
          "/productos/eliminar",
          {
            IdProd: $("#borrarproductos").val(),
          },
          function (data, status) {
          alert("Data: " + data + "\nStatus: " + status);
          }
          );
      });
  