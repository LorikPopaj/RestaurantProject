function validate(){
    var emriinput = false;
    var numriinput = false;

    var emri = document.getElementById('name').value;
    var numri = document.getElementById('phone').value;

    if (emri == '' || emri == null){
        alert('Emri nuk mund te jete i zbrazet!');
    } else{
        emriinput = true;
    }

    if (numri == '' || numri == null){
        alert('Numri i telefonit nuk mund te jete i zbrazet!');
    } else{
        numriinput = true;
    }

    if(emriinput == true && numriinput == true){
        alert('Rezervimi eshte kryer me sukses');
    }
}
