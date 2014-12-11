<?php 
// Requires databse.php inside this file
	require_once(__DIR__ . "/../model/config.php");

// Makes sure there is no malicous codes trying to hack my database through the title
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
// Makes sure there is no malicous codes trying to hack my database through the post
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
	// Stores the date
	$date = new DateTime('today');
	// Sotres the time and time zone
	$time = new DateTime('America/Los_Angeles');

// Made a query which inserts the post and sets the title of the post into my database
	$query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title' , post = '$post'");

// If Succesfull at submitting post, echoes out its success
	if ($query) {
		// Echoes out the success of the user's post
		echo "<p>Successfully inserted post: $title</p>";
		//Echoes out the date that the user's post was posted and the time
		echo "Posted on; " . $date->format("M/D" . " " . "d/Y") . "at " . $time->format("G:i");
	}
// If not successfull at submitting the post, it will echo out the error
	else {
		echo "<p>" . $_SESSION["connection"]->error . "</p>";
	}