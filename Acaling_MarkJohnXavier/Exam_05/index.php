<!DOCTYPE html>
<html>
<head>
	
</head>
<body>

<?php

echo "Input :
<input onchange = 'returnv()' id = 'stringv' type = 'text' style = 'width : 45px'  value = 'Car' >

			<br>Output :<span id = 'output'>  </span>
			<script>
var outp = 	document.getElementById('output').innerHTML;
	function returnv() {
		var l = document.getElementById('stringv').value.length;
	
 for(var x = (l-1); x >= 0; x--)
 {
 	var inp = 	document.getElementById('stringv').value;
 	
 	outp +=  inp.charAt(x);
  	document.getElementById('output').innerHTML = outp; 


 }
	outp = '';
	}
	
var g = 'hello';

		</script>
";


?>
</body>
</html>
