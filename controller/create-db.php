<?php
	require_once(__DIR__ . "/../model/config.php");

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

		/*this if statement echos that the database was created*/
		if($query) {
			echo "<p>Successfully creaated database: " . $database . "</p>";
		}

	}
	/*this else statement is echoing that my database exists*/
	else {
		echo "<p>Database already exists.</p>";

	}

	/*Creates the entire table*/
	$query = $connection->query("CREATE TABLE posts ("
		. "id int(11) NOT NULL AUTO_INCREMENT,"
		. "title varchar(255) NOT NULL,"
		. "post text NOT NULL,"
		. "PRIMARY KEY (id))");

	/*echos that the table posts were created*/
	if($query) {
		echo "<p>Succesfully create table posts</p>";
	}
	/*gets fired when the query is false*/
	else{
		echo "<p>$connection->error</p>";
	}

	$connection->close();

?>