<?php
require('connection.php');

if(isset($_POST['id-user-add'])){
	$today = date("Y-m-d");
	$query_add = "UPDATE friends f SET f.friends = 1, f.date = '".$today."' WHERE f.id_user_accept = ".$_SESSION['id_user']." AND f.id_user_invite = ".$_POST['id-user-add'];
	$result_add = mysqli_query($connection,$query_add);
}

$requests = "";

$query = "SELECT u.* FROM friends f INNER JOIN user u ON u.id = f.id_user_invite WHERE f.friends = 0 AND f.id_user_accept = ".$_SESSION['id_user'];


$result = mysqli_query($connection,$query);
if($result->num_rows > 0){
	$requests ='<div class="card border-0 bg-primary">
	<div class="card-header text-white">
	Friendship invitations
	</div>
	<ul class="list-group">';
}
while($row = mysqli_fetch_array($result) ){
	$requests .= '<li class="list-group-item">'.$row['name'].' (<span style="font-size: 12px;">'.$row['username'].'</span>)
	<form style="display:block;margin-left:5px;" class="float-right" method="POST">
	<button type="submit" class="btn btn-sm btn-primary btn-success"><i class="fas fa-check"></i></button>
	<input type="hidden" id="id_user_add" name="id-user-add" value="'.$row['id'].'" />
	</form>
	<form style="display:block;" class="float-right" method="POST">
	<button type="submit" class="btn btn-sm btn-primary btn-danger"> <i class="fas fa-times-circle"></i> </button>
	<input type="hidden" id="id_user_add" name="id-user-add" value="'.$row['id'].'" />
	</form> 
	</li>';
}
if($result->num_rows > 0){
	$requests .= '</ul>
	</div>';
}
?>