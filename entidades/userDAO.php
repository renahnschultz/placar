<?php
	class UserDAO{
		
		public function insert($user, $connection){
			echo $user->name;
			$query = "INSERT INTO `user` (name, email, password, username, born) VALUES ('".$user->name."','".$user->email."','".$user->password."','".$user->username."','".$user->born."')";
			$result = mysqli_query($connection, $query);
			if($result){
				echo "User saved successfully.";
			}else{
				echo "User not saved.";
			}
		}
	}


?>	