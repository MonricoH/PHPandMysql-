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



	
if (isset($_POST['btnedit'])) {
	$lastname = htmlspecialchars($_POST['txtlastname']);
	$firstname = htmlspecialchars($_POST['txtfirstname']);
	$sex = htmlspecialchars($_POST['drpsex']);
	$email = htmlspecialchars($_POST['txtemail']);

	$err = [];
	if (empty($lastname))
		$err[] = "Lastname is req";

	if(empty($firstname))
		$err[] = "firstname is req";
	if(empty($email))
		$err[] = "email is address  is req";
	
	if (empty($err)) {
		require('open-connection.php');

		$strsql = "
			UPDATE persons SET
			 lastname = '$lastname',
			 firstname = '$firstname',
			 sex = '$sex',
			 email = '$email'
			 WHERE id = ".$_SESSION['k'];

	if(mysqli_query($con, $strsql))
		header('location: persons.php');
	else
		$err[] = 'ERROR:failed to update';


		require('close-connection.php');
	}
}

$arrsex = array('Male' , 'Female');
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>EDIT PERSON</title>
</head>
<body>
	<h1>EDIT PERSON</h1>
	<hr>
	<form method="post">
		<input type="text" name="txtlastname" id="txtlastname" value="<?php echo (isset($recpersons['lastname']) ? $recpersons['lastname'] : '') ;?>" placeholder="Last Name" required><br>
		<input type="text" name="txtfirstname" id="txtfirstname"  value="<?php echo (isset($recpersons['firstname']) ? $recpersons['firstname'] : '') ;?>" placeholder="First Name" required><br>
		<select name="drpsex">
			<?php 
				if(isset($arrsex) && isset($recpersons['sex'])){
					foreach ($arrsex as $key => $value) {
						if ($value == $recpersons['sex'])
							// code...
						
						echo '<option value="'. $value.'" selected>'. $value.'</option>';
						else
						echo '<option value="'. $value.'" >'. $value.'</option>';
					}
				}
			?>

			
		</select><br>
		<input type="email" name="txtemail" id="txtemail" value="<?php echo (isset($recpersons['email']) ? $recpersons['email'] : '') ;?>"  placeholder="Email Adress" required><br>
		<a href="persons.php">Cancel / Go Back</a>
		<input type="submit" name="btnedit" value="edit person">
	</form>
</body>
</html>