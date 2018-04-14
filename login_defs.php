<?php
	if(!isset($_SESSION['login']) or !isset($_SESSION['senha'])){
		$logado = '<button type="button"  data-toggle="modal" data-target="#exampleModalLong" class="btn btn-primary" style="float: right;">Login</button>';
		$exibirLogado = 'none';
	} else if($_SESSION['login'] != '' and $_SESSION['senha'] != ''){
		$logado = 'Session with '. $_SESSION['login'] . ' <button type="button" class="btn btn-primary" style="float: right;" onclick="logout();">Logout</button>';
	}

?>