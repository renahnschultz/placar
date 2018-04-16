<?php
require('connection.php');

$requests = "";

$query = "SELECT u.* FROM friends f INNER JOIN user u ON u.id = f.id_user_invite WHERE f.id_user_accept = ".$_SESSION['id_user'];




$result = mysqli_query($connection,$query);
while($row = mysqli_fetch_array($result) ){
	$requests .= '<li class="list-group-item">'.$row['name'].' (<span style="font-size: 12px;">'.$row['username'].'</span>)
            <form style="display:block;margin-left:5px;" class="float-right" method="POST">
            <button type="submit" class="btn btn-sm btn-primary btn-success"><i class="fas fa-check"></i></button>
            <input type="hidden" id="id" name="id" value="'.$row['id'].'" />
            </form>
			<form style="display:block;" class="float-right" method="POST">
            <button type="submit" class="btn btn-sm btn-primary btn-danger"> <i class="fas fa-times-circle"></i> </button>
            <input type="hidden" id="id" name="id" value="'.$row['id'].'" />
            </form> 
          </li>';
}
?>