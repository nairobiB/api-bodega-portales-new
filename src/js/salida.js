$("#btnGuardarSalida").click(function () {
  $.post(
    "/salidadetalle/guardar",
    {
      FechaVenta: $("#inputfecha").val(),
      NomUsr: $("#inputusuario").val(),
    },
    function (data, status) {
      alert("Data: " + data + "\nStatus: " + status);
    }
  );
});
