$("#btnGuardarProv").click(function () {
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