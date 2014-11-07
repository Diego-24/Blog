<?php
	/*makes sure no weird things happen to the input*/
	/*INPUT_POST gives us info that is being posted*/
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
	$post;