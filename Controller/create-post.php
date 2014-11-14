<?php 
// Requires databse.php inside this file
	require_once(__DIR__ . "/../model/config.php");
// Established a connection to my database.php
	$connection = new mysqli($host, $username, $password, $database);

// Makes sure there is no malicous codes trying to hack my database through the title
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
// Makes sure there is no malicous codes trying to hack my database through the post
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

// Made a query which inserts the post and sets the title of the post into my database
	$query = $connection->query("INSERT INTO posts SET title = '$title' , post = '$post'");

// If Succesfull at submitting post, echoes out its success
	if ($query) {
		echo "<p>Successfully inserted post: $title</p>";
	}
// If not successfull at submitting the post, it will echo out the error
	else {
		echo "<p>$connection->error</p>";
	}

// Closed my connection to my databse
	$connection->close();