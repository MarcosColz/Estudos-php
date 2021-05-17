<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 

	$var1 = "Brasil";
	$var2 = '---teste--- \n';
	echo $var2;
	echo "<br>";
	$var3 = "Brasil";
	$var4 = "--teste--\n";
	echo $var4;

	echo "<br>";

	class minhaclass 
	{
		public function teste()
		{
			echo "testess";

		}

		public function teste2()
		{
			echo "ava";
		}
	}

	$objeto = new minhaclass();

	$objeto -> teste();


	$objeto2 = new minhaclass();

	$objeto2 -> teste2();

	
 ?>
</body>
</html>