<!DOCTYPE html>
<html>
<head>
	
</head>
<body>

<?php
$names = array("Marvin", "Marco", "Marvin", "Marco","Marco", "Marvin", "Christian");
sort($names);
	
 	$length = count($names);
for($x = 0; $x < $length; $x++ )
{
echo $names[$x] . "<br>";
}


?>
</body>
</html>
