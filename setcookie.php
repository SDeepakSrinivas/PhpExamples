<html>
<head>
	<title>Setting and Showing all Cookies</title>
</head>
<body>


<?php
$user=$_POST["name"];
$email=$_POST["email"];

setcookie($user,$email,time()+3600*24*30);
echo $_COOKIE["$user"],"<br>";
?>


</body>
</html>