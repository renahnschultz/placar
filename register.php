<!doctype html>
<html lang="pt_BR">
<head>
  <?php
  session_start();
  ini_set('session.gc_maxlifetime', 1);
  setcookie('ultimo_login', "aaa");
  require('menu.html');
  require('login.php');
  ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="js/jquery-ui/jquery-ui.css" type="text/css">
  <script src="js/script.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-ui/jquery-ui.js"></script>
  <script defer src="js/fontawesome-all.js"></script>


  <title>Register</title>


</head>
<body>
  <div class="page-title">
    <span>Register now</span>
  </div>
  <form id="form-register" class="container" action="register_user.php">
    <div class="row">
      <div class="form-group col-md-6">
        <label for="text">Username</label>
        <div class="input-group mb-2">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
          </div>
          <input type="text" class="form-control form-control-lg" id="username" required name="username" placeholder="Username">
        </div>
      </div>
      <div class="form-group col-md-6">
        <label for="email">Email</label>
        <div class="input-group mb-2">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">@</span>
          </div>
          <input type="email" class="form-control form-control-lg" id="email" required name="email" placeholder="email@example.com">
        </div>
      </div>
      <div class="form-group col-md-6">
        <label for="email">First name</label>
        <input type="text" class="form-control form-control-lg" required placeholder="First name">
      </div>
      <div class="form-group col-md-6">
        <label for="email">Last name</label>
        <input type="text" class="form-control form-control-lg" required placeholder="Last name">
      </div>
      <div class="form-group col-md-6">
        <label for="name">Born</label>
        <div class="input-group mb-2">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-calendar"></i></span>
          </div>
          <input type="date" class="form-control form-control-lg" required id="born" name="born">
        </div>
      </div> 
      <div class="form-group col-md-6">
        <label for="name">Password</label>
        <div class="input-group mb-2">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
          </div>
          <input type="password" class="form-control form-control-lg" required placeholder="Password" id="password" name="password">
        </div>
      </div>
      <button type="submit" class="btn btn-lg btn-success" style="margin: auto;">
        <i class="fas fa-check"></i>
        I'm ready!
      </button>
    </div>
  </form>
  <script>
    $("#form-register").submit(function() {
      event.preventDefault();
      submitForm("#form-register");
    });
  </script>
</body>
</html>