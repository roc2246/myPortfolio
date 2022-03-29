// ESLint Exceptions
/* eslint-disable no-return-assign */
/* eslint-disable no-unused-vars */

// Navigation
let optNo = 1;

function viewOptions(opt) {
  const option = document.getElementsByClassName('selected-option');

  Object.keys(option).forEach((item) => option[item].style.display = 'none');
  option[optNo - 1].style.display = 'block';
}

function newOption(opt) {
  viewOptions(optNo = opt);
}

viewOptions(optNo);

// Prevents A new listing from being created upon submission
if (window.history.replaceState) {
  window.history.replaceState(null, null, window.location.href);
}
