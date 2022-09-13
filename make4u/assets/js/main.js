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
    })
})();


const M4U = {
    toggleSidebar: function () {
        if (window.matchMedia("(min-width: 992px)").matches) {
            sidebar.classList.toggle('sm');
            if (localStorage.getItem('sidebar')===null) {
                localStorage.setItem('sidebar',true);
            } else {
                localStorage.removeItem('sidebar');
            }
        } else if (window.matchMedia("(max-width: 992px)").matches && window.matchMedia("(min-width: 768px)").matches) {
            sidebar.classList.toggle('lg');
        } else {
            sidebar.classList.toggle('toggle');
        }
    }
}