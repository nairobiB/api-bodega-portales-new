//CAMPOS DE GUARDAR CATEGORIA

var idCat = document.getElementById("inputcategoria")
var nombreCat = document.getElementById("inputnombre")
var errorCat = document.getElementById("errorCat")

function validarCat() {
  var mensajeError=[]

  //VALIDAR ID
  if (idCat.value.trim() === '' ||  idCat.value.trim() === null) {
    mensajeError.push('ID Vacio')
  }

  if (typeof (id) != Number) {
    mensajeError.push('El id debe ser un numero entero!')
  }

  //VALIDAR NOMBRE
  if (nombreCat.value.trim() === '' || nombreCat.value.trim() === null) {
    mensajeError.push('Nombre Vacio')
  }

  // if (nombre.length > 75) {
  //   mensajeError.push('Nombre muy largo')
  // }

  errorCat.innerHTML = mensajeError.join(', ')
  return false;
}