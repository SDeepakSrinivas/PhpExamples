<html>
<head>
	<title>Functions Man !!</title>
</head>
<body>

<?php
function sum($x,$y)
{
	echo "Value of x ",$x,"<br>";
	echo "Value of y ",$y,"<br>";
	echo "Value of Sum ",$x+$y,"<br><br>";
	return ($x+$y);
}
echo sum(1,2),"<br>";
sum(2,3);
sum(6,4);
sum(5,2);
sum(9,4);

function thiruttu($str)
{
	echo "Thiruttu Dhinda ",$str,"a !!<br>";
}

thiruttu("Deepak");
thiruttu("Keshav");
?>

</body>
</html>