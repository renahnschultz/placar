<?php
session_start();
ini_set('session.gc_maxlifetime', 1);
if(!isset($_SESSION['id_user'])){
	header('Location: login.php');
}
?>