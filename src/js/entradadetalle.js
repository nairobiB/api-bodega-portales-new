//CAMPOS DE GUARDAR DETALLE DE ENTRADA
// $("#btnGuardar").click(function () {
//   $.post(
//     "/entradadetalle/guardardetalle",
//     {
//       IdCompra: $("#inputcompra").val(),
//       IdProd: $("#inputproducto").val(),
//       Cantidad: $("#inputcantidad").val(),
//       Precio: $("#inputprecio").val(),
//     },
//     function (data, status) {
//       alert("Data: " + data + "\nStatus: " + status);
//     }
//   );
// });


var fecha = document.getElementById('inputfecha')
var proveedorFK = document.getElementById('inputproveedor')
var compraFK = document.getElementById('inputcompra')
var productoFK = document.getElementById('inputproducto')
var cantidad = document.getElementById('inputcantidad')
var precio = document.getElementById('inputprecio')
var usuarioFK = document.getElementById('inputusuario')
var errorEntrada = document.getElementById('errorEntrada')

function validarEntrada(){
var mensajeError = []

//VALIDAR FECHA
if(fecha.value.trim() === '' ||  fecha.value.trim() === null){
  mensajeError.push('Fecha Vacía')
}

//VALIDAR PROVEEDOR
if(proveedorFK.value.trim() === '' ||  proveedorFK.value.trim() === null){
  mensajeError.push('ID de Proveedor Vacio')
}
// if (typeof (proveedorFK) != Number) {
//   mensajeError.push('El id de proveedor debe ser un numero entero!')
// }

//VALIDAR ID COMPRA
if(compraFK.value.trim() === '' ||  compraFK.value.trim() === null){
  mensajeError.push('ID de Compra Vacio')
}
// if (typeof (compraFK) != Number) {
//   mensajeError.push('El id de compra debe ser un numero entero!')
// }

//VALIDAR PRODUCTO
if(productoFK.value.trim() === '' ||  productoFK.value.trim() === null){
  mensajeError.push('ID de Producto Vacio')
}
// if (typeof (productoFK) != Number) {
//   mensajeError.push('El id de producto debe ser un numero entero')
// }

//VALIDAR CANTIDAD
if(cantidad.value.trim() === '' ||  cantidad.value.trim() === null){
  mensajeError.push('Cantidad Vacia')
}
// if (typeof (compra) != Number) {
//   mensajeError.push('La Cantidad de Compra debe ser un numero entero')
// }

//VALIDAR PRECIO
if(precio.value.trim() === '' ||  precio.value.trim() === null){
  mensajeError.push('Precio Vacio')
}
// if (typeof (precio) != Number) {
//   mensajeError.push('El precio debe ser un numero')
// }

//VALIDAR USUARIO
if(usuarioFK.value.trim() === '' ||  usuarioFK.value.trim() === null){
  mensajeError.push('Usuario Vacio')
}

errorEntrada.innerHTML = mensajeError.join(', ')
}