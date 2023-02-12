function disableScrolling() {
    setTimeout(function() {
        document.body.style.overflow = 'hidden';
    }, 1000);
}
  
function enableScrolling() {
    document.body.style.overflow = '';
}

function validate(){
    var FNvalid = false;
    var Uvalid = false;
    var Evalid = false;
    var Pvalid = false;
    var CPvalid = false;


    var fullname = document.getElementById('fullname').value;
    var username = document.getElementById('username').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var cpassword = document.getElementById('cpassword').value;

    var regexFN = /^[A-Z]{1}[a-zA-z]*\s{1}[A-Z]{1}[a-zA-z\s]*$/;
    var regexU = /^.{1,20}$/;
    var regexE = /^(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$/;
    var regexP = /^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{4,20}$/;
    var validateFN = regexFN.test(fullname);
    var validateU = regexU.test(username);
    var validateE = regexE.test(email);
    var validateP = regexP.test(password);

    if (!validateFN){
        console.log('Full Name empty');
        document.getElementById('fullname').style.border ='2px solid red';
        document.getElementById('not-valid-fullname').textContent = 'Both Name and Surname must start with Uppercase and be separated';
    } else{
        FNvalid = true;
        document.getElementById('not-valid-fullname').innerHTML = '';
        document.getElementById('fullname').style.border ='0px';
    }

    if (!validateU){
        console.log('Username empty');
        document.getElementById('username').style.border ='2px solid red';
        document.getElementById('not-valid-username').textContent = 'Username must be less that 20 characters long';
    } else{
        Uvalid = true;
        document.getElementById('not-valid-username').innerHTML = '';
        document.getElementById('username').style.border ='0px';
    }

    if (!validateE){
        console.log('Email empty');
        document.getElementById('email').style.border ='2px solid red';
        document.getElementById('not-valid-email').textContent = 'Email not valid';
    } else{
        Evalid = true;
        document.getElementById('not-valid-email').innerHTML = '';
        document.getElementById('email').style.border ='0px';
    }

    if (!validateP){
        console.log('Password empty');
        document.getElementById('password').style.border ='2px solid red';
        document.getElementById('not-valid-password').textContent = 'Password must contain Uppercase letter, Digit and from 4 to 50 characters long';
    } else{
        Pvalid = true;
        document.getElementById('not-valid-password').innerHTML = '';
        document.getElementById('password').style.border ='0px';
    }

    if (cpassword != password || (cpassword == '' || cpassword == null)){
        console.log('CPassword empty');
        document.getElementById('cpassword').style.border ='2px solid red';
        document.getElementById('not-valid-cpassword').textContent = 'Passwords do not match';
    } else{
        CPvalid = true;
        document.getElementById('not-valid-cpassword').innerHTML = '';
        document.getElementById('cpassword').style.border ='0px';
    }

    if(FNvalid && Uvalid && Evalid && Pvalid && CPvalid){
        var form = document.getElementById('form');
        var logo = document.getElementById('logo');
        var validfull = document.getElementById('fullyvalid');
        form.style.display = 'none';
        logo.style.display = 'none';
        validfull.style.display = 'flex';
    }
}

function validateL(){
    var Evalid = false;
    var Pvalid = false;

    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;

    if (email == '' || email == null){
        console.log('Email empty');
        document.getElementById('email').style.border ='2px solid red';
        document.getElementById('not-valid-email').textContent = 'Email field must not be empty';
    } else{
        Evalid = true;
        document.getElementById('not-valid-email').innerHTML = '';
        document.getElementById('email').style.border ='0px';
    }

    if (password == '' || password == null){
        console.log('Password empty');
        document.getElementById('password').style.border ='2px solid red';
        document.getElementById('not-valid-password').textContent = 'Password field must not be empty';
    } else{
        Pvalid = true;
        document.getElementById('not-valid-password').innerHTML = '';
        document.getElementById('password').style.border ='0px';
    }

    if(Evalid && Pvalid){
        var form = document.getElementById('form');
        var logo = document.getElementById('logo');
        var validfull = document.getElementById('fullyvalid');
        form.style.display = 'none';
        logo.style.display = 'none';
        validfull.style.display = 'flex';
    }
}