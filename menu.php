<?php
	$botao_login;
	if(isset($_SESSION['id_user'])){
		$botao_login = '<button type="button" onclick="logout()" class="btn btn-outline-danger" style="float: right ;">Logout</a>';
	}else{
		$botao_login = '<a href="login.php" class="btn btn-outline-primary" style="float: right ;">Sign-in</a>';
	}

?>

<html>
<body>
	<nav class="navbar sticky-top navbar-expand-md navbar-light" style="background-color: #fafafa;">
		<a class="navbar-brand" href="#">
			<i class="fas fa-gamepad"></i> Placar
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="index.php">New game <span class="sr-only">(current)</span></a>
				</li>
			</ul>
		</div>
		<?=$botao_login?>
	</nav>
</body>
</html>