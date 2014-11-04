<?php 
// Requires databse.php inside this file
	require_once(__DIR__ . "/../model/database.php");
// Established a connection to my database.php
	$connection = new mysqli($host, $username, $password, $database);

	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

	$query = $connection->query("INSERT INTO posts SET title = '$title' , post = '$post'");

	if ($query) {
		echo "<p>Successfully inserted post: $title</p>";
	}
	else {
		echo "<p>$connection->error</p>";
	}

// Closed my connection to my databse
	$connection->close();