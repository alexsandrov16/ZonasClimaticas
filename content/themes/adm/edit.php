<?php
defined('MINT') || die;
include _THEMES . 'adm/partial/header.php' ?>

<body>

    <?php include _THEMES . 'adm/partial/aside.php' ?>

    <main>
        <?php include _THEMES . 'adm/partial/nav.php' ?>



        <div class="container">
            <div class="box">
                <div class="tabs">
                    <div class="tab-nav">
                        <div class="tab active" data-tab="editor">Editor</div>
                        <div class="tab" data-tab="options">Opciones</div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-item active" id="editor"></div>
                        <div class="tab-item" id="options">
                            <form action="<?= base('admin/page/update') ?>" method="post" class="grid-2">
                                <div>
                                    <h4>Publicacion</h4>
                                    <label for="">asd</label>
                                    <input type="text">
                                </div>

                                <div>
                                    <h4>Configuracion</h4>
                                    <label for="">asd</label>
                                    <input type="text">
                                </div>

                                <div>
                                    <h4>seguridad</h4>
                                    <label for="">asd</label>
                                    <input type="text">
                                </div>
                            </form>
                        </div>
                        <button>salvar</button>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <?php
    include _THEMES . 'adm/partial/modals/about.php';
    include _THEMES . 'adm/partial/modals/user.php';
    include _THEMES . 'adm/partial/modals/newPage.php';
    $page->js('script.js');
    $page->js('editor.js') ?>
    <script>
        const editor = new EditorJS({
            holder: 'editor',
            placeholder: 'Comencemos'
        });
    </script>
</body>

</html>