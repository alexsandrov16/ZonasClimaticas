const sidebar = document.querySelector('aside[role="navigation"]'),
    toggle_sidebar = document.querySelector('.toggle-sidebar');

!(function () {

    document.addEventListener('DOMContentLoaded', () => {
        if (localStorage.getItem('sidebar')) {
            sidebar.classList.toggle('sm');
        }
    });

    document.addEventListener('click', (e) => {
        if (e.target !== toggle_sidebar && (sidebar.classList.contains('toggle') || sidebar.classList.contains('lg'))) {
            sidebar.className = '';
        }

        if (e.target.classList.contains('open') || e.target.classList.contains('close-modal')) {
            M4U.modalClose();
        }
    })
})();


const M4U = {
    toggleSidebar: function () {
        if (window.matchMedia("(min-width: 992px)").matches) {
            sidebar.classList.toggle('sm');
            if (localStorage.getItem('sidebar') === null) {
                localStorage.setItem('sidebar', true);
            } else {
                localStorage.removeItem('sidebar');
            }
        } else if (window.matchMedia("(max-width: 992px)").matches && window.matchMedia("(min-width: 768px)").matches) {
            sidebar.classList.toggle('lg');
        } else {
            sidebar.classList.toggle('toggle');
        }
    },

    modalOpen: function (el) {
        document.querySelector('dialog#' + el.dataset.modal).classList.toggle('open');
        if (el.dataset.key !== null) {
            this.modal_key = el.dataset.key;
        }
    },

    modalClose: function () {
        let el = document.querySelector('dialog.open');
        el.classList.toggle('open');
    },

    sendModal: function () {
        if (callback !== null) {
            if (key !== null) {
                callback(this.modal_key);
                delete this.modal_key;
            }
        }
    },
}