<?php
	require('connection.php');
	require('../entidades/matchDAO.php');
	require('../entidades/match.php');

	if(!isset($_POST['team-1']) 
		|| !isset($_POST['team-2']) 
		|| !isset($_POST['goal-team-1']) 
		|| !isset($_POST['player-1']) 
		|| !isset($_POST['goal-team-2']) 
		|| !isset($_POST['player-2'])){
		return;
	}

	$match = new Match;
	$match->teams = array("one"=>$_POST['team-1'],"two"=>$_POST['team-2']);
	$match->players = array("one"=>$_POST['player-1'],"two"=>$_POST['player-2']);
	$match->goals = array("one"=>$_POST['goal-team-1'],"two"=>$_POST['goal-team-2']);
	$match->date = date("Y-m-d");

	$matchDAO = new MatchDAO;
	$matchDAO->insert($match, $connection);
	
?>