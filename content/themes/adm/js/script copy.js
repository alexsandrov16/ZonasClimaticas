/**
 * Scripting
 */
const body = document.body,
    sidebar = document.querySelector('aside'),
    main = document.querySelector('main'),
    nav = document.querySelector('nav'),
    sidebar_mode = localStorage.getItem('sidebar'),
    theme = localStorage.getItem('theme');
let scroll_pos = 0;

!(() => {
    console.log('Ready');

    //Menu
    if (window.matchMedia("(min-width: 992px)").matches) {
        if (sidebar_mode && sidebar_mode === 'active') {
            sidebar.classList.add('open');
            body.style.overflow = 'hidden';
        }
    }

    //Dark Mode
    if (theme && theme === 'dark') {
        body.classList.toggle('dark');
    }
})();

/**
 * Toggle Menu
 */
const toggleMenu = () => {
    sidebar.classList.toggle('open');
    if (sidebar.classList.contains('open')) {
        localStorage.setItem('sidebar', 'active');
        body.style.overflow = 'hidden';
    } else {
        localStorage.removeItem('sidebar');
        body.style = '';
    }
};

/**
 * Toggle Dark Mode
 */
const toggleDarkMode = () => {
    body.classList.toggle('dark');
    if (body.classList.contains('dark')) {
        localStorage.setItem('theme', 'dark');
    } else {
        localStorage.setItem('theme', 'light');
    }
};

/**
 * Scroll Navbar
 */
window.onscroll = () => {
    if (window.scrollY < scroll_pos) {
        nav.classList.add('top');
        nav.classList.remove('bottom');
    } else {
        nav.classList.add('bottom');
        nav.classList.remove('top');
    }
    if (window.scrollY === 0 ) {
        nav.classList.remove('top');
        nav.classList.remove('bottom');
        console.log('top');
    } 
    scroll_pos = window.scrollY;
}

/**
 * Dropdown
 */
const toggleDropdown = () => {
    
}