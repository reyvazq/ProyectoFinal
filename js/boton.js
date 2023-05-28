
  // Obtener referencia a los elementos del DOM
  const btnMinus = document.querySelector('.js-btn-minus');
  const btnPlus = document.querySelector('.js-btn-plus');
  const inputCantidad = document.querySelector('.js-input-cantidad');

  // Manejar el evento click en el botón de disminuir
  btnMinus.addEventListener('click', () => {
    if (inputCantidad.value > 1) {
      inputCantidad.value = parseInt(inputCantidad.value) - 1;
    }
  });

  // Manejar el evento click en el botón de incrementar
  btnPlus.addEventListener('click', () => {
    inputCantidad.value = parseInt(inputCantidad.value) + 1;
  });
