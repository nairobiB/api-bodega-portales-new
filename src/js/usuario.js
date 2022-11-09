//CAMPOS DE GUARDAR USUARIO
$("#btnGuardarUsuario").click(function () {
  $.post(
    "/personalAgregar/guardarusuario",
    {
      NomUsr: $("#inputusuario").val(),
      Contra: $("#inputcontraseña").val(),
      IdPer: $("#inputidpersonal").val(),
      nivel: $("#inputnivel").val(),
      IdSucursal: $("#inputidsucursal").val(),
    },
    function (data, status) {
      alert("Data: " + data + "\nStatus: " + status);
    }
  );
});

var usuario = document.getElementById('inputusuario')
var contraseña = document.getElementById('inputcontraseña')
var personal = document.getElementById('inputidpersonal')
var nivel = document.getElementById('inputnivel')
var sucursal = document.getElementById('inputidsucursal')
var errorUser = document.getElementById('errorUser')

function validarUsuario() {
  var mensajeError = []

  //VALIDAR USUARIO
  if (usuario.value.trim() === '' || usuario.value.trim() === null) {
    mensajeError.push('Usuario Vacio')
  }

  //VALIDAR CONTRASEÑA
  if (contraseña.value.trim() === '' || contraseña.value.trim() === null) {
    mensajeError.push('Contraseña Vacia')
  }
  //VALIDAR PERSONAL
  if (personal.value.trim() === '' || personal.value.trim() === null) {
    mensajeError.push('ID Personal Vacio')
  }
  //VALIDAR NIVEL
  if (nivel.value.trim() === '' || nivel.value.trim() === null) {
    mensajeError.push('Nivel Vacio')
  }
  //VALIDAR SUCURSAL
  if (sucursal.value.trim() === '' || sucursal.value.trim() === null) {
    mensajeError.push('ID Sucursal Vacio')
  }

  errorUser.innerHTML = mensajeError.join(', ')
  return false;
}

var idPersonal = document.getElementById('inputpersonal')
var telefono = document.getElementById('inputTelefono')
var nombre = document.getElementById('inputnombre')
var apellido = document.getElementById('inputapellido')
var direccion = document.getElementById('inputdireccion')
var email = document.getElementById('inputemail')
var errorPersonal = document.getElementById('errorPersonal')

function validarPersonal() {
  var mensajeError = []

  //VALIDAR ID PERSONAL
  if (idPersonal.value.trim() === '' || idPersonal.value.trim() === null) {
    mensajeError.push('ID Personal Vacio')
  }

  //VALIDAR TELEFONO
  if (telefono.value.trim() === '' || telefono.value.trim() === null) {
    mensajeError.push('Telefono Vacio')
  }
  //VALIDAR NOMBRE
  if (nombre.value.trim() === '' || nombre.value.trim() === null) {
    mensajeError.push('Nombre Vacio')
  }
  //VALIDAR APELLIDO
  if (apellido.value.trim() === '' || apellido.value.trim() === null) {
    mensajeError.push('Apellido Vacio')
  }
  //VALIDAR DIRECCION
  if (direccion.value.trim() === '' || direccion.value.trim() === null) {
    mensajeError.push('Direccion Vacia')
  }
  //VALIDAR EMAIL
  if (email.value.trim() === '' || email.value.trim() === null) {
    mensajeError.push('Email Vacio')
  }

  errorPersonal.innerHTML = mensajeError.join(', ')
  return false;
}