//CAMPOS DE GUARDAR PERSONAL
$("#btnGuardarPersonal").click(function () {
    $.post(
      "/personalAgregar/guardar",
      {
        IdPer: $("#inputpersonal").val(),
        TelPer: $("#inputTelefono").val(),
        NomPer: $("#inputnombre").val(),
        ApePer: $("#inputapellido").val(),
        DirPer: $("#inputdireccion").val(),
        Email: $("#inputemail").val(),
        FechaNac: $("#inputfechanacimiento").val()
      },
      function (data, status) {
        alert("Data: " + data + "\nStatus: " + status);
      }
    );
  });