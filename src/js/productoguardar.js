// $("#bguardar").click(function () {
//   $.post(
//     "/productoguardar/guardar",
//     {
//       IdProd: $("#inputIdProd").val(),
//       NomProd: $("#inputNomProd").val(),
//       PrecProd: $("#inputPrecProd").val(),
//       PrecCompra: $("#inputPrecCompra").val(),
//       stock: $("#inputcstock").val(),
//       Descripcion: $("#inputDescripcion").val(),
//       IdProv: $("#inputIdProv").val(),
//       Estado: $("#inputEstado").val(),
//       IdCat: $("#inputIdCat").val(),
//       FechaCad: $("#inputfechaCad").val(),
//       numero_lote: $("#inputnumero_lote").val(),
//       IdSucursal: $("#inputIdSucursal").val(),
//     },
//     function (data, status) {
//       alert("Data: " + data + "\nStatus: " + status);
//     }
//   );
// });

//id del modal boton
$('#modificar').on('click', function () {
  $.post(
    "/productos/modificar",
    {
      IdProd: $("#IdProd").val(),
      NomProd: $("#NomProd").val(),
      PrecProd: $("#PrecProd").val(),
      PrecCompra: $("#PrecCompra").val(),
      stock: $("#stock").val(),
      Descripcion: $("#Descripcion").val(),
      IdProv: $("#IdProv").val(),
      Estado: $("#Estado").val(),
      IdCat: $("#encargaIdCatdo").val(),
      FechaCad: $("#FechaCad").val(),
      numero_lote: $("#numero_lote").val(),
      IdSucursal: $("#IdSucursal").val(),
    },
    function (data, status) {
      alert("Data: " + data + "\nStatus: " + status);
    }
  );
});

// ###############################################################################################

//ESTO ELIMINA LOS CAMPOS DE LA TABLA DE ENTRADAS
$('#btnsi').on('click', function () {
  $.post(
    "/productos/eliminar",
    {
      IdProd: $("#borrarproductos").val(),
    },
    function (data, status) {
      alert("Data: " + data + "\nStatus: " + status);
    }
  );
});

var idProducto = document.getElementById('inputIdProd')
var nombre = document.getElementById('inputNomProd')
var precioProducto = document.getElementById('inputPrecProd')
var precioCompra = document.getElementById('inputPrecCompra')
var stock = document.getElementById('inputcstock')
var descripcion = document.getElementById('inputDescripcion')
var proveedor = document.getElementById('inputIdProv')
var estado = document.getElementById('inputEstado')
var categoria = document.getElementById('inputIdCat')
var fechaCad = document.getElementById('inputfechaCad')
var lote = document.getElementById('inputnumero_lote')
var sucursal = document.getElementById('inputIdSucursal')
var errorProducto = document.getElementById('errorProducto')

function validarProducto() {
  var mensajeError = []

  //VALIDAR ID PRODUCTO
  if (idProducto.value.trim() === '' || idProducto.value.trim() === null) {
    mensajeError.push('ID de Producto Vacio')
  }
  // if (typeof (idProducto) != Number) {
  //   mensajeError.push('El id de proveedor debe ser un numero entero!')
  // }

  //VALIDAR NOMBRE
  if (nombre.value.trim() === '' || nombre.value.trim() === null) {
    mensajeError.push('Nombre Vacio')
  }

  //VALLIDAR PRECIO PRODUCTO
  if (idProducto.value.trim() === '' || idProducto.value.trim() === null) {
    mensajeError.push('Precio del Producto Vacio')
  }
  // if (typeof (idProducto) != Number) {
  //   mensajeError.push('El id de proveedor debe ser un numero entero!')
  // }

  //VALLIDAR PRECIO COMPRA
  if (precioCompra.value.trim() === '' || precioCompra.value.trim() === null) {
    mensajeError.push('Precio de Compra Vacio')
  }

  //VALLIDAR  STOCK
  if (stock.value.trim() === '' || stock.value.trim() === null) {
    mensajeError.push('Cantidad de Stock Vacio')
  }

  //VALLIDAR  Descripcion
  if (descripcion.value.trim() === '' || descripcion.value.trim() === null) {
    mensajeError.push('ID de Descipcion Vacio')
  }

  //VALLIDAR  PROVEEDOR
  if (proveedor.value.trim() === '' || proveedor.value.trim() === null) {
    mensajeError.push('ID de Proveedor Vacio')
  }

  //VALLIDAR  ESTADO
  if (estado.value.trim() === '' || estado.value.trim() === null) {
    mensajeError.push('Estado Vacio')
  }


  //VALLIDAR  CATEGORIA
  if (categoria.value.trim() === '' || categoria.value.trim() === null) {
    mensajeError.push('ID de Categoria Vacio')
  }


  //VALLIDAR  FECHA CADUCIDAD
  if (fechaCad.value.trim() === '' || fechaCad.value.trim() === null) {
    mensajeError.push('Fecha de Caducidad Vacia')
  }

  //VALLIDAR NUMERO LOTE
  if (lote.value.trim() === '' || lote.value.trim() === null) {
    mensajeError.push('Numero de Lote Vacio')
  }

  //VALLIDAR  SUCURSAL
  if (sucursal.value.trim() === '' || sucursal.value.trim() === null) {
    mensajeError.push('ID de Sucursal Vacio')
  }

  errorProducto.innerHTML = mensajeError.join(', ')
  return false;

}