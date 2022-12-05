<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pays app</title>
</head>
<body>
	<h2>Pays App</h2>
	<form method="post">
		<label for="rngSize">Select Photo Size:</label>
		<input type="range" name="rngSize" id="rngSize" min="10" max="100" step="10"><br>
		<label for="clrpickerborder">Select Border Color:</label>
		<input type="color" name="clrpickerborder" id="clrpickerborder"><br>

		<button type="submit" name="btnprocess"> Process</button>


	</form>
	<br>
	<?php 

	$photosize ='.6';
	$bordercolor = '#000';

	if (isset($_POST['btnprocess'])) {
		$photosize = $_POST['rngSize'] * 0.01;
		$bordercolor = $_POST['clrpickerborder'];
	}



	 ?>
	<img src="img.jpg" style=" transform: scale(<?php echo $photosize;?>); border: <?php echo $bordercolor; ?> solid 5px;">

</body>
</html>