const sidebar = document.querySelector('aside[role="navigation"]'),
    toggle_sidebar = document.querySelector('.toggle-sidebar');

!(function () {
    document.addEventListener('click', (e) => {
        if (e.target !== toggle_sidebar && sidebar.classList.contains('toggle')) {
            sidebar.className = '';
        }
    })
})();


const M4U = {
    toggleSidebar: function () {
        if (window.matchMedia("(min-width: 992px)").matches) {
            sidebar.classList.toggle('sm');
        } else if (window.matchMedia("(max-width: 992px)").matches && window.matchMedia("(min-width: 768px)").matches) {
            sidebar.classList.toggle('lg');
        } else {
            sidebar.classList.toggle('toggle');
        }
    }
}