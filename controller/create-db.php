<?php
	require_once(__DIR__ . "/../model/config.php");

	/*Creates the entire table*/
	$query = $_SESSION["connection"]->query("CREATE TABLE posts ("
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
		echo "<p>" . $_SESSION["connection"]->error . "</p>";
	}

	/*creates another table*/
	$query = $_SESSION["connection"]->query("CREATE TABLE users("
			. "id int(11) NOT NULL AUTO_INCREMENT,"
			. "username varchar(30) NOT NULL,"
			. "email varchar(50) NOT NULL,"
			. "password char(128) NOT NULL,"
			. "salt char(128) NOT NULL,"
			. "PRIMARY KEY (id))");

	/*echo that the table was created*/
	if ($query) {
		echo "<p>Successfully created table: users</p>";
	}
	/*fired when query is false*/
	else {
		echo "<p>" . $_SESSION["connection"]->error . "</p>";
	}
