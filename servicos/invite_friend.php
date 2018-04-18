<?php

require('connection.php');

$result_invite = "";
if(isset($_POST['id'])){
	$today = date("Y-m-d");
	$query = "INSERT INTO `friends` (id_user_invite, id_user_accept, date) VALUES (".$_SESSION['id_user'].", ".$_POST['id'].", '".$today."')";
	$result = mysqli_query($connection, $query);
} else if(isset($_POST['username']) && $_POST['username'] != ""){
	$result_invite = "";
	
	$query = "SELECT * FROM `user` WHERE username LIKE '%".$_POST['username']."%'";
	$result = mysqli_query($connection,$query);
	if($result->num_rows > 0){
		$result_invite .= '<div class="card border-0">
		<div class="card-header">
		Search results
		</div>
		<ul class="list-group">';
	}
	while($row = mysqli_fetch_array($result) ){
		$result_invite .= '<li class="list-group-item">'.$row['name'].' (<span style="font-size: 12px;">'.$row['username'].'</span>)
		<form style="display:block;" class="float-right" method="POST">
		<button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-user-plus"></i></button>
		<input type="hidden" id="id" name="id" value="'.$row['id'].'" />
		</form>
		</li>';
	}
	if($result->num_rows > 0){
		$result_invite .= '</ul>
		</div>';
	}
}
?>