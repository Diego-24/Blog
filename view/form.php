<?php
	require_once(__DIR__ . "/../model/config.php");
?>

<h1>Create Blog Post</h1>
<!--Creates a path-->
<form method="post" action="<?php echo $path . "controller/create-post.php"; ?>">
	<div>
		<!--creates a space for a title-->
		<label for="title">Title: </label>
		<input type="text" name="title" />
	</div>
	<div>
		<!--creates a space for a post-->
		<label for="post">Post: </label>
		<textarea name="post"></textarea>
	</div>
	<div>
		<!--creates a button that says submit-->
		<button type="submit">Submit</button>
	</div>
</form>