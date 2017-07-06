<html>
	<head>
		<title>Date And Time: Epoch Unix</title>
	</head>
	<body>
			<?php

					echo time();
					echo "<br>";
					echo mktime( 3, 11, 00, 07, 07, 2017);
					echo "<br>";

					//checkdate function
					echo checkdate(12,31,2017)? 'true' : 'false';
					echo "<br>";
					echo checkdate(2,31,2017)? 'true' : 'false';
					echo "<br>";

					//strtotime
					$unix_timestamp = strtotime("now");
					echo $unix_timestamp;
					echo "<br>";

			?>
	</body>
</html>
