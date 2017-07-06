<html>
	<head>
		<title>Date And Time: Format</title>
	</head>
	<body>
			<?php

					$timestamp = time();
					echo strftime( "The date today is %d/%m/%y ", $timestamp );
					echo "<br><br>";
					function strip_zeroes_from_dates( $marked_string = "" ){
						//removed the marked zeroes
						$no_zeroes = str_replace( '*0', '', $marked_string );
						//remove any remaining marks
						$cleaned_state = str_replace( '*', '', $no_zeroes);
						return $cleaned_state;

					}
					echo strip_zeroes_from_dates(strftime("The date today is *%d/*%m/%y ", $timestamp));

					echo "<hr>";
					$mysql_time = strftime( "*%d-*%m-%Y %H:%M:%S", $timestamp );
					echo strip_zeroes_from_dates($mysql_time);


			?>
	</body>
</html>
