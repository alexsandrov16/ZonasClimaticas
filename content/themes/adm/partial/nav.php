<nav class="fixed">
    <svg class="icons" viewBox="0 0 24 24" onclick="toggleMenu()" style="cursor:pointer;">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
        <line x1="4" y1="6" x2="20" y2="6"></line>
        <line x1="4" y1="12" x2="20" y2="12"></line>
        <line x1="4" y1="18" x2="20" y2="18"></line>
    </svg>

    <ul>
        <li>
            <a href="" target="_blank" role="tooltip" aria-label="Ver sitio" dir="left">
                <svg class="icons" viewBox="0 0 24 24">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M11 7h-5a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-5"></path>
                    <line x1="10" y1="14" x2="20" y2="4"></line>
                    <polyline points="15 4 20 4 20 9"></polyline>
                </svg>
            </a>
        </li>
        <li>
            <div class="dropdown">
                <svg class="icons " viewBox="0 0 24 24">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <circle cx="12" cy="12" r="1"></circle>
                    <circle cx="12" cy="19" r="1"></circle>
                    <circle cx="12" cy="5" r="1"></circle>
                </svg>
                <ul>
                    <li>
                        <a class="open-modal" data-modal="user">
                            <svg class="icons" viewBox="0 0 24 24">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="12" cy="12" r="9"></circle>
                                <circle cx="12" cy="10" r="3"></circle>
                                <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855"></path>
                            </svg>
                            Perfil
                        </a>
                    </li>
                    <li>
                        <a class="open-modal" data-modal="about">
                            <svg class="icons" viewBox="0 0 24 24">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="12" cy="12" r="9"></circle>
                                <line x1="12" y1="8" x2="12.01" y2="8"></line>
                                <polyline points="11 12 12 12 12 16 13 16"></polyline>
                            </svg>
                            Acerca de
                        </a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</nav>