<?php
/*cleaner and more organized code. We use classes so we can create an object*/
class Database {
	private $connection;
	private $host;
	private $username;
	private $password;
	private $database;

	/*Defines the constructors. Constructor is called on an object after it has been made.*/
	public function __construct($host, $username, $password, $database) {
		$this->host = $host;
		$this->username = $username;
		$this->password = $password;
		$this->database = $database;
	} 

	/*opens the connection*/
	public function openConnection() {
		$this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
		
		/*Checking if there was an error connecting to the database.
		If there is an error the program will die*/
		if ($this->connection->connect_error) {
			die("<p>Error: " . $this->connection->connect_error . "</p>");
		}
	}

	/*statements that can be repeated. closes the connection*/
	public function closeConnection() {
		/*checks if the variable has been set or not
		or if there is something within the variable*/
		if(isset ($this->connection)) {
			$this->connection->close();
		}
	}


	public function query($string) {

	}
}