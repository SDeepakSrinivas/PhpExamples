<html>
<head>
	<title>Global variables</title>
</head>
<body>

<?php 
$x = 75; 
$y = 25;
 
function addition() { 
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; 
}
 
addition(); 
echo $z; 
?>

</body>
</html>