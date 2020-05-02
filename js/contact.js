const form = document.getElementById('form');
const username = document.getElementById('username');
const email = document.getElementById('email');
const message = document.getElementById('message');

//prevent form to work if something wrong
form.addEventListener('submit', e => {
  checkInputs();
  if(not_valid == true){
    e.preventDefault();
  
  }
  else if(valid1 == true && valid2 == true && valid3 == true){
    
  }
  //we are reseting the var
  not_valid = undefined; 
  valid1 = undefined;
  valid2 = undefined; 
  valid3 = undefined;

});

function checkInputs() {
  // trim to remove the whitespaces
  const usernameValue = username.value.trim();
  const emailValue = email.value.trim();
  const messageValue = message.value.trim();
  
  if(usernameValue === '') {
    setErrorFor(username, 'Le champs ne doit pas être vide');
    not_valid = true;
  } else {
    setSuccessFor(username);
    valid1 = true;
  }
  
  if(emailValue === '') {
    setErrorFor(email, "L 'email ne doit pas être vide");
    not_valid = true;
  } else if (!isEmail(emailValue)) {
    setErrorFor(email, "L 'email nest pas valide");
    not_valid = true;
  } else {
    setSuccessFor(email);
    valid2 = true;
  }

  if(messageValue === '' || messageValue.length < 10) {
    setErrorFor1(message, 'Vous devez entrer un message plus long');
    not_valid = true;
  } else {
    setSuccessFor1(message);
    valid3 = true;
  }

}

function setErrorFor(input, message) {
  const formControl = input.parentElement;
  const small = formControl.querySelector('small');
  formControl.className = 'form-control error';
  small.innerText = message;
}
function setErrorFor1(input, message) {
  const formControl = input.parentElement;
  const small = formControl.querySelector('small');
  formControl.className = 'form-control errormsg';
  small.innerText = message;
}

function setSuccessFor(input) {
  const formControl = input.parentElement;
  formControl.className = 'form-control success';
}

function setSuccessFor1(input) {
  const formControl = input.parentElement;
  formControl.className = 'form-control successmsg';
}
  
function isEmail(email) {
  return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}