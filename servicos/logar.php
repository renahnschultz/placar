<?php
	session_start();
	ini_set('session.gc_maxlifetime', 1);
	require('connection.php');

	if (isset($_POST['emailLogin']) 
	            && isset($_POST['passwordLogin'])){
		$loginEmail = $_POST['emailLogin'];
		$loginSenha = $_POST['passwordLogin'];
		$query = "SELECT * FROM `usuario` WHERE email = '$loginEmail' AND senha = '$loginSenha'";
		$user = $connection->query($query);
		if ($user->num_rows > 0) {
			while($row = $user->fetch_assoc()) {
				$_SESSION['login'] = $row['email'];
				echo $row['email'];
				echo $_SESSION['login'];
				$_SESSION['senha'] = $row['senha'];
				setcookie("ultimo_login", $row['nome']);
			}
		}else{
			echo 'Fail.';
		}
	}

?>