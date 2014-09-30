<html>
<head>
	<title>Arrays</title>
</head>
<body>
<?php

//Type of array
$arr=array("car","bus","cycle","lorry");
var_dump($arr);

echo count($arr),"<br><br>";

for($x=0;$x<count($arr);$x++)
	echo $x," ",$arr[$x],"<br>";
echo "<br>";
foreach($arr as $value)
	echo $value,"<br>";

?>


</body>
</html>