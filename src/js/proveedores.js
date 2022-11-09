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
$('#modificarProveedor').on('click',function(){
  $.post(
      "/proveedoresguardar/modificar",
      {
        IdProv: $("#IdProv").val(),
        Nomproveedor: $("#Nomproveedor").val(),
        Telproveedor: $("#Telproveedor").val(),
        Dirproveedor: $("#Dirproveedor").val(),
        email: $("#email").val(),
      },
      function (data, status) {
      alert("Data: " + data + "\nStatus: " + status);
      }
      );
  });

// ###############################################################################################

  //ESTO ELIMINA LOS CAMPOS DE LA TABLA DE PROVEEDORES
  $('#btndelete').on('click',function(){
    $.post(
        "/proveedoresguardar/eliminar",
        {
          IdProv: $("#delIdProv").val(),
        },
        function (data, status) {
        alert("Data: " + data + "\nStatus: " + status);
        }
        );
    });

