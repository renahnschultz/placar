<!doctype html>
<html lang="pt_BR">
<head>
  <?php
  require('servicos/login_required.php');
  require('menu.php');
  require('login_defs.php');
  require('header.html');


  require('servicos/invite_friend.php');

  ?>
  <title>Add friend</title>
</head>
<body>
  <div class="page-title">
    Add Friends
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-6" style="padding-top: 15px;">
        REQUESTS HERE
      </div>
      <div class="col-md-6">
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
        <ul class="list-group">
          <?=$result_invite?>
        </ul>
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