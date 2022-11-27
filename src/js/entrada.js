$("#btnGuardar").click(function () {
  $.post(
    "/entradadetalle/guardar",
    {
      Fechaentrada: $("#inputfecha").val(),
      IdProv: $("#inputproveedor").val(),
      NomUsr: $("#inputusuario").val(),
    },
    function (data, status) {
      alert("Data: " + data + "\nStatus: " + status);
    }
  );
});
