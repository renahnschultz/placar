<?php
$requests_number = "";

$query_number = "SELECT count(f.id_user_accept) num FROM friends f WHERE f.friends = 0 AND f.id_user_accept = ".$_SESSION['id_user'];
$result = mysqli_query($connection,$query_number);
while($row = mysqli_fetch_array($result) ){
	if($row['num'] > 0){
		$requests_number = '<span class="float-right badge badge-primary badge-pill">'.$row['num'].'</span>';
	}
}

$friends_number = "";

$query_friends_number = "SELECT COUNT(u.id) as num FROM user u
where u.id IN (select f.id_user_invite from friends f where f.id_user_accept = ".$_SESSION['id_user'].")
OR u.id IN (select f.id_user_accept from friends f where f.id_user_invite = ".$_SESSION['id_user'].")";
$result_friends_number = mysqli_query($connection,$query_friends_number);
while($row = mysqli_fetch_array($result_friends_number) ){
	if($row['num'] > 0){
		$friends_number = '<span class="float-right badge badge-success badge-pill">'.$row['num'].'</span>';
	}
}

?>