<?php  

session_start();
if (isset($_GET['k'])) 
	$_SESSION['k'] = $_GET['k'];

		require_once('open-con.php');
			$strsql = "SELECT * FROM tbl_products WHERE id = " . $_SESSION['k'];

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
		require_once('close-con.php');



	
if (isset($_POST['btnremove'])) {
		require('open-con.php');

		$strsql = "
			DELETE FROM tbl_products
			WHERE id = ".$_SESSION['k'];

	if(mysqli_query($con, $strsql))
		header('location: file-maintain.php');
	else
		$err[] = 'ERROR:failed to delete';


		require('close-con.php');
}


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>remove PRODUCT</title>
</head>
<body>
	<h1>remove PRODUCT</h1>
	<hr>
	<p>Are you sure you want to remove this product?</p>
	<?php
	if (isset($recpersons)){
		echo '<li>Product:<b>'.$recpersons['name'].'</b></li>';
		echo '<li>description:<b>'.$recpersons['description']. '</b></li>';
		echo '<li>price:<b>'.$recpersons['price']. '<b/></li><br>';
		echo '<li>Photo1:<b>'.$recpersons['photo1']. '<b/></li><br>';
		echo '<li>Photo2:<b>'.$recpersons['photo2']. '<b/></li><br>';
	} 
	?>
	<form method="post">
		<a href="file-maintain.php">No</a>
		<input type="submit" name="btnremove" value="Yes">
	</form>
</body>
</html>