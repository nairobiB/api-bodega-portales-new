$("#btnGuardar").click(function () {
  $.post(
    "/salidadetalle/guardardetalle",
    {
      Codsalida: $("#inputventa").val(),
      IdProd: $("#inputproducto").val(),
      Cantidad: $("#inputcantidad").val(),
      Precsalida: $("#inputprecio").val(),
    },
    function (data, status) {
      alert("Data: " + data + "\nStatus: " + status);
    }
  );
});
