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
