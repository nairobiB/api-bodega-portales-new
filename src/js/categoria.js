//CAMPOS DE GUARDAR CATEGORIA
$("#btnGuardarCategoria").click(function () {
    $.post(
      "/entradadetalle/guardarcategoria",
      {
        IdCat: $("#inputcategoria").val(),
        NombreCat: $("#inputnombre").val(),
      },
      function (data, status) {
        alert("Data: " + data + "\nStatus: " + status);
      }
    );
  });