<?php 
	// Requires config.php in this file
	require_once(__DIR__ . "/../model/config.php");

	//Filters through the email inputted
	$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
	//Filters through the username inputted
	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
	//Filters through the password inputted
	$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

	// echoes out the email, username, and password that the user inputted
	echo $email . " - " . $username . " - " . $password;