<?php  
 // Check if database.php has already been included, and if not, to require it.
 require_once(__DIR__ . "/../model/config.php");
 // Opens a new connection to the MySQL server
 $connection = new mysqli($host, $username, $password);
 // Checks if their is an error, if so, echos it out.
 if ($connection->connect_error) {
 	die("<p>Error: " . $connection->connect_error . "</p>");
 }
  // Selects the database
  $exists = $connection->select_db($database);
    
   if (!$exists) {
   	// Sends commands to the Databases
   	$query = $connection->query("CREATE DATABASE $database");
    // Checks if the database has been created and outputs and echo saying so.
   	if ($query) {
    // Put the echo in paragraph tag
	  echo "<p>Successfully created a database: " . $database . "</p>";     
   	}
   }
   // Echos out a statement saying that a Database already exists.
   else{
   	echo "<p>Database already exists.</p>";
   }
// Created a query, and it creates a table
// Tables name is Post
   $query = $connection->query("CREATE TABLE posts("
    // THe ID is an integer and we don't have to worry about setting ids usinng AUTO_INCREMEMNT
    // NONE OF THEM COULD BE NULL!!!
    . "id int(11) NOT NULL AUTO_INCREMENT,"
    // The title is a string of characters
    . "title varchar(255) NOT NULL,"
    // The post is text
    . " post text NOT NULL,"
    // Our Primary key is "id"
    // The way tables are connected to each other
    . "PRIMARY KEY (id) )");
 // Closes the connection

   if ($query) {
    // Makes a table called posts
    echo "<p>Successfully create table: posts</p>";
   }
   else{
    //  If the page is refreshed, it'll display the error.
     echo "<p>$connection->error</p>";
   }
 $connection->close();
