<html>
	<head>
		<title>Array Functions</title>
	</head>
	<body>
			<?php
						$numbers = array(1,2,3,4,5,6,7,8,9);
						print_r( $numbers );
						echo "<br><br>";

						//pull the 1st element of an array
						//and return it
						$a = array_shift( $numbers );
						echo "A = ". $a;
						echo "<br>";
						print_r( $numbers );
						echo "<br><br>";

						//push the 1st element of an array
						//and return it
						$b = array_unshift( $numbers, "first" );
						echo "B = ". $b;
						echo "<br>";
						print_r( $numbers );
						echo "<br><br>";

						echo "<hr>";

						//pop the 1st element of an array
						//and return it
						$c = array_pop( $numbers );
						echo "C = ". $c;
						echo "<br>";
						print_r( $numbers );
						echo "<br><br>";

						//push the last element of an array
						//and return it
						$d = array_push( $numbers, "last" );
						echo "D = ". $d;
						echo "<br>";
						print_r( $numbers );
						echo "<br>";

			?>
	</body>
</html>
