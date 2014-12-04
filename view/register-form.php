<?php
	require_once(__DIR__ . "/../model/config.php");
?>

<h1>Register</h1>

<!--creates a path-->
<form method="post" action="<?php echo $path . "controller/create-post.php"; ?>">
	<div>
		<!--creates a slot for the user's email-->
		<label for="email">Email: </label>
		<input type="text" name="email" />
	</div>

	<div>
		<!--creates a slot for the user's username-->
		<label for="username">Username: </label>
		<input type="text" name="username" />
	</div>

	<div>
		<!--creates a slot for the user's password-->
		<label for="password">Password: </label>
		<input type="password" name="password" />
	</div>

	<div>
		<!--creates a submit button-->
		<button type="submit">Submit</button>
	</div>
</form>