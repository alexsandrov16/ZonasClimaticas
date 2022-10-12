/**
 * Main.js
 */

(function () {
    document.addEventListener('DOMContentLoaded', () => {
        if (sessionStorage.getItem('name') !== null) {
            next();
        }
    })
})();

function modalOp(modal) {
    document.querySelector('dialog#'+modal).setAttribute('open', '');
    document.querySelector('body').style.overflow = 'hidden'
}
function modalCl() {
    document.querySelector('dialog').removeAttribute('open');
    document.querySelector('body').style = '';

    next();
}

function active(e) {
    let el = e.nextElementSibling;
    if (e.value != '' && e.value.length >= 4) {
        el.firstElementChild.removeAttribute('disabled');
        sessionStorage.setItem('name', e.value);
    } else {
        el.firstElementChild.setAttribute('disabled', 'true');
    }
}

function next() {
    document.querySelector('#activity').style = 'display:block';
    document.querySelector('#welcome').style = 'display:none';
    document.querySelector('#hi').innerHTML = '👋 ¡Hola ' + sessionStorage.getItem('name') + '!';
    document.querySelector('#logout h3').innerHTML = '🤔 ¿No eres ' + sessionStorage.getItem('name') + '?';
}