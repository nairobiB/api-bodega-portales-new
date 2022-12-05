// $("#btnguardarS").click(function () {
//   $.post(
//     "/sucursalesguardar/guardar",
//     {
//       IdSucursal: $("#inputIdSucursal").val(),
//       DescSucursal: $("#inputDescSucursal").val(),
//       telsucursal: $("#inputtelsucursal").val(),
//       email: $("#inputemail").val(),
//       direccionsucursal: $("#inputdireccionsucursal").val(),
//     },
//     function (data, status) {
//       alert("Data: " + data + "\nStatus: " + status);
//     }
//   );
// });
//id del modal boton
// $('#modificarS').on('click', function () {
//   $.post(
//     "/sucursales/modificar",
//     {
//       IdSucursal: $("#IdSucursal").val(),
//       DescSucursal: $("#DescSucursal").val(),
//       telsucursal: $("#telsucursal").val(),
//       email: $("#email").val(),
//       direccionsucursal: $("#direccionsucursal").val(),
//     },
//     function (data, status) {
//       alert("Data: " + data + "\nStatus: " + status);
//     }
//   );
// });

// ###############################################################################################

//ESTO ELIMINA LOS CAMPOS DE LA TABLA DE ENTRADAS
// $('#btnconfirmar').on('click', function () {
//   $.post(
//     "/sucursales/eliminar",
//     {
//       IdSucursal: $("#delIdSucursal").val(),
//     },
//     function (data, status) {
//       alert("Data: " + data + "\nStatus: " + status);
//     }
//   );
// });


var id = document.getElementById('inputIdSucursal')
var descripcion = document.getElementById('inputDescSucursal')
var telefono = document.getElementById('inputtelsucursal')
var Email = document.getElementById('inputemail')
var direccion = document.getElementById('inputdireccionsucursal')
var errorSucursal = document.getElementById('errorSucursal')

function validarSucursal() {
  var mensajeError = []

  //VALIDAR ID SUCURSAL
  if(id.value.trim() === '' ||  id.value.trim() === null){
    mensajeError.push('ID de Sucursal Vacio')
  }
  //VALIDAR DESCRIPCION
  if (descripcion.value.trim() === '' || descripcion.value.trim() === null) {
    mensajeError.push('Descripcion Vacio')
  }

  //VALIDAR TELEFONO
  if (telefono.value.trim() === '' || telefono.value.trim() === null) {
    mensajeError.push('Telefono Vacio')
  }

  //VALIDAR EMAIL
  if (Email.value.trim() === '' || Email.value.trim() === null) {
    mensajeError.push('Email Vacio')
  }

  //VALIDAR DIRECCION
  if (direccion.value.trim() === '' || direccion.value.trim() === null) {
    mensajeError.push('Direccion Vacia')
  }


  errorSucursal.innerHTML = mensajeError.join(', ')
  return false;
}