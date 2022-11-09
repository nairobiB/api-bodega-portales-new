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