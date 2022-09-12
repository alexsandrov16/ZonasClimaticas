<aside>
    <header>
        <img src="<?=base('content/media/logo.png')?>" width="40">

        <span>Hello</span>
    </header>

    <main>
        <a href="<?=base('admin')?>">
            <svg class="icons" viewBox="0 0 24 24">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <circle cx="12" cy="13" r="2"></circle>
                <line x1="13.45" y1="11.55" x2="15.5" y2="9.5"></line>
                <path d="M6.4 20a9 9 0 1 1 11.2 0z"></path>
            </svg>
            <span>Dashboard</span>
        </a>
        <a href="<?=base('admin/pages')?>">
            <svg class="icons" viewBox="0 0 24 24">

                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M15 3v4a1 1 0 0 0 1 1h4"></path>
                <path d="M18 17h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h4l5 5v7a2 2 0 0 1 -2 2z"></path>
                <path d="M16 17v2a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h2"></path>

            </svg>
            </svg>
            <span>Contenido</span>
        </a>
        <a href="<?=base('admin/settings')?>">
            <svg class="icons" viewBox="0 0 24 24">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <circle cx="14" cy="6" r="2"></circle>
                <line x1="4" y1="6" x2="12" y2="6"></line>
                <line x1="16" y1="6" x2="20" y2="6"></line>
                <circle cx="8" cy="12" r="2"></circle>
                <line x1="4" y1="12" x2="6" y2="12"></line>
                <line x1="10" y1="12" x2="20" y2="12"></line>
                <circle cx="17" cy="18" r="2"></circle>
                <line x1="4" y1="18" x2="15" y2="18"></line>
                <line x1="19" y1="18" x2="20" y2="18"></line>
            </svg>
            <span>Ajustes</span>
        </a>
    </main>

    <footer>
        <a href="<?=base('admin/off')?>">
            <svg class="icons" viewBox="0 0 24 24">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"></path>
                <path d="M7 12h14l-3 -3m0 6l3 -3"></path>
            </svg>
            <span>Salir</span>
        </a>
        <!--<a onclick="toggleDarkMode()" style="cursor:pointer;">

                <svg class="icons" viewBox="0 0 24 24" style="margin-left:-5px">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <circle cx="12" cy="12" r="9"></circle>
                    <line x1="12" y1="3" x2="12" y2="21"></line>
                    <line x1="12" y1="9" x2="16.65" y2="4.35"></line>
                    <line x1="12" y1="14.3" x2="19.37" y2="6.93"></line>
                    <line x1="12" y1="19.6" x2="20.85" y2="10.75"></line>
                </svg>

                <!-<svg class="icons" viewBox="0 0 24 24">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z">
                    </path>
                </svg>->
                <span>Cambiar Tema</span>
                <!-<label style="margin-left: 1.5em;">
                    <input type="checkbox" id="mode" role="switch">
                </label>-->
        </a>
    </footer>
</aside>