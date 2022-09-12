/**
 * Scripting
 */
const body = document.body,
    sidebar = document.querySelector('body>aside'),
    main = document.querySelector('body>main'),
    nav = document.querySelector('nav'),
    sidebar_mode = localStorage.getItem('sidebar');
let scroll_pos = 0;

(function () {
    console.log('Ready');

    //Menu
    if (sidebar != null && window.matchMedia("(min-width: 992px)").matches) {
        if (sidebar_mode && sidebar_mode === 'active') {
            sidebar.classList.add('open');
            body.style.overflow = 'hidden';
        }
    }


    body.onclick = (e) => {
        //Close Modal
        if (e.target.classList.value == 'modal active') {
            document.querySelector('.modal.active').classList.remove('active');
            body.removeAttribute('style');
            sidebar.removeAttribute('style');
            main.removeAttribute('style');
        }

        //Hidden Change Pass
        if (document.getElementById('user') != null && !document.getElementById('user').classList.contains('active')) {

            console.log('working');

            document.getElementById('showPass').checked = false;

            let i = document.querySelector('.change-pass input');

            document.querySelector('.change-pass').classList.remove('v');

            i.setAttribute('type', 'password');
            i.removeAttribute('value');
            i.removeAttribute('name');
            i.removeAttribute('required');
            i.nextElementSibling.innerHTML = '<path stroke="none" d="M0 0h24v24H0z" fill="none"></path><line x1="3" y1="3" x2="21" y2="21"></line><path d="M10.584 10.587a2 2 0 0 0 2.828 2.83"></path><path d="M9.363 5.365a9.466 9.466 0 0 1 2.637 -.365c4 0 7.333 2.333 10 7c-.778 1.361 -1.612 2.524 -2.503 3.488m-2.14 1.861c-1.631 1.1 -3.415 1.651 -5.357 1.651c-4 0 -7.333 -2.333 -10 -7c1.369 -2.395 2.913 -4.175 4.632 -5.341"></path>';

        }
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
        body.attributes.remove('style');
    }
};

/**
 * Toggle Pass
 */
const togglePass = (e) => {
    let input = e.previousElementSibling;

    if (input.getAttribute("type") == 'password') {
        input.setAttribute('type', 'text');
        e.innerHTML = '<path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="12" r="2"></circle><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7"></path>';
    } else {
        input.setAttribute('type', 'password');
        e.innerHTML = '<path stroke="none" d="M0 0h24v24H0z" fill="none"></path><line x1="3" y1="3" x2="21" y2="21"></line><path d="M10.584 10.587a2 2 0 0 0 2.828 2.83"></path><path d="M9.363 5.365a9.466 9.466 0 0 1 2.637 -.365c4 0 7.333 2.333 10 7c-.778 1.361 -1.612 2.524 -2.503 3.488m-2.14 1.861c-1.631 1.1 -3.415 1.651 -5.357 1.651c-4 0 -7.333 -2.333 -10 -7c1.369 -2.395 2.913 -4.175 4.632 -5.341"></path>';
    }
};

/**
 * Toggle Change Pass
 */
const toggleChangePass = (el) => {
    let showI = document.querySelector('.change-pass input');
    document.querySelector('.change-pass').classList.toggle('v');
    if (el.checked) {
        showI.setAttribute('name', 'pass');
        showI.setAttribute('required', true);
    } else {
        showI.removeAttribute('name');
        showI.removeAttribute('required');
    }
}


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
    if (window.scrollY === 0) {
        nav.classList.remove('top');
        nav.classList.remove('bottom');
    }
    scroll_pos = window.scrollY;
}

/**
 * Modal
 */
//open
document.querySelectorAll('.open-modal').forEach(op_mdl => {
    op_mdl.addEventListener('click', () => {
        document.getElementById(op_mdl.dataset.modal).classList.add('active');
        body.style.overflow = 'hidden';
        sidebar.style = 'filter:blur(3px)';
        main.style = 'filter :blur(3px)';
    });
});

//close
document.querySelectorAll('.close-modal').forEach(cl_mdl => {
    cl_mdl.addEventListener('click', () => {
        document.querySelector('.modal.active').classList.remove('active');
        body.removeAttribute('style');
        sidebar.removeAttribute('style');
        main.removeAttribute('style');
    });
});

/**
 * Tabs
 */
document.querySelectorAll('.tab').forEach(tab => {
    tab.addEventListener('click', () => {
        let content = document.getElementById(tab.dataset.tab);
        document.querySelectorAll('.tab').forEach(tab => {
            tab.classList.remove('active');
            document.getElementById(tab.dataset.tab).classList.remove('active');
        });
        tab.classList.add('active');
        content.classList.add('active');
    })
});

/**
 * Go Back
 */
const goBack = () => {
    history.back();
}