<?php
	require_once(__DIR__ . "/../model/config.php");

	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
	$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

	// Selects the salt and password form the users table where the username is the username sent via the post 
	$query = $_SESSION["connection"]->query("SELECT salt, password FROM users WERE username = '$username'");