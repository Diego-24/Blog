<<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
	<div class="container">
		<div class="row">
			<div id="title" class="Blog-Project">
				<h1>Blog Project</h1>
			</div>
			<div>
				<h1>About Me</h1>
				<p>Cras maecenas magna mus vehicula commodo diam ante augue elementum varius eu fames mauris facilisi amet. Platea maecenas cum euismod viverra. Eu habitasse nunc vel nascetur inceptos hendrerit pharetra in consequat velit curae; varius porta.</p>
				<p>Senectus. Etiam bibendum Tortor ligula mauris, habitasse, rutrum. Phasellus montes litora at phasellus. Ad ullamcorper Class hendrerit ac tellus et semper pellentesque tempor suspendisse eget dolor vehicula. Tempor urna. Erat sollicitudin. Nibh sem justo suscipit justo hymenaeos malesuada dignissim. Praesent sagittis convallis egestas eleifend. Mollis, magna quis lacinia, taciti ad duis habitant. Vel fusce. Mus.</p>
			</div>
			<div>
				<?php

					require_once(__DIR__ . "/../model/config.php");
					
					$query = "SELECT * FROM posts";
					$result = $_SESSION["connection"]->query($query);

					if($result){
						while($row = mysqli_fetch_array($result)) {
							echo "<div class='post'>";
							echo "<h2>" . $row['title'] . "</h2>";
							echo "<br />";
							echo "<p>" . $row['post'] . "</h1>";
							echo "<br/>";
							echo "</div";
						}
					}	
				?>
			</div>
		</div>
	</div>
</body>
</html>