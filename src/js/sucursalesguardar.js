$("#btnguardarS").click(function () {
    $.post(
      "/sucursalesguardar/guardar",
      {
        IdSucursal: $("#inputIdSucursal").val(),
        DescSucursal: $("#inputDescSucursal").val(),
        telsucursal: $("#inputtelsucursal").val(),
        email: $("#inputemail").val(),
        direccionsucursal: $("#inputdireccionsucursal").val(),
      },
      function (data, status) {
        alert("Data: " + data + "\nStatus: " + status);
      }
    );
  });
  //id del modal boton
  $('#modsucursales').on('click',function(){
    $.post(
        "/sucursales/modificar",
        {
          IdSucursal: $("#IdSucursal").val(),
          DescSucursal: $("#DescSucursal").val(),
          telsucursal: $("#telsucursal").val(),
          email: $("#email").val(),
          direccionsucursal: $("#direccionsucursal").val(),
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
          "/sucursales/eliminar",
          {
            IdSucursal: $("#borrarsucursal").val(),
          },
          function (data, status) {
          alert("Data: " + data + "\nStatus: " + status);
          }
          );
      });
  