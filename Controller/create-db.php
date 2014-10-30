<?php  
 // Check if database.php has already been included, and if not, to require it.
 require_once(__DIR__ . "/../model/database.php");
 // Opens a new connection to the MySQL server
 $connection = new mysqli($host, $username, $password);
 // Checks if their is an error, if so, echos it out.
 if ($connection->connect_error) {
 	die("Error: " . $connection->connect_error);
 }
  // Selects the database
  $exists = $connection->select_db($database);
    
   if (!$exists) {
   	// Sends commands to the Databases
   	$query = $connection->query("CREATE DATABASE $database");
    // Checks if the database has been created and outputs and echo saying so.
   	if ($query) {
	  echo "Successfully created a database: " . $database;     
   	}
   }
   // Echos out a statement saying that a Database already exists.
   else{
   	echo "Database already exists.";
   }

   $query = $connection->query("CREATE TABLE posts("

    . "id int(11) NOT NULL AUTO_INCREMENT,"

    . "title varchar(255) NOT NULL,"

    . " post text NOT NULL,"

    . "PRIMARY KEY (id) )");
 // Closes the connection
 $connection->close();
