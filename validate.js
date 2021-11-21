/* eslint-disable no-plusplus */
/* eslint-disable keyword-spacing */
// Sets up the arrays with regex and textfields
let inputs = [];
let regex = [];

function txtBoxes(form) {
  const txtBoxInputs = {
    email: form.email,
    subject: form.subject,
    message: form.message,
  };

  const { email, subject, message } = txtBoxInputs;

  inputs.push(email, subject, message);
  return inputs;
}

// eslint-disable-next-line no-useless-escape
const regexEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
const regexSubject = /^(?!\s*$).+/;
const regexMessage = /^(?!\s*$).+/;

function regexAssign() {
  regex.push(regexEmail, regexSubject, regexMessage);
  return regex;
}

// Displays loading message whn email is sending
function loadMssg() {
  const status = document.createElement('h4');
  status.id = 'sendMssg';
  // eslint-disable-next-line prefer-template
  document.getElementById('sendMssg').style.marginTop = 15 + 'px';
  document.getElementsByTagName('form')[0].appendChild(status);
  if (document.readyState !== 'loading') {
    document.getElementById('sendMssg').innerHTML = 'Sending...';
  } else{
    document.getElementById('sendMssg').style.visibility = 'hidden';
  }

  if (document.getElementById('sent')) {
    document.getElementById('sent').remove();
  }
}

/// ///////Checks for errors upon submission///////////////////
// eslint-disable-next-line no-unused-vars
function submitForm(form, refreshTo) {
  const regexTest = [];
  txtBoxes(form);
  regexAssign();
  function everyOne() {
    for(let i = 0; i < inputs.length; i++) {
      if(regex[i].test(inputs[i].value) === true) {
        regexTest.push(regex[i].test(inputs[i].value));
      } else{
        // eslint-disable-next-line no-continue
        continue;
      }
    }
  }

  everyOne();

  if(regexTest.length === inputs.length) {
    if(typeof regexEmail !== 'undefined') loadMssg();
    form.setAttribute('action', refreshTo);
    form.setAttribute('onsubmit', 'return true;');
  }else{
    for(let i = 0; i < inputs.length; i++) {
      if(!regex[i].test(inputs[i].value)) {
        // eslint-disable-next-line no-alert
        alert(`Please fill out a valid ${inputs[i].getAttribute('name')}.`);
        inputs[i].focus();
        inputs[i].select();
      }
    }
    form.setAttribute('action', '');
    form.setAttribute('onsubmit', 'return false;');
    inputs = [];
    regex = [];
  }
}
