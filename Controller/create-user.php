<?php 
	// Requires config.php in this file
	require_once(__DIR__ . "/../model/config.php");

	//Filters through the email inputted
	$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
	//Filters through the username inputted
	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
	//Filters through the password inputted
	$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

	// echoes out the password that the user inputted
	echo $password;

	// $5$ tells php that we want to use SHA 256 5,000 times to create a unique salt for the user
	// uniqid is a fucntion that creates a unique id for us
	// mt_rand generates a random number and uses that number to create a really unique id for it
	$salt = "$5$" . "round=5000$" . uniqid(mt_rand(), true) . "$";

	// Echoes the salt for the user who registered
	echo $salt;