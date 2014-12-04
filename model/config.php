<?php
	require_once(__DIR__ . "/database.php");
	require_once(__DIR__ . "/date.php");
	session_start();

	/*Sets the path that leads to PHPBasics*/
	$path = "/PHPBasics/";
	
	$host = "localhost";
	$username = "root";
	$password = "root";
	$database = "blog_db";

	/*checks if it has been set or not*/
	if(!isset($_SESSION["connection"])) {
		/*stores the object mysqli*/
		$connection = new Database($host, $username, $password, $database);
		/*assigns the connection variable to the session variable*/
		$_SESSION["connection"] = $connection;
	}
	