<html>
	<head>
		<title>Variable scope</title>
	</head>
	<body>
			<?php
						$var1 = 1;

						function test1(){
							$var2 = 2;
							echo $var2;
							echo "<br>";
						}

						test1();
						echo $var1;
						echo "<br>";
						echo "<br>";


						function test2(){
							global $var3;
							$var3 = 3;
							$var4 = 4;
							//echo $var4;
							echo "<br>";
						}
						test2();
						echo $var3;
						echo "<br>";
						echo "<br>";

						$var5 = 1;
						function test3(){
							static $var5 = 2;
							echo $var5."<br>";
							$var5++;
						}

						test3();
						test3();
						test3();
						echo $var5."<br>";

			 ?>
	</body>
</html>
