<?php  
// No other file can access these variables because they are private variables
// We are making a new instance Class to make an Object
class Database {
	private $connection;
	private $host;
	private $username;
	private $password;
	private $database;

// piece of code that can be reused again and again in substitution for the actual Class
	public function __construct($host, $username, $password, $database){
		$this->host = $host;
		$this->username = $username;
		$password->password = $password;
		$this->database = $database;

	}
// Function that opens the connection
	public function openConnection(){

	}
// Fucntion to close the connection
	public function closeConnection(){

	}
// Creates a query
	public function query($string){

	}
}
