<?php
// Path for post.php, easier to change location
	$path = "/blog/";

// The varibles for $... from database.php to config.php to make it much easier to modify them
	$host = "localhost";
 	$username = "root";
 	$password = "root";
 	$database = "blog_db"; 

 	// Makes a new connection to the database
 	$connection = new Database($host,$username, $password, $database);
 