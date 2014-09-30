<?php

session_start();
if(isset($_SESSION["views"]))
$_SESSION["views"]+=1;
else
$_SESSION["views"]=1;

?>
<html>
<head>
	<title>Sessions !!</title>
</head>
<body>

<?php
echo "PageViews : ",$_SESSION["views"],"<br>";

?>

</body>
</html>