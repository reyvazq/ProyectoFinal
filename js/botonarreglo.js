const btnMinusList = document.querySelectorAll('.js-btn-minus');
const btnPlusList = document.querySelectorAll('.js-btn-plus');
const inputCantidadList = document.querySelectorAll('.js-input-cantidad');

btnMinusList.forEach((btnMinus, index) => {
  btnMinus.addEventListener('click', () => {
    if (inputCantidadList[index].value > 1) {
      inputCantidadList[index].value = parseInt(inputCantidadList[index].value) - 1;
    }
  });
});

btnPlusList.forEach((btnPlus, index) => {
  btnPlus.addEventListener('click', () => {
    inputCantidadList[index].value = parseInt(inputCantidadList[index].value) + 1;
  });
});