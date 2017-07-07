<html>
	<head>
		<title>Reference Assignment</title>
	</head>
	<body>
		<?php

			$a = 1;
			$b = $a;
			$b = 2;
			echo "a = {$a} / b = {$b}"."<br>";

			echo "<hr>";

			$a = 1;
			$b = & $a;
			$b = 2;
			echo "a = {$a} / b = {$b}"."<br>";

			echo "<hr>";
			unset( $b );
			echo "a = {$a} / b = {$b}"."<br>";

		 ?>
	</body>
</html>
