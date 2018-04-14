<?php

class User{
	
	public $name;
	public $username;
	public $email;
	public $born;
	public $password;

	function __construct($firstName, $lastName, $username, $email, $born, $password){
		$this->name = $firstName." ".$lastName;
		$this->username = $username;
		$this->email = $email;
		$this->born = $born;
		$this->password = $password;
	}

}

?>