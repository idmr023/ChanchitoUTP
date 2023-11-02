// Declaración de variables
var btnAutoGenerar = document.getElementById("btnAutoGenerar");
var inputFechaVencimiento = document.getElementById("fecha_vencimiento");
var visualFechaVencimiento = document.getElementById("card-from");
var inputNumeroTarjeta = document.getElementById("numero_tarjeta");
var visualNumeroTarjeta = document.getElementById("card-number");
var inputCvv = document.getElementById("cvv");
var visualCvv = document.getElementById("card-to");

// Asociar un solo evento "click" al botón
btnAutoGenerar.addEventListener("click", function() {
  var fechaVencimiento = generarFechaVencimiento();
  var numeroTarjeta = generarNumeroTarjeta();
  var cvv = generarCVV();

  actualizarElemento(inputFechaVencimiento, fechaVencimiento);
  actualizarElemento(visualFechaVencimiento, fechaVencimiento);
  actualizarElemento(inputNumeroTarjeta, numeroTarjeta);
  actualizarElemento(visualNumeroTarjeta, numeroTarjeta);
  actualizarElemento(inputCvv, cvv);
  actualizarElemento(visualCvv, cvv);
  addSpacesToNumber();
});

// Generar fecha de vencimiento
function generarFechaVencimiento() {
  var fechaActual = new Date();
  var fechaVencimiento = new Date(fechaActual.getFullYear() + 7, 9, 1);
  var mes = fechaVencimiento.getMonth() + 1;
  var anio = fechaVencimiento.getFullYear().toString().slice(-2);
  return `${mes}/${anio}`;
}

function generarNumeroTarjeta() {
    var numeroTarjeta = "";
    var min = 1000000000000000;
    var max = 9999999999999999;
  
    numeroTarjeta = Math.floor(Math.random() * (max - min + 1) + min).toString();
  
    return numeroTarjeta;
}

// Generar CVV aleatorio
function generarCVV() {
  var cvv = "";
  for (var i = 0; i < 3; i++) {
    cvv += Math.floor(Math.random() * 10);
  }
  return cvv;
}

// Actualizar un elemento visual con el valor proporcionado
function actualizarElemento(elemento, valor) {
  elemento.value = valor;
  elemento.textContent = valor;
}

//espacio

function addSpacesToNumber() {
    var cardNumberElement = document.getElementById('card-number');
    var cardNumber = cardNumberElement.textContent;
    var formattedNumber = cardNumber.replace(/(\d{4})/g, '$1 ');
    cardNumberElement.textContent = formattedNumber;
  }
  
  // Otras funciones existentes...
  
  // Llama a la función para agregar los espacios
  addSpacesToNumber();

  //==============================================
// Obtener referencias a los elementos HTML relevantes
const cardName = document.getElementById('card-name');

// Agregar evento de entrada al campo del formulario
document.getElementById('titular').addEventListener('input', updateCardName);

// Función para actualizar el nombre del titular en tiempo real
function updateCardName(event) {
  cardName.textContent = event.target.value;
}
