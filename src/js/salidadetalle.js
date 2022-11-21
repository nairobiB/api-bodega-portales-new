$("#btnGuardarSalida").click(function () {
  $.post(
    "/salidadetalle/guardardetalle",
    {
      Codsalida: $("#inputventa").val(),
      IdProd: $("#inputproducto").val(),
      Cantidad: $("#inputcantidad").val(),
      Precsalida: $("#inputprecio").val(),
    },
    function (data, status) {
      alert("Data: " + data + "\nStatus: " + status);
    }
  );
});

var fecha = document.getElementById('inputfecha')
var ventaFK = document.getElementById('inputventa')
var productoFK = document.getElementById('inputproducto')
var cantidad = document.getElementById('inputcantidad')
var precio = document.getElementById('inputprecio')
var usuarioFK = document.getElementById('inputusuario')
var errorSalida = document.getElementById('errorSalida')


function validarSalida(){
  var mensajeError = []

  //VALIDAR FECHA
if(fecha.value.trim() === '' ||  fecha.value.trim() === null){
  mensajeError.push('Fecha Vacía')
}

//VALIDAR ID COMPRA
if(ventaFK.value.trim() === '' ||  ventaFK.value.trim() === null){
  mensajeError.push('ID de Venta Vacio')
}
// if (typeof (ventaFK) != Number) {
//   mensajeError.push('El id de venta debe ser un numero entero')
// }

//VALIDAR PRODUCTO
if(productoFK.value.trim() === '' ||  productoFK.value.trim() === null){
  mensajeError.push('ID de Producto Vacio')
}
// if (typeof (productoFK) != Number) {
//   mensajeError.push('El id de producto debe ser un numero entero!')
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

errorSalida.innerHTML = mensajeError.join(', ')
return false;

}