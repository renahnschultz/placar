<!doctype html>
<html lang="pt_BR">
<head>
  <?php
  require('servicos/login_required.php');
  require('menu.php');
  require('login_defs.php');
  require('header.html');
  require('servicos/friend_requests.php');
  require('servicos/invite_friend.php');
  require('servicos/profile_services.php');
  ?>
  <title>Add friend</title>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        <div class="row bg-primary text-light">
          <div class="col-md-12" style="padding-top: 20px;"><img src="images/profile.jpg" class="rounded mx-auto d-block" style="width: 50%;"></div>
          <span class="col-md-12" style="text-align: center;padding-top: 10px;padding-bottom: 10px;"><h3><?=$_SESSION['name_user']?></h3></span>
        </div>
        <div class="list-group row">
          <a href="add_friend.php" class="list-group-item list-group-item-action border-0 border-radius-none bg-light"><i class="fas fa-user-plus"></i> Add friends <?=$requests_number?></a>
          <a href="add_friend.php" class="list-group-item list-group-item-action border-0 border-radius-none bg-light"><i class="fas fa-users"></i> My friends <?=$requests_number?></a>
          <a href="add_friend.php" class="list-group-item list-group-item-action border-0 border-radius-none bg-light"><i class="fas fa-gamepad"></i> My games <?=$requests_number?></a>
        </div>
      </div>
      <div class="col-md-9">
        <div class="col-md-12">
          <form id="form-invite"  style="padding-top: 20px;padding-bottom: 20px;" method="POST">
            <div class="row">
              <div class="form-group col-md-12">
                <label for="username">Friend's username</label>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                  </div>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Friend's username">
                  <div class="col-auto">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i> Search</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
          <?=$result_invite?>
        </div>
        <div class="col-md-12" style="padding-top: 15px;">
          <?=$requests?>
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