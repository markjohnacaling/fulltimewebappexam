<!DOCTYPE html>
<html>
<head>
	
</head>
<body>

<?php
$numbers = array(9863, 7127, 2020, 80,131, 55, 100);
sort($numbers);
	$length = count($numbers);
 for($x = 0; $x < $length; $x++)
 {
if($names[$x] % 2 != 0){
$numbers[$x] = round($numbers[$x], 2) ;
 }
 echo $numbers[$x] . "<br>";

}


?>
</body>
</html>
