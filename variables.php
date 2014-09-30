<html>
	<body>

<h1>Experiments on variables !!</h1>

<?php 
	echo "Just normal variables<br>";
	$x=5;
	$y=6;
	$z=$x+$y;
	echo $x," ",$y," ",$z,"<br>";

	echo "Global Variables<br>";
	function test()
	{
		$w=7;
		$t=$GLOBALS['x']+$w;	//Without specifying the global variable is not taken into account
		echo "Accessing global x from here ",$t,"<br>";
	}
	test();
?>
	</body>
</html>