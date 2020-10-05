// Variables 

var campo = document.getElementById('campo');
var temp2 = document.getElementById('temp2');

var radioTos = document.getElementById('radioTos');
var radioTosNo = document.getElementById('radioTosNo');


var radioDolorGarganta = document.getElementById('radioDolorGarganta');
var radioDolorGargantaNo = document.getElementById('radioDolorGargantaNo');


var dolorGarganta = document.getElementById('dolorGarganta');
var respiratoria = document.getElementById('respiratoria');

// Range events

campo.oninput = function() {
    temp2.value = campo.value;
}
temp2.oninput = function() {
    campo.value = temp2.value;
}

//  Drop down events -- (open)

radioTos.onclick = function() {
    dolorGarganta.style = 'display: block';
}

radioDolorGarganta.onclick = function() {
    respiratoria.style = 'display: block';
}

//-- (closed)

radioTosNo.onclick = function() {
    dolorGarganta.style = 'display: none';
}

radioDolorGargantaNo.onclick = function() {
    respiratoria.style = 'display: none';
}