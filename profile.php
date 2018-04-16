<!doctype html>
<html lang="pt_BR">
<head>
  <?php
  require('servicos/login_required.php');
  require('menu.php');
  require('login_defs.php');
  require('header.html');
  ?>
  <title><?=$_SESSION['name_user']?> - Profile</title>
</head>
<body>
  <div class="page-title">
    <?=$_SESSION['name_user']?>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-8" style="padding-top: 15px;">
        <div class="col-md-12">
          <h1><?=$_SESSION['name_user']?></h1>
        </div>
        <div class="form-group row">
          <label for="email" class="font-weight-bold col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="email" value="<?=$_SESSION['email_user']?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="username" class="font-weight-bold col-sm-2 col-form-label">Username</label>
          <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="username" value="<?=$_SESSION['login_user']?>">
          </div>
        </div>
      </div>
      <div class="col-md-4" style="padding-top: 15px;">
        <div class="card border-0" style="width: 18rem;">
          <div class="card-header">
            User options
          </div>
          <div class="list-group">
            <a href="add_friend.php" class="list-group-item list-group-item-action border-0"><i class="fas fa-user-plus"></i> Add friends</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  require('footer.html');
  ?>

  <script>
  </script>
</body>
</html>