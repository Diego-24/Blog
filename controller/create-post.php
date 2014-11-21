<?php
	require_once(__DIR__ . "/../model/config.php");
	
	/*makes sure no weird things happen to the input*/
	/*INPUT_POST gives us info that is being posted*/
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

	/*runs a query on my dataase.Inserts into my table called posts.Setting the values within post called title and post*/
	$query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title', post = '$post'");

	if($query) {
		echo "<p>Successfully inserted post: $post</p>";
	}
	else {
		echo "<p>" . $_SESSION["connection"]->error . "</p>";
	}