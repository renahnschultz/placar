<?php
	class MatchDAO{
		
		public function insert($match, $connection){
			$query = "INSERT INTO `match` (player_one, team_one, goal_one, goal_two, team_two, player_two, date) VALUES ('".$match->players['one']."',".$match->teams['one'].",".$match->goals['one'].",".$match->goals['two'].",".$match->teams['two'].",'".$match->players['two']."','".$match->date."')";
			$result = mysqli_query($connection, $query);
			if($result){
				echo "Match saved successfully.";
			}else{
				echo "Match not saved.";
			}
		}
	}


?>	