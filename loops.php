<html>
<head>
	<title>Loops Yo !!</title>
</head>
<body>

<?php

$sum1=0;
$sum2=0;

//While
$n=0;
while($n<=10)
{
	$sum1+=($n++);
}
echo $sum1;


//Do While !!
$n=0;
do
{
	$n++;
	$sum2+=$n;
}while($n<=10);

echo "<br>",$sum2;

//For
for($i=0;$i<100;$i++)
echo "Say My Name !!<br>";

//ForEach !!
$names=array("Heisenberg","Eddard","Stark");
foreach($names as $value)
	echo $value,"<br>"
?>


</body>
</html>