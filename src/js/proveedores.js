// var idproducto = document.getElementById('inputIdProv')
// var nombre = document.getElementById('inputNomproveedor')
// var telefono = document.getElementById('inputTelproveedor')
// var direccion = document.getElementById('inputDirproveedor')
// var estado = document.getElementById('inputEstado')
// var email = document.getElementById('inputemail')
// var errorProv = document.getElementById('errorProv')

// function validarProveedor() {
//   var mensajeError = []
//   //VALLIDAR ID PROVEEDOR
//   if (idproducto.value.trim() === '' || idproducto.value.trim() === null) {
//     mensajeError.push('Estado Vacio')
//   }

//   //VALLIDAR NOMBRE
//   if (nombre.value.trim() === '' || nombre.value.trim() === null) {
//     mensajeError.push('Nombre Vacio')
//   }

//   //VALLIDAR  TELEFONO
//   if (telefono.value.trim() === '' || telefono.value.trim() === null) {
//     mensajeError.push('Telefono Vacio')
//   }

//   //VALLIDAR  DIRECCION
//   if (direccion.value.trim() === '' || direccion.value.trim() === null) {
//     mensajeError.push('Direccion Vacia')
//   }


//   //VALLIDAR  ESTADO
//   if (estado.value.trim() === '' || estado.value.trim() === null) {
//     mensajeError.push('Estado Vacio')
//   }
  
//   //VALLIDAR  EMAIL
//   if (email.value.trim() === '' || email.value.trim() === null) {
//     mensajeError.push('EMAIL Vacia')
//   }
  
//   errorProv = mensajeError.join(', ')
//   return false;

// }



// $("#btnGuardarProve").click(function () {
//   $.post(
//     "/proveedoresguardar/guardar",
//     {
//       IdProv: $("#inputIdProv").val(),
//       Nomproveedor: $("#inputNomproveedor").val(),
//       Telproveedor: $("#inputTelproveedor").val(),
//       Dirproveedor: $("#inputDirproveedor").val(),
//       Estado: $("#inputEstado").val(),
//       email: $("#inputemail").val(),
//     },
//     function (data, status) {
//       alert("Data: " + data + "\nStatus: " + status);
//     }
//   );
// });

$('#modificarProveedor').on('click', function () {
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
$('#btndelete').on('click', function () {
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


