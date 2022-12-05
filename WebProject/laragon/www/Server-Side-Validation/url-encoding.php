<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>URL ENCODING</title>
</head>
<body>
	<?php 

	$fname = urlencode('Monrico & friend');
	$lname= urlencode('humilde');
	$sex = urlencode('male');


	 ?>


	<a href="url-encoding2.php?fname=<?php echo $fname;?>&lname=<?php echo $lname;?>&sex=<?php echo $sex;?>">Click me Baby </a>

</body>
</html>