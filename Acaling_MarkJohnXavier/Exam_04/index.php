<!DOCTYPE html>
<html>
<head>
	
</head>
<body>

<?php

echo "Input  <br>Date 1:
<input onchange = 'yearoutput()' id = 'D1YEAR' type = 'number' style = 'width : 45px'  value = 2019 >-
<input onchange = 'monthoutput()' id = 'D1MONTH' type = 'number' style = 'width : 29px'  value = 05 >-
<input onchange = 'dayoutput()' id = 'D1DAY' type = 'number' style = 'width : 29px'  value = 31 >
<BR>
Date 2:
<input onchange = 'yearoutput()' id = 'D2YEAR' type = 'number' style = 'width : 45px' value = 2018  >-
<input onchange = 'monthoutput()' id = 'D2MONTH' type = 'number' style = 'width : 29px' value = 04  >-
<input onchange = 'dayoutput()' id = 'D2DAY' type = 'number' style = 'width : 29px'  value = 05 >
<BR>
<br>
 Output : <span id = 'year1'>1 year, </span>
 <span id = 'month1' >1 month, </span>
 <span id = 'day1'>26 days</span>
 <script>

 function yearoutput() {
 	var d1YEAR = document.getElementById('D1YEAR').value;
 	var d2YEAR = document.getElementById('D2YEAR').value;
	document.getElementById('year1').innerHTML = d1YEAR - d2YEAR + ' year/s, '    ;

	}

	 function monthoutput() {
 	var d1MONTH = document.getElementById('D1MONTH').value;
 	var d2MONTH = document.getElementById('D2MONTH').value;
document.getElementById('month1').innerHTML = d1MONTH - d2MONTH + ' month/s, '    ;

	}

	function dayoutput() {
 
 	var d1DAY = document.getElementById('D1DAY').value;
 	var d2DAY = document.getElementById('D2DAY').value;
document.getElementById('day1').innerHTML =   d1DAY - d2DAY + ' day/s '    ;

	}


		</script>
";


?>
</body>
</html>
