<?php

use Mint\App;

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
                        <circle cx="12" cy="13" r="2"></circle>
                        <line x1="13.45" y1="11.55" x2="15.5" y2="9.5"></line>
                        <path d="M6.4 20a9 9 0 1 1 11.2 0z"></path>
                    </svg>
                </span>
                <h3>Dashboard</h3>
            </div>

            <div class="box">


                <div class="welcome grid-2">
                    <div class="items">
                        <h4>👋 Hola <?= Mint\Cookies\Session::get('username') ?></h4>
                        <p>
                            Bienvenido al panel de administración de <b><?= App::_name ?></b>, donde puede acceder fácilmente a
                            configuraciones importantes para administrar y editar su sitio.
                        </p>
                        <br>
                        <div class="row auto">
                            <ul class="inf-link">
                                <li>
                                    <a href="<?= base('admin/settings') ?>">
                                        <svg class="icons" viewBox="0 0 24 24">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M12 21a9 9 0 1 1 0 -18a9 8 0 0 1 9 8a4.5 4 0 0 1 -4.5 4h-2.5a2 2 0 0 0 -1 3.75a1.3 1.3 0 0 1 -1 2.25">
                                            </path>
                                            <circle cx="7.5" cy="10.5" r=".5" fill="currentColor"></circle>
                                            <circle cx="12" cy="7.5" r=".5" fill="currentColor"></circle>
                                            <circle cx="16.5" cy="10.5" r=".5" fill="currentColor"></circle>
                                        </svg>
                                        Personalizar sitio
                                    </a>
                                </li>
                                <li>
                                    <a href="<?=base('admin/pages')?>">
                                        <svg class="icons" viewBox="0 0 24 24">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                                            <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                            </path>
                                            <path d="M16 5l3 3"></path>
                                        </svg>
                                        Añadir página
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base('admin/themes') ?>">
                                        <svg class="icons" viewBox="0 0 24 24">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M19 3h-4a2 2 0 0 0 -2 2v12a4 4 0 0 0 8 0v-12a2 2 0 0 0 -2 -2">
                                            </path>
                                            <path d="M13 7.35l-2 -2a2 2 0 0 0 -2.828 0l-2.828 2.828a2 2 0 0 0 0 2.828l9 9">
                                            </path>
                                            <path d="M7.3 13h-2.3a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h12"></path>
                                            <line x1="17" y1="17" x2="17" y2="17.01"></line>
                                        </svg>

                                        Añadir temas
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base() ?>">
                                        <svg class="icons" viewBox="0 0 24 24">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M21 12v3a1 1 0 0 1 -1 1h-16a1 1 0 0 1 -1 -1v-10a1 1 0 0 1 1 -1h9">
                                            </path>
                                            <line x1="7" y1="20" x2="17" y2="20"></line>
                                            <line x1="9" y1="16" x2="9" y2="20"></line>
                                            <line x1="15" y1="16" x2="15" y2="20"></line>
                                            <path d="M17 4h4v4"></path>
                                            <path d="M16 9l5 -5"></path>
                                        </svg>
                                        Mi sitio Web
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="items">
                        <h4>Guía rápida</h4>
                        <p>
                            Explora nuestra documentación, intercambia ideas con otros miembros de nuestra comunidad,
                            ayudanos a mejorar Trebol.
                        </p>

                        <br>
                        <ul class="inf-link">
                            <li><a href="">
                                    <svg class="icons" viewBox="0 0 24 24">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M19 4v16h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12z"></path>
                                        <path d="M19 16h-12a2 2 0 0 0 -2 2"></path>
                                        <path d="M9 8h6"></path>
                                    </svg>
                                    Documentación
                                </a></li>

                            <li><a href="">
                                    <svg class="icons" viewBox="0 0 24 24">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M15 10l-4 4l6 6l4 -16l-18 7l4 2l2 6l3 -4"></path>
                                    </svg>
                                    Discusión
                                </a></li>

                            <li><a href="">
                                    <svg class="icons" viewBox="0 0 24 24">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5">
                                        </path>
                                    </svg>
                                    Contribuir
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>


            <br><br>

            <div class="title">
                <span>
                    <svg class="icons" viewBox="0 0 24 24">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <circle cx="12" cy="12" r="9"></circle>
                        <polyline points="12 7 12 12 15 15"></polyline>
                    </svg>
                </span>
                <h3>Reciente</h3>
            </div>

            <div class="box">

                <?php
                $content = [];
                $it = new \DirectoryIterator(_PAGES);
                foreach ($it as $dir) {
                    if (!$dir->isDot() && $dir->isDir()) {

                        array_push($content, [
                            'V1'=> 'asd',
                            'V2'=> 'qwe'
                        ]);


                        /*$content = [][
                            'name' => $dir->getFilename(),
                            'time' => $dir->getMTime()
                        ]);*/
                    }
                }

                if (empty($content)) : ?>
                    <center>
                        <h5>No hay contenido para mostrar</h5>
                    </center>
                <?php else : ?>
                    <table role="grid">
                        <thead>
                            <tr>
                                <th scope="col">Página</th>
                                <th scope="col">Actualizada</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                foreach ($content as $key => $value) :
                                    var_dump($key);
                                endforeach; ?>
                            </tr>
                        </tbody>
                    </table>
                <?php endif; ?>

            </div>
        </div>

    </main>

    <?php
    include _THEMES . 'adm/partial/modals/about.php';
    include _THEMES . 'adm/partial/modals/user.php';
    $page->js('script.js') ?>
</body>

</html>