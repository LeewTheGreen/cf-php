<html>
<head>
	<link rel="stylesheet" href="assets/lib.css">
</head>
<body>
	<?php
		$count = 0;

		if(array_key_exists('count',$_GET)){
			$count = $_GET['count'];
		}

		for ($x = 0; $x < $count; $x++) {
			echo "<div>NA</div>";
		}
	?>
	<div>Pokemon!!!</div>
</body>
</html>
