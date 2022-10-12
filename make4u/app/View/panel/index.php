<?php

use Make4U\Core\File\Json;
use Make4U\Core\Http\Request;

defined('MAKE4U') || die;
include _APP . 'View/panel/partials/head.php';

if ((new Request)->getUri() == base(env('site.dashboard'))) {
  $form_action = base(env('site.dashboard') . '/add');
} else {
  $form_action = base(env('site.dashboard') . '/edit');
}
?>

<style>
  /*body{overflow-x: hidden;}*/
  li.list-group-item {
    display: flex;
    justify-content: space-between;
  }

  li.list-group-item a {
    text-decoration: none;
  }

  textarea {
    width: 100%;
    height: 90%;
    border: none;
  }
</style>


<nav class="navbar bg-light mb-4 border-bottom">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Make4U</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!--Sidebar-->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" data-bs-backdrop="static">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Make4U</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <div class="row p-4">
          <div class="col-6">
            <a href="<?= base(env('site.dashboard')) ?>" class="btn btn-primary w-100">Crear</a>
          </div>
          <div class="col-6">
            <a href="<?= base(env('site.dashboard')) ?>/logout" class="btn btn-secondary w-100">Salir</a>
          </div>
        </div>

        <ul class="list-group list-group-flush">

          <?php
          $dir = new DirectoryIterator(_PAGES);
          foreach ($dir as $fileinfo) {
            if (!$fileinfo->isDot() && $fileinfo->isDir()) { ?>

              <li class="list-group-item">
                <a href="<?= base(env('site.dashboard')), '/', $fileinfo->getFilename() ?>">
                  <?= Json::get($fileinfo->getPathname() . DS . 'index')['title'] ?>
                </a>
                <a href="<?= base(env('site.dashboard')), '/delete/', $fileinfo->getFilename() ?>" class="text-danger">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <line x1="4" y1="7" x2="20" y2="7"></line>
                    <line x1="10" y1="11" x2="10" y2="17"></line>
                    <line x1="14" y1="11" x2="14" y2="17"></line>
                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                  </svg>
                </a>
              </li>

          <?php }
          } ?>


        </ul>

      </div>
    </div>
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col-lg-8 col-sm-12 border rounded-3" style="height:500px">
      <br>
      <!--<div id="editor"></div>-->
      <textarea name="page" form="form">
        <?= $content ?>
      </textarea>
    </div>
    <div class="col-lg-4  col-sm-12">
      <h4>Opciones</h4>
      <form id="form" action="<?= $form_action ?>" method="POST" enctype="multipart/form-data">
        <div class="form-floating mb-3">
          <input type="text" class="form-control" name="name" id="title" placeholder="Titulo" autocomplete="off" value="<?= $page->title() ?>">
          <input type="hidden" name="folder" id="folder" value="<?= $page->slug() ?>">
          <label for="title">Titulo</label>
        </div>

        <div class="form-floating mb-3">
          <textarea class="form-control" name="description" placeholder="alg" id="floatingTextarea" autocomplete="off" value="<?= $page->description() ?>"></textarea>
          <label for="floatingTextarea">Comments</label>
        </div>

        <div class="mb-3">

          <img src="<?= $page->image() ?>" alt="Portada" class="rounded w-100 mb-2">
          <input class="form-control" name="img" type="file" id="inputFile">
        </div>

        <center class="fixed-bottom mb-3">
          <button class="save btn btn-lg btn-primary rounded-pill" type="submit">Salvar</button>
        </center>

      </form>
    </div>
  </div>
</div>

<?= $alert ?>

<?= $theme->js('bootstrap.min.js', true) ?>
<?= $theme->js('bootstrap.bundle.min.js', true) ?>

<script>
  document.addEventListener('DOMContentLoaded', () => {

    if (document.querySelector('.toast')) {
      setTimeout(() => {
        const toast = new bootstrap.Toast(document.querySelector('.toast'))
        toast.show();
      }, 1000)
    }
  });
</script>

<script>
  let img = document.querySelector('img');
  let inp_file = document.querySelector('#inputFile');

  inp_file.addEventListener('change', function() {
    console.log(this.files);

    for (let i = 0; i < this.files.length; i++) {
      img.src = URL.createObjectURL(this.files[i]);

    }
  }, false);
</script>