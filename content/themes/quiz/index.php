<?php

use Make4U\Core\File\Json;

defined('MAKE4U') || die;
include _THEMES . env('site.theme') . DS . 'partials/head.php';
?>

<style>
    #activity {
        display: none;
        gap: 16px;
        grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
    }
</style>

<body>
    <main>
        <center id="welcome">
            <img src="<?= base(), 'content/themes/', env('site.theme') ?>/img/default.png" width="250" class="fadeIn" style="padding-bottom:2em;">
            <div class="fadeUp">
                <h1><?= $title ?></h1>
                <h4 style="font-weight:300;">¡Veamos cuánta atención prestas en clases de geografía!</h4>
            </div><br>
            <button class="fadeUp" onclick="modalOp()" role="button">comenzar</button>
        </center>
        <div id="activity">

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
    </main>
    <dialog>
        <article>
            <h3>😄 ¡Hey! ¿Cómo te llamas?</h3>
            <p>Debes de escribir tu nombre para poder continuar</p>
            <input type="text" name="" id="" onkeyup="active(this)">
            <center><button id="input" role="button" onclick="modalCl()" disabled>continuar</button></center>
        </article>
    </dialog>
    <?= $theme->js('main.js') ?>
</body>

</html>