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
        "/entradas/modificar",
        {
            IdCompra: $("#codigo").val(),
            Fechaentrada: $("#fecha").val(),
            IdProv: $("#proveedor").val(),
            NomUsr: $("#encargado").val(),
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
          "/entradas/eliminar",
          {
              IdCompra: $("#delcodigo").val(),
          },
          function (data, status) {
          alert("Data: " + data + "\nStatus: " + status);
          }
          );
      });
  