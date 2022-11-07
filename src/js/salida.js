$("#btnGuardar").click(function () {
  $.post(
    "/salidadetalle/guardar",
    {
      Fechaentrada: $("#inputfecha").val(),
      NomUsr: $("#inputusuario").val(),
    },
    function (data, status) {
      alert("Data: " + data + "\nStatus: " + status);
    }
  );
});
