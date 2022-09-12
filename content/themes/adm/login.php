<?php
defined('MINT') || die;
include _THEMES . 'adm/partial/header.php' ?>

<style>
    body {
        display: flex;
        justify-content: center;
        padding-top: 10em;
    }

    .wrapper {
        width: 100%;
        padding: 0 1em;
    }

    .logo {
        margin-bottom: 2em;
        display: flex;
        justify-content: center;
        align-items: center;
    }
/*
    .logo span {
        font-size: 2em;
        margin-left: .25em;
    }*/

    a{
        margin-top: 2em;
        display: flex;justify-content: center;
        align-items: center;
    }

    a svg{
        margin-right: .25em;
        height: 1.125em !important;
        width: 1.125em !important;
        stroke: var(--primary) !important;

    }

    a:hover svg{
        stroke: var(--primary-hover) !important;
    }

    @media (min-width: 576px) {
        .wrapper {
            width: 25em;
        }
    }
</style>

<body>

    <div class="wrapper">
        <div class="box">
            <div class="logo">
                <!--<svg width="40" height="40" viewBox="0 0 24 24">
                    <path
                        d="M17.5 12C17.5 13.576 16.8371 14.9972 15.7749 16C14.7899 16.9299 13.4615 17.5 12 17.5C10.5385 17.5 9.21007 16.9299 8.22506 16C7.16289 14.9972 6.5 13.576 6.5 12H17.5Z"
                        fill="#787eff" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M1 7C1 3.68629 3.68629 1 7 1H17C20.3137 1 23 3.68629 23 7V17C23 20.3137 20.3137 23 17 23H1V7ZM3.75 12C3.75 7.44365 7.44365 3.75 12 3.75C16.5563 3.75 20.25 7.44365 20.25 12C20.25 16.5563 16.5563 20.25 12 20.25C7.44365 20.25 3.75 16.5563 3.75 12Z"
                        fill="#787eff" />
                </svg>
                <span>Hello</span>-->
                <img src="<?=base('content/media/logo.png')?>" style="width:30%">
            </div>
            <form action="" method="post">


                <input type="text" name="user" id="usr" placeholder="Usuario" autocomplete="off">


                <div class="input-field">
                    <input type="password" name="pass" id="psw" placeholder="Contraseña">

                    <svg class="icons" viewBox="0 0 24 24" onclick="togglePass(this)">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <line x1="3" y1="3" x2="21" y2="21"></line>
                        <path d="M10.584 10.587a2 2 0 0 0 2.828 2.83"></path>
                        <path
                            d="M9.363 5.365a9.466 9.466 0 0 1 2.637 -.365c4 0 7.333 2.333 10 7c-.778 1.361 -1.612 2.524 -2.503 3.488m-2.14 1.861c-1.631 1.1 -3.415 1.651 -5.357 1.651c-4 0 -7.333 -2.333 -10 -7c1.369 -2.395 2.913 -4.175 4.632 -5.341">
                        </path>
                    </svg>
                </div>

                <input type="submit" value="acceder" class="btn-lg btn-sm">
            </form>

            <a href="<?=base()?>">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-left"
                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <line x1="5" y1="12" x2="9" y2="16"></line>
                    <line x1="5" y1="12" x2="9" y2="8"></line>
                </svg>
                Volver al sitio
            </a>
        </div>
    </div>

    <?=$page->js('script.js')?>
</body>

</html>