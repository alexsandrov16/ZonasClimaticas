<?php
defined('MAKE4U') || die;
include _APP . 'View/panel/partials/head.php';;
?>
<style>
  body {
    background-color: var(--bs-gray-100);
    max-width: 320px;
    margin: 0 auto;
    padding-top: 5em;
  }

  form {
    margin: 4em 0 2em;
  }
</style>

<body>
  <center>
    <h1>Make4U</h1>
    <form method="POST">

      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" name="user" placeholder="Usuario" autocomplete="off">
        <label for="floatingInput">Usuario</label>
      </div>

      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" name="pass" placeholder="Contraseña">
        <label for="floatingPassword">Contraseña</label>
      </div>

      <br>

      <button type="submit" class="btn btn-lg btn-primary w-100">Iniciar sesión</button>
    </form>
  </center>

  <?= $alert ?>

  <?= $theme->js('bootstrap.min.js', true) ?>
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
</body>

</html>