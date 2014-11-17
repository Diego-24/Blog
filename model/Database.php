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

	}

	/*closes the connection*/
	public function closeConnection() {

	}


	public function query($string) {

	}
}