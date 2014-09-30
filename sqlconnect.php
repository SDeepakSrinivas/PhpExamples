<html>
<head>
	<title>Sql Connect !</title>
</head>
<body>

<?php

// $con=mysqli_connect("localhost","root","");

// if(mysqli_connect_errno())
// {
// 	echo "Error !!";
// }
// echo "Connected";
// echo "<br>";

// // Create database
// $sql="CREATE DATABASE my_db";
// if (mysqli_query($con,$sql)) {
//   echo "Database my_db created successfully";
// } else {
//   echo "Error creating database: " . mysqli_error($con);
// }


// mysql_close($con);
//Connect to already created database
$con=mysqli_connect("localhost","root","","my_db");
$sql="CREATE TABLE Persons(firstname char(30),lastname char(30),age int)";
//Create table
mysqli_query($con,$sql);
//Insert
// mysqli_query($con,"INSERT INTO Persons(firstname,lastname,age) VALUES ('keshav','srinivas',19)");

//Select
$res=mysqli_query($con,"Select * from Persons where firstname='keshav'");

while($row=mysqli_fetch_array($res))
	echo $row['firstname']," ",$row['lastname']," ",$row['age'],"<br>";

?>


</body>
</html>