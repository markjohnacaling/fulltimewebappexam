  
<!DOCTYPE html>
<html>
<head>
	
</head>
<body>

<?php
$a = 0;
$b =1;
$c = 0;
$result = 0;

for ($a = 0; $a < 10; $a++) {
	if($a < 2)
	{
echo $result . "<br>";
$result++;
	}
	$result = $b + $c;
	echo $result . "<br>";
	$c = $b;
    $b = $result;

	
	
 	
}


?>
</body>
</html>
