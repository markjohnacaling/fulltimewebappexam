<!DOCTYPE html>
<html>
<head>
	
</head>
<body>

<?php

$myfile = fopen("hello_there.php", "w") or die("Unable to open file!");
$ph = "<?php 
echo 'This is a test page!';
echo 'Exam number two!';
?>";
fwrite($myfile, $ph);



?>
</body>
</html>
