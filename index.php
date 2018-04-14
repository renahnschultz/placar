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


  <title>Placar FIFA</title>
</head>
<body>
  <form 
    id="form-match" 
    action="save_match.php" 
    class="container" 
    style="margin-top: 30px;">
    <div class="row">
      <div class="col-md-5" style="text-align: center;">
        <input 
          id="team-1-label" 
          type="text" 
          placeholder="Team 1" 
          name="team-1-label"
          required
          class="form-control time-input" />
        <input 
          id="team-1" 
          type="hidden" 
          name="team-1"
          required />
        <input 
          id="goal-team-1" 
          type="number" 
          value="0" 
          min="0" 
          max="30" 
          name="goal-team-1" 
          class="form-control time-placar-input" />
        <input 
          id="player-1" 
          type="text"
          required
          placeholder="Player 1" 
          name="player-1" 
          class="form-control time-input" />
      </div>
      <div 
        class="col-md-2" 
        style="text-align: center;">
        <span 
          style="font-size: 55px;font-weight: bold;margin-top: 100px;display: block;">
          vs
        </span>
        <button 
          type="submit" 
          class="btn btn-success btn-lg btn-block">
          <i class="fas fa-check"></i> 
          Salvar Jogo
        </button>
      </div>
      <div class="col-md-5" style="text-align: center;">
        <input 
          id="team-2-label" 
          type="text" 
          placeholder="Team 2" 
          name="team-2-label"
          required
          class="form-control time-input" />
        <input 
          id="team-2" 
          type="hidden" 
          name="team-2"
          required />
        <input 
          id="goal-team-2" 
          type="number" 
          value="0" 
          min="0" 
          max="30" 
          name="goal-team-2" 
          class="form-control time-placar-input"/>
        <input 
          id="player-2" 
          type="text" 
          required 
          placeholder="Player 2" 
          name="player-2" 
          class="form-control time-input" />
      </div>
    </div>
  </form>




  <script>
    $("#team-1-label").autocomplete(autoCompleteClubes("#team-1"));
    $("#team-2-label").autocomplete(autoCompleteClubes("#team-2"));

    $("#form-match").submit(function() {
      event.preventDefault();
      submitForm("#form-match");
    });
  </script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/bootstrap.min.js" ></script>

  </body>
  </html>