<?php

use Make4U\Make4U;

defined('MAKE4U') || die;
include _APP . 'View/panel/partials/head.php';
?>

<style>
  li.list-group-item {
    display: flex;
    justify-content: space-between;
  }

  li.list-group-item a {
    text-decoration: none;
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
          <li class="list-group-item">
            <a href="<?= base(env('site.dashboard')) . '/page.name' ?>">An item</a>
            <a href="<?= base(env('site.dashboard')) ?>/dlt/page.name" class="text-danger">
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
        </ul>

      </div>
    </div>
  </div>
</nav>

<div class="row">
  <div class="col-lg-8 border rounded-3">
    <br>
    <div id="editor"></div>
  </div>
  <div class="col-lg-4 p-4">
    <h4>Opciones</h4>
    <form action="<?= base(env('site.dashboard') . '/add') ?>" method="POST">
      <div class="form-floating mb-3">
        <input type="text" class="form-control" name="title" id="title" placeholder="" autocomplete="off">
        <label for="title">Titulo</label>
      </div>

      <div class="form-floating mb-3">
        <textarea class="form-control" name="description" placeholder="" id="floatingTextarea" autocomplete="off"></textarea>
        <label for="floatingTextarea">Comments</label>
      </div>

      <div class="mb-3">

        <img src="https://images.unsplash.com/photo-1662581872342-3f8e0145668f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwxfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60" class="rounded w-100 mb-2">
        <input class="form-control" name="img" type="file" id="formFile">
      </div>

      <center class="fixed-bottom mb-3">
        <button class="save btn btn-primary rounded-pill">Salvar</button>
      </center>

    </form>
  </div>
</div>

<?= $theme->js('bootstrap.min.js', true) ?>
<?= $theme->js('bootstrap.bundle.min.js', true) ?>


<?= $theme->js('editor.js', true) ?>
<?= $theme->js('checklist@latest.js', true) ?>
<script>
  let data = null;
  const editor = new EditorJS({
    /**
     * Id del Elemento que debe contener la instancia del Editor
     */
    holder: 'editor',
    placeholder: 'Comencemos..',
    tools: {
      checklist: {
        class: Checklist,
        inlineToolbar: true,
      }
    },
    data: data,
  });



  let form = document.querySelector('form');
  let url = "<?= base(env('site.dashboard')) ?>/add";





  document.querySelector('.save').addEventListener('click', (e) => {


    let input = document.querySelector('input');
    let textarea = document.querySelector('textarea');

    /*try {
      if (input.value == '') {
      input.classList.add('is-invalid');
    } else {
      input.classList.remove('is-invalid');
      input.classList.add('is-valid');
    }

    if (textarea.value == '') {
      textarea.classList.add('is-invalid');
    } else {
      textarea.classList.remove('is-invalid');
      textarea.classList.add('is-valid');
    }
    } catch (error) {
      
    }*/

    editor.save().then((outputData) => {

      let formData = new FormData(form);

      formData.append('page', JSON.stringify(outputData));

      fetch(url, {
          method: 'POST',
          body: formData,
        })
        .then(function(response) {
          return response.text();
        })
        .then(function(data) {
          console.log(data)
        })
        .catch(function(errorFetch) {
          Message('danger', "Error Fetch: ", errorFetch);
          LoadBtn('button#sendDoc', 'publicar', false);
          console.error(errorFetch);
        });

    }).catch((errorEditor) => {
      console.log('Saving failed: ', errorEditor)
    });


e.preventDefault();

/*
    var formData = new FormData(document.querySelector('form'));

    formData.append("username", "Groucho");
    formData.append("accountnum", 123456); // number 123456 is immediately converted to string "123456"


    fetch(url, {
        method: 'POST',
        body: formData,
      })
      .then(function(response) {
        return response.text();
        //console.log(response);
      })
      .then(function(data) {
        //LoadBtn('button#sendDoc', 'publicar', false);
        //Message('success', data);
        console.log(data);
      })
      .catch(function(errorFetch) {
        Message('danger', "Error Fetch: ", errorFetch);
        LoadBtn('button#sendDoc', 'publicar', false);
        console.error(errorFetch);
      });

    e.preventDefault();



    /*editor.save().then((outputData) => {
      console.log('Article data: ', outputData)
    }).catch((error) => {
      console.log('Saving failed: ', error)
    });*/

  })
</script>