<?php
// Requires 
require_once(__DIR__ . "/database.php");
session_start();
// Path for post.php, easier to change location
	$path = "/blog/";

// The varibles for $... from database.php to config.php to make it much easier to modify them
	$host = "localhost";
 	$username = "root";
 	$password = "root";
 	$database = "blog_db"; 

 	// If the session variable has not been set, then it will create the databse object and sets it to our session variable
 	if(!isset($_SESSION["connection"])){
	 	// Makes a new connection to the database
	 	$connection = new Database($host,$username, $password, $database);
	 	// Assigning the connection varible to the Session Varibale called Connection
	 	$_SESSION["connection"] = $connection;
    }