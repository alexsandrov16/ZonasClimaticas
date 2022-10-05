/**
 * Main.js
 */

function modalOp() {
    document.querySelector('dialog').setAttribute('open', '');
}
function modalCl() {
    document.querySelector('dialog').removeAttribute('open');
    document.querySelector('#activity').style = 'display:grid';
    document.querySelector('#welcome').style = 'display:none';
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