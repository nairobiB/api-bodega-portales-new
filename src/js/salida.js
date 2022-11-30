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
//ESTO MODIFICA LOS CAMPOS DE LA TABLA DE SALIDAS
//ESTE ID ES EL DE EL BOTON DEL MODAL
// $("#modsalida").on("click", function () {
// 	$.post(
// 		"/salidas/modificarSalida",
// 		{
// 			Codsalida: $("#codsalida").val(),
// 			FechaVenta: $("#fechaventa").val(),
// 			NomUsr: $("#encargadosalida").val(),
// 		},
// 		function (data, status) {
// 			alert("Data: " + data + "\nStatus: " + status);
// 		}
// 	);
// });

//ESTO ELIMINA LOS CAMPOS DE LA TABLA DE SALIDAS
// $("#btnsidel").on("click", function () {
// 	$.post(
// 		"/salidas/eliminarSalida",
// 		{
// 			Codsalida: $("#delcodsalida").val(),
// 		},
// 		function (data, status) {
// 			alert("Data: " + data + "\nStatus: " + status);
// 		}
// 	);
// });
