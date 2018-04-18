<!doctype html>
<html lang="pt_BR">
<head>
  <?php
  require('servicos/connection.php');
  require('servicos/login_required.php');
  require('menu.php');
  require('login_defs.php');
  require('header.html');
  require('servicos/profile_services.php');
  ?>
  <title><?=$_SESSION['name_user']?> - Profile</title>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        <div class="row bg-info text-light ">
          <div class="col-md-12" style="padding-top: 20px;"><img src="images/profile.jpg" class="rounded mx-auto d-block" style="width: 50%;"></div>
          <span class="col-md-12" style="text-align: center;"><h3><?=$_SESSION['name_user']?></h3></span>
        </div>
        <div class="list-group row">
          <a href="add_friend.php" class="list-group-item list-group-item-action border-0 border-radius-none bg-light"><i class="fas fa-user-plus"></i> Add friends <?=$requests_number?></a>
          <a href="add_friend.php" class="list-group-item list-group-item-action border-0 border-radius-none bg-light"><i class="fas fa-users"></i> My friends <?=$friends_number?></a>
          <a href="add_friend.php" class="list-group-item list-group-item-action border-0 border-radius-none bg-light"><i class="fas fa-gamepad"></i> My games <?=$requests_number?></a>
        </div>
      </div>
      <div class="col-md-9" style="padding-top: 15px;">

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