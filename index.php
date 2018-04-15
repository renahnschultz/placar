<!doctype html>
<html lang="pt_BR">
<head>
  <?php
  require('servicos/login_required.php');
  require('menu.php');
  require('login_defs.php');
  require('header.html');
  ?>

  <title>Placar FIFA</title>
</head>
<body>
  <div class="page-title">
    <span>New game!</span>
  </div>
  <form 
    id="form-match" 
    action="servicos/save_match.php" 
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

  </body>
  </html>