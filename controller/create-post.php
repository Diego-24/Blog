<?php
	require_once(__DIR__ . "/../model/database.php");
	
	/*gives us access to these variables*/
	$connection = new mysqli($host, $username, $password, $database);

	/*makes sure no weird things happen to the input*/
	/*INPUT_POST gives us info that is being posted*/
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

	/*runs a query on my dataase.Inserts into my table called posts.Setting the values within post called title and post*/
	$query = $connection->query("INSERT INTO posts SET title = '$title', post = '$post'");

	if($query) {
		echo "<p>Successfully inserted post: $post</p>";
	}
	else {
		echo "<p>$connection->error</p>";
	}

	/*closes connection*/
	$connection->close();