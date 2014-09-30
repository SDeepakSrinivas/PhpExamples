<html>
<head>
	<title>Sorting in arrays</title>
</head>
<body>

<?php

//Ascending sorting of values
$arr=array("8"=>"30","6"=>"25","4"=>"20","2"=>"10");
sort($arr);
var_dump($arr);

//Descending sorting of values
$arr=array("8"=>"30","6"=>"25","4"=>"20","2"=>"10");
rsort($arr);
var_dump($arr);

//sort values
$arr=array("8"=>"30","6"=>"25","4"=>"20","2"=>"10");
asort($arr);
var_dump($arr);

//sort keys
$arr=array("8"=>"30","6"=>"25","4"=>"20","2"=>"10");
ksort($arr);
var_dump($arr);



?>


</body>
</html>