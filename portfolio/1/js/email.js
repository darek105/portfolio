function checkUsername() {
  var username = imie.value;
  if (username.length < 3) {
    msgName.textContent = 'Imię zbyt krotkie...';
  } else {
    msgName.textContent = '';
  }
}

function tipUsername() {
  msgName.innerHTML = 'Imie musi zawierac 3 znaki!!!';
}

function checkEmail() {

  var emaill = email.value;

  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  if (emaill.length > 2) {
    if(!emailReg.test(emaill))
    {
      msgEmail.innerHTML = 'Zły format e-maila';
    }
    else
    {
      msgEmail.innerHTML = '';
    }
  } else {
    msgEmail.innerHTML = 'E-mail za krotki';
  }
}


var imie = document.getElementById('name');
var email = document.getElementById('email');
var msgName = document.getElementById('feedmessage');
var msgEmail = document.getElementById('emailCheck');


imie.addEventListener('focus', tipUsername, false);
imie.addEventListener('blur', checkUsername, false);
email.addEventListener('blur', checkEmail, false);
