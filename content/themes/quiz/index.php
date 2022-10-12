<?php

use Make4U\Core\File\Json;

defined('MAKE4U') || die;
include _THEMES . env('site.theme') . DS . 'partials/head.php';
?>

<style>
    #activity {
        display: none;
    }

    #activity center {
        margin: 3em 0;
    }

    #activity .grid {
        display: grid;
        gap: 16px;
        grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
        position: relative;
    }

    .change-user {
        position: absolute;
        top: .5em;
        right: 1em;
    }

    .change-user:hover ::before {
        content: "Cambiar de usuario";
    }

    .change-user>svg {
        cursor: pointer;
    }
</style>

<body>
    <main>
        <center id="welcome">
            <img src="<?= base(), 'content/themes/', env('site.theme') ?>/img/default.png" width="250" class="fadeIn" style="padding-bottom:2em;">
            <div class="fadeUp">
                <h1><?= $title ?></h1>
                <h4 style="font-weight:350;">¡Veamos cuánta atención prestas en clases de geografía!</h4>
            </div><br>
            <button class="fadeUp" onclick="modalOp('register')" role="button">comenzar</button>
        </center>
        <div id="activity">
            <div class="change-user"  onclick="modalOp('logout')">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-circle" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <circle cx="12" cy="12" r="9"></circle>
                    <circle cx="12" cy="10" r="3"></circle>
                    <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855"></path>
                </svg>
            </div>
            <center>
                <h2 id="hi"></h2>
                <h4 style="font-weight:350;">Elige una temática para comenzar con las preguntas…</h4>
            </center>
            <div class="grid">

                <?php
                $dir = new DirectoryIterator(_PAGES);
                foreach ($dir as $fileinfo) {
                    if (!$fileinfo->isDot() && $fileinfo->isDir()) { ?>

                        <a href="<?= Json::get($fileinfo->getPathname() . DS . 'index')['slug'] ?>">
                            <article>
                                <img src="<?= Json::get($fileinfo->getPathname() . DS . 'index')['image'] ?>" alt="">
                                <h4><?= Json::get($fileinfo->getPathname() . DS . 'index')['title'] ?></h4>
                            </article>
                        </a>
                <?php }
                } ?>

            </div>
        </div>
    </main>
    <dialog id="register">
        <article>
            <h3>😄 ¡Hey! ¿Cómo te llamas?</h3>
            <p>Debes de escribir tu nombre para poder continuar.</p>
            <input type="text" name="" onkeyup="active(this)" placeholder="Ej. Pedro Pérez">
            <center><button id="one" role="button" onclick="modalCl()" disabled>continuar</button></center>
        </article>
    </dialog>

    <dialog id="logout">
        <article>
            <h3></h3>
            <p>Por favor, dinos cómo te llamas.</p>
            <input type="text" name="" onkeyup="active(this)" placeholder="Ej. Pedro Pérez">
            <center><a href="" id="two" role="button" disabled>continuar</a></center>
        </article>
    </dialog>
    <?= $theme->js('main.js') ?>
</body>

</html>