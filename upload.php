<html>
<head>
	<title>upload.php</title>
</head>
<body>

<?php
if($_FILES["file"]["error"]>0)
	echo "Error uploading file !! <br>";
else
{
	echo "Name : ",$_FILES["file"]["name"],"<br>";
	echo "Type : ",$_FILES["file"]["type"],"<br>";
	echo "Size : ",$_FILES["file"]["size"],"<br>";
	echo "TempName : ",$_FILES["file"]["tmp_name"],"<br>";

	//Saving
	if(file_exists($_FILES["file"]["name"]))
	echo "File already exists !! <br>";
	else
	{
		//file name is $_FILES["file"]["tmp_name"]
		move_uploaded_file($_FILES["file"]["tmp_name"],$_FILES["file"]["name"]);
	}	
}

?>

</body>
</html>