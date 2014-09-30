<html>
<head>
	<title>Form 1 !!</title>
</head>
<body>

<h2>Fill up this form !!</h2>

<?php
echo "Your name is ",$_POST["name"]," and your e mail is ",$_POST["email"],".<br>";
echo "Content: ",$_POST["content"];

?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
Name : <input type="text" name="name"><br>
E-Mail : <input type="text" name="email"><br>
Subject : <input type="text" name="subject"><br>
Content : <textarea name="content" rows="20" cols="30"></textarea>
<input type="submit" >
</form>



</body>
</html>