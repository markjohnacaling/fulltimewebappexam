<!DOCTYPE html>
<html>
<head>
	
</head>
<body>

<?php
$colors = array("red", "blue", "black", "red", "blue", "blue", "red", "gold");
$colors = array_unique($colors);
	$length = count($colors);
 for($x = 0; $x < $length; $x++)
 {

echo $colors[$x] . "<br>";
}


?>
</body>
</html>
