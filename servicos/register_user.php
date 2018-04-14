<?php
require('connection.php');
require('../entidades/user.php');
require('../entidades/userDAO.php');

if(!isset($_POST['first-name']) 
	|| !isset($_POST['last-name']) 
	|| !isset($_POST['email']) 
	|| !isset($_POST['username']) 
	|| !isset($_POST['born']) 
	|| !isset($_POST['password'])){
	echo "You need to fill all informations.";
}

$user = new User($_POST['first-name'], $_POST['last-name'], $_POST['username'], $_POST['email'], $_POST['born'], $_POST['password']);
echo $user->name;
$userDAO = new UserDAO;
$userDAO->insert($user,$connection);


?>