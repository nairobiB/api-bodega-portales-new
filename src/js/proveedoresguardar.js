$("#btnGuardar").click(function () {
    $.post(
      "/proveedoresguardar/guardar",
      {
        IdProv: $("#inputIdProv").val(),
        Nomproveedor: $("#inputNomproveedor").val(),
        Telproveedor: $("#inputTelproveedor").val(),
        Dirproveedor: $("#inputDirproveedor").val(),
        Estado: $("#inputEstado").val(),
        email: $("#inputemail").val(),
      },
      function (data, status) {
        alert("Data: " + data + "\nStatus: " + status);
      }
    );
  });
  //id del modal boton
  $('#modificarproveedores').on('click',function(){
    $.post(
        "/proveedores/modificar",
        {
          IdProv: $("#IdProv").val(),
          Nomproveedor: $("#Nomproveedor").val(),
          Telproveedor: $("#Telproveedor").val(),
          PrecCompra: $("#PrecCompra").val(),
          Dirproveedor: $("#Dirproveedor").val(),
          Estado: $("#Estado").val(),
          email: $("#email").val(),
        },
        function (data, status) {
        alert("Data: " + data + "\nStatus: " + status);
        }
        );
    });
  
  // ###############################################################################################
  
    //ESTO ELIMINA LOS CAMPOS DE LA TABLA DE ENTRADAS
    $('#borrarproveedores').on('click',function(){
      $.post(
          "/proveedores/eliminar",
          {
            IdProv: $("#borrarproveedores").val(),
          },
          function (data, status) {
          alert("Data: " + data + "\nStatus: " + status);
          }
          );
      });