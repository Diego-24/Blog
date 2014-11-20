<?php
	require_once(__DIR__ . "/database.php");

	/*Sets the path that leads to PHPBasics*/
	$path = "/PHPBasics/";
	
	$host = "localhost";
	$username = "root";
	$password = "root";
	$database = "blog_db";

	/*stores the object mysqli*/
	$connection = new Database($host, $username, $password, $database);