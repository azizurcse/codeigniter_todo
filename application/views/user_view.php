<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Users</title>
</head>
<body>
	
	<?php 
	
		foreach ($results as $object) {
			echo $object->username ."<br>";
		}

	?>
</body>
</html>