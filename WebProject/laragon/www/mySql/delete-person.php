<?php  

session_start();
if (isset($_GET['k'])) 
	$_SESSION['k'] = $_GET['k'];

		require_once('open-connection.php');
			$strsql = "SELECT * FROM persons WHERE id = " . $_SESSION['k'];

			if ($rspersons = mysqli_query($con, $strsql)) {
				if (mysqli_num_rows($rspersons) > 0) {
					$recpersons = mysqli_fetch_array($rspersons);
					mysqli_free_result($rspersons); 
				}
				else{
					echo '<tr>';
					echo '<td colspan="4" align="center">no record found!</td>';
					echo'</tr>';
				}
			}
			else
				echo 'Error could not execute yor req';
		require_once('close-connection.php');



	
if (isset($_POST['btnremove'])) {
		require('open-connection.php');

		$strsql = "
			DELETE FROM persons
			WHERE id = ".$_SESSION['k'];

	if(mysqli_query($con, $strsql))
		header('location: persons.php');
	else
		$err[] = 'ERROR:failed to delete';


		require('close-connection.php');
}

$arrsex = array('Male' , 'Female');
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>remove PERSON</title>
</head>
<body>
	<h1>remove PERSON</h1>
	<hr>
	<p>Are you sure you want to remove this record?</p>
	<?php
	if (isset($recpersons)){
		echo '<li>Name:<b>'.$recpersons['firstname'].' '. $recpersons['lastname']. '</b></li>';
		echo '<li>Sex:<b>'.$recpersons['sex']. '</b></li>';
		echo '<li>Email:<b>'.$recpersons['email']. '<b/></li><br>';

	} 
	?>
	<form method="post">
		<a href="persons.php">No</a>
		<input type="submit" name="btnremove" value="Yes">
	</form>
</body>
</html>