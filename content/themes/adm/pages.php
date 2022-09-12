<?php
defined('MINT') || die;
include _THEMES . 'adm/partial/header.php' ?>

<body>

    <?php include _THEMES . 'adm/partial/aside.php' ?>

    <main>
        <?php include _THEMES . 'adm/partial/nav.php' ?>

        <div class="container">

            <div class="title">
                <span>
                    <svg class="icons" viewBox="0 0 24 24">

                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M15 3v4a1 1 0 0 0 1 1h4"></path>
                        <path d="M18 17h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h4l5 5v7a2 2 0 0 1 -2 2z"></path>
                        <path d="M16 17v2a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h2"></path>

                    </svg>
                </span>
                <h3>Contenidos</h3>


            </div>

            <div class="box">

                <div style="display: flex;
                justify-content: end;
                margin-bottom: 2em;">
                    <a class="open-modal btn-sm" data-modal="newPage" role="button">Añadir página</a>
                </div>

                <table role="grid">
                    <thead>
                        <tr>
                            <th scope="col">Título</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                            <td class="actions">
                                <svg class="icons" viewBox="0 0 24 24">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                                    <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                    </path>
                                    <path d="M16 5l3 3"></path>
                                </svg>
                                <svg class="icons" viewBox="0 0 24 24">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <line x1="4" y1="7" x2="20" y2="7"></line>
                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                </svg>
                            </td>
                        </tr>
                        <tr>
                            <td>Deleniti sunt alias voluptatibus nobis soluta aperiam necessitatibus.</td>
                            <td class="actions">
                                <svg class="icons" viewBox="0 0 24 24">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                                    <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                    </path>
                                    <path d="M16 5l3 3"></path>
                                </svg>
                                <svg class="icons" viewBox="0 0 24 24">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <line x1="4" y1="7" x2="20" y2="7"></line>
                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                </svg>
                            </td>
                        </tr>
                        <tr>
                            <td>Magni suscipit nihil sunt corrupti consequuntur deleniti tenetur.</td>
                            <td class="actions">
                                <svg class="icons" viewBox="0 0 24 24">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                                    <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                    </path>
                                    <path d="M16 5l3 3"></path>
                                </svg>
                                <svg class="icons" viewBox="0 0 24 24">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <line x1="4" y1="7" x2="20" y2="7"></line>
                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                </svg>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>

    </main>



    <?php
    include _THEMES . 'adm/partial/modals/about.php';
    include _THEMES . 'adm/partial/modals/user.php';
    include _THEMES . 'adm/partial/modals/newPage.php';
    $page->js('script.js') ?>
</body>

</html>