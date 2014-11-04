<?php 
// Requires databse.php inside this file
	require_once(__DIR__ . "/../model/database.php");
// Established a connection to my database.php
	$connection = new mysqli($host, $username, $password, $databse);

	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

	echo "<p> Title: $title</p>";
	echo "<p> Post: $post</p>";
// Closed my connection to my databse
	$connection->close();