<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>xssDemo</title>
</head>
<body>
	<form method="post">
		<input type="text" name="txtname">
		<input type="submit" name="btnsend" value="send">



	</form>
	<?php
	if (isset($_POST['btnsend'])) {
		echo $_POST['txtname'];
	}


	  ?>
</body>
</html>