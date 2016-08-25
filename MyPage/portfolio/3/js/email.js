function checkName() {
    var namee = name.value;
    if (namee.length < 2) {
        msgName.innerHTML = 'Name too short';
    } else {
        msgName.innerHTML = '';
    }
}

function tipName() {
    msgName.textContent = 'Name must contain two characters ';
}

function checkMail() {
    var emaill = email.value;
    var emailGood = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    if(emaill.length > 0){
      if (emailGood.test(emaill)) {
          msgEmail.textContent = '';
      } else {
          msgEmail.textContent = 'Write good e-mail';
      }
    } else {
        msgEmail.textContent = 'Write e-mail';
    }
}


var name = document.getElementById('name');
var email = document.getElementById('email');

var msgName = document.getElementById('feedmessage');
var msgEmail = document.getElementById('emailCheck');

name.addEventListener('focus', tipName, false);
name.addEventListener('blur', checkName, false);
email.addEventListener('blur', checkMail, false);
