<?php
	require_once(__DIR__ . "/../model/database.php");

	$connection = new mysqli($host, $username, $password);

	/*Checking if there was an error connecting to the database.
	If there is an error the program will die*/
	if ($connection->connect_error) {
		die("<p>Error: " . $connection->connect_error . "</p>");
	}
	/*Tries to access a database that exists on mySQL server*/
	$exists = $connection->select_db($database);

	/*checking if we were able to connect to that database.
	Exclamation point changes it from true to false*/
	if (!$exists) {
		/*Sends a command to make a database*/
		$query = $connection->query("CREATE DATABASE $database");

		if($query) {
			echo "<p>Successfully creaated database: " . $database . "</p>";
		}

	}
	/*this else statement is echoing that my database is created*/
	else {
		echo "<p>Database already exists.</p>";

	}

	/**/
	$query = $connection->query("CREATE TABLE posts ("
		. "id int(11) NOT NULL AUTO_INCREMENT,"
		. "title varchar(255) NOT NULL,"
		. "post text NOT NULL,"
		. "PRIMARY KEY (id))");

	if($query) {
		echo "<p>Succesfully create table posts</p>";
	}
	else{
		echo "<p>$connection->error</p>";
	}

	$connection->close();

?>