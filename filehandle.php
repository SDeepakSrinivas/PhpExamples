<html>
<head>
	<title>File Handling !!</title>
</head>
<body>

<?php
echo readfile('webdict.txt');
echo "<br><br>";

$file=fopen("webdict.txt", "r");

while(!feof($file))
	echo fgets($file),"<br>";

fclose($file);
?>

</body>
</html>