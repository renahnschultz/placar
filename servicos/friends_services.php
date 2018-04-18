<?php
$friends = "";

$query_friends = "SELECT * FROM user u
where u.id IN (select f.id_user_invite from friends f where f.id_user_accept = ".$_SESSION['id_user'].")
OR u.id IN (select f.id_user_accept from friends f where f.id_user_invite = ".$_SESSION['id_user'].")";

$result_friends = mysqli_query($connection,$query_friends);

$result = mysqli_query($connection,$query_number);
if($result_friends->num_rows > 0){
	$friends ='<div class="card border-0 bg-success">
	<div class="card-header text-white">
	My friends
	</div>
	<ul class="list-group">';
}
while($row = mysqli_fetch_array($result_friends) ){
	$friends .= '<li class="list-group-item">'.$row['name'].' (<span style="font-size: 12px;">'.$row['username'].'</span>)
	</li>';
}
if($result_friends->num_rows > 0){
	$friends .= '</ul>
	</div>';
}
?>