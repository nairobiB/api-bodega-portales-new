//CAMPOS DE GUARDAR ENTRADA
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
//ESTO MODIFICA LOS CAMPOS DE LA TABLA DE ENTRADAS
//ESTE ID ES EL DE EL BOTON DEL MODAL
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
