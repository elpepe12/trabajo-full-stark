document.querySelector('#btningresar').addEventListener('click',
iniciarsesion);

function iniciarsesion(){
    var scorreo = '';
    var scontrasenna = '';
    var bAcceso = false;

    scorreo = document.querySelector('#txtcorreo').Value;
    scontrasenna = document.querySelector('#txtcontrasenna').Value;

    bAcceso = validarcredenciales(scorreo,scontrasenna);
    console.log(bAcceso);
}

