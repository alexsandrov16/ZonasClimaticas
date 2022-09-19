<?php

use Make4U\Make4U;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change this</title>

    <?= $theme->css('bootstrap.min.css',true),$theme->favicon()?>
  
</head>


<body class="row align-items-center" style="height:100vh">

<div class="text-center">
  <div class="row">
    <div class="col-lg-4 col-md-3"></div>
    <div class="col-lg-4 col-md-6">

    <form action="" class="container">

    
    <h1 class=" mb-3 fw-normal"><?=Make4U::_name?></h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <br>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <br>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">© <?=date('Y')," ",Make4U::_name?></p>

    </form>

    

    </div>
  </div>
</div>

</body>

</html>