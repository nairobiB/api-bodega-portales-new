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
			fecha_nacimineto: $("#inputfechanacimiento").val(),
		},
		function (data, status) {
			alert("Data: " + data + "\nStatus: " + status);
		}
	);
});
//ESTO MODIFICA LOS CAMPOS DE LA TABLA DE PERSONAL
//ESTE ID ES EL DE EL BOTON DEL MODAL
$("#modifypersonal").on("click", function () {
	$.post(
		"/personal/modificarP",
		{
			IdPer: $("#idpersonal").val(),
			TelPer: $("#tel").val(),
			NomPer: $("#nombre").val(),
			ApePer: $("#apellido").val(),
			DirPer: $("#direccion").val(),
			Email: $("#email").val(),
			Estado: $("#estado").val(),
			fecha_nacimineto: $("#fechaNac").val(),
		},
		function (data, status) {
			alert("Data: " + data + "\nStatus: " + status);
		}
	);
});

//ESTO ELIMINA LOS CAMPOS DE LA TABLA DE PERSONAL
$("#btnsipersonal").on("click", function () {
	$.post(
		"/personal/eliminarP",
		{
			IdPer: $("#delpersonalcod").val(),
		},
		function (data, status) {
			alert("Data: " + data + "\nStatus: " + status);
		}
	);
});

// //ESTO MODIFICA LOS CAMPOS DE LA TABLA DE USUARIOS
// //ESTE ID ES EL DE EL BOTON DEL MODAL
$("#moduser").on("click", function () {
	$.post(
		"/personal/modificarU",
		{
			NomUsr: $("#usrname").val(),
			Contra: $("#contra").val(),
			IdPer: $("#idperson").val(),
			Estado: $("#state").val(),
			nivel: $("#level").val(),
			IdSucursal: $("#idsucu").val(),
		},
		function (data, status) {
			alert("Data: " + data + "\nStatus: " + status);
		}
	);
});

// // ###############################################################################################

// //ESTO ELIMINA LOS CAMPOS DE LA TABLA DE USUARIOS
$("#btnDelete").on("click", function () {
	$.post(
		"/personal/eliminarU",
		{
			NomUsr: $("#userdel").val(),
		},
		function (data, status) {
			alert("Data: " + data + "\nStatus: " + status);
		}
	);
});
