<?php
session_start();


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Session Demo Test</title>
</head>
<body>
	<?php
	//if (isset(echo $_SESSION['username'])) {
		echo $_SESSION['username'];
		echo $_SESSION['firstname'];
		echo $_SESSION['lastname'];
	//}
	

	?>

</body>
</html>