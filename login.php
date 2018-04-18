<!doctype html>
<html lang="pt_BR">
<head>
  <?php
  session_start();
  ini_set('session.gc_maxlifetime', 1);
  if(isset($_SESSION['id_user'])){
    header('Location: index.php');
  }
  require('menu.php');
  require('login_defs.php');
  require('header.html');
  ?>
  <title>Register</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <form class="col-md-6" id="form-login"  style="padding-top: 20px;padding-bottom: 20px;" method="POST" action="servicos/logar.php" target="_blank">
        <div class="row">
          <span class="text-dark col-md-12" style="font-size: 30px;text-align: center;">Sign in</span>
          <div class="form-group col-md-12">
            <label for="username-login">Username</label>
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
              </div>
              <input type="text" class="form-control form-control-lg" id="username-login" name="username" placeholder="Username">
            </div>
          </div>

          <div class="form-group col-md-12">
            <label for="password-login">Password</label>
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
              </div>
              <input type="password" class="form-control form-control-lg" placeholder="Password" id="password-login" name="password">
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-lg btn-block btn-success">
              <i class="fas fa-sign-in-alt"></i>
              Login
            </button>
          </div>
        </div>
      </form>
      <form id="form-register" class="col-md-6 bg-dark text-white" style="padding-top: 20px;padding-bottom: 20px;" action="servicos/register_user.php">
        <div class="row">
          <span class="text-light col-md-12" style="font-size: 30px;text-align: center;">Sign up</span>
          <div class="form-group col-md-12">
            <label for="email">First name</label>
            <input id="first-name" name="first-name" type="text" class="form-control form-control-lg" required placeholder="First name">
          </div>
          <div class="form-group col-md-12">
            <label for="email">Last name</label>
            <input id="last-name" name="last-name" type="text" class="form-control form-control-lg" required placeholder="Last name">
          </div>
          <div class="form-group col-md-12">
            <label for="text">Username</label>
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
              </div>
              <input type="text" class="form-control form-control-lg" id="username" required name="username" placeholder="Username">
            </div>
          </div>
          <div class="form-group col-md-12">
            <label for="email">Email</label>
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
              </div>
              <input type="email" class="form-control form-control-lg" id="email" required name="email" placeholder="email@example.com">
            </div>
          </div>
          <div class="form-group col-md-12">
            <label for="name">Born</label>
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-calendar"></i></span>
              </div>
              <input type="date" placeholder="dd/MM/yyyy" class="form-control form-control-lg" required id="born" name="born">
            </div>
          </div> 
          <div class="form-group col-md-12">
            <label for="name">Password</label>
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
              </div>
              <input type="password" class="form-control form-control-lg" required placeholder="Password" id="password" name="password">
            </div>
          </div>
          <div class="col-md-12">
          <button type="submit" class="btn btn-lg btn-block btn-primary" style="margin: auto;">
            <i class="fas fa-check"></i>
            I'm ready!
          </button>
        </div>
        </div>
      </form>
    </div>
  </div>

  <?php
  require('footer.html');
  ?>

  <script>
    $("#form-register").submit(function() {
      event.preventDefault();
      submitForm("#form-register");
    });
    $("#form-login").submit(function() {
      event.preventDefault();
      submitForm("#form-login");
      location.reload();
    });
  </script>
</body>
</html>