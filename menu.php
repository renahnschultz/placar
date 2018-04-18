<?php
$botao_login;
if(isset($_SESSION['id_user'])){
	$botao_login = '<div class="dropdown">
			<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				'.$_SESSION['name_user'].'
			</button>
			<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
				<a class="dropdown-item" href="profile.php"><i class="fas fa-user"></i> Profile</a>
				<a class="dropdown-item" href="add_friend.php"><i class="fas fa-user-plus"></i> Add Friend</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="#" onclick="logout()">Logout</a>
			</div>
		</div>';
}else{
	$botao_login = '<a href="login.php" class="btn btn-info" style="float: right ;">Sign in</a>';
}

?>

<html>
<body>
	<nav class="navbar sticky-top navbar-expand-md navbar-light bg-light">
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
</nav>
</body>
</html>