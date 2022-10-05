/**
 * Main.js
 */

function modalOp() {
    document.querySelector('dialog').setAttribute('open', '');
}
function modalCl() {
    document.querySelector('dialog').removeAttribute('open');
    document.querySelector('#activity').style = 'display:block';
    document.querySelector('#welcome').style = 'display:none';
    document.querySelector('#hi').innerHTML = '👋 ¡Hola '+sessionStorage.getItem('name')+'!';
}

function active(e) {
    if (e.value != '' && e.value.length >= 4) {
        document.querySelector('#input').removeAttribute('disabled');
        sessionStorage.setItem('name', e.value);
    } else {
        document.querySelector('#input').setAttribute('disabled','true');
    }
}

function next() {
    console.log('siguiente');
}