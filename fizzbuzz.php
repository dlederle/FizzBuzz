<!doctype html>
<html>
<head>
	<title>FizzBuzz in php!</title>
</head>
<body>
<?php
	$count = 0;
	while ( $count <= 100 ) {
		echo "$count ";
		if($count % 3 == 0) {
			echo "Fizz";
		}
		if($count % 5 ==0) {
			echo "Buzz";
		}
		echo "<br />";
		$count++;
	}
?>
</body>
</html>
