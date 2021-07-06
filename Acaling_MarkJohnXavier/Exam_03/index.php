<!DOCTYPE html>
<html>
<head>
	
</head>
<body>

<?php

for($n = 1; $n<=10; $n++)
{
	$sqrt1 = (5 *$n * $n+ 4);
	$sqrt2 = (5 *$n * $n- 4);
if(sqrt($sqrt1) == floor(sqrt($sqrt1)) || sqrt($sqrt2) == floor(sqrt($sqrt2)))
{
echo $n . " is a Fibonacci Number <br>";
}
else 
{
	echo $n . " is not a Fibonacci Number <br>";
}
}



?>
</body>
</html>
