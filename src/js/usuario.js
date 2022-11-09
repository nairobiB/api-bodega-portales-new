//CAMPOS DE GUARDAR USUARIO
$("#btnGuardarUsuario").click(function () {
    $.post(
      "/personalAgregar/guardarusuario",
      {
        NomUsr: $("#inputusuario").val(),
        Contra: $("#inputcontraseña").val(),
        IdPer: $("#inputidpersonal").val(),
        Nivel: $("#inputnivel").val(),
        IdSucursal: $("#inputidsucursal").val(),
      },
      function (data, status) {
        alert("Data: " + data + "\nStatus: " + status);
      }
    );
  });