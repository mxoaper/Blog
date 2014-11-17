<?php  
// No other fule can access these variables because they are private variables
// We are making a new instance Class to make an Object
class Database {
	private $connection;
	private $host;
	private $username;
	private $password;
	private $database;
}
?>