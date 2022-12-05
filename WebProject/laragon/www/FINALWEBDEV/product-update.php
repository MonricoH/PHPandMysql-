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



	
if (isset($_POST['btnedit'])) {
	$prdnameu = $_POST['txtname'];
	$prddesu	= $_POST['txtdescription'];
	$prdpriceu = $_POST['tentacles'];
	$prdphoto1u = $_POST['filephotoone'];
	$prdphoto2u = $_POST['filephototwo'];

	$err = [];
	if (empty($prdnameu))
		$err[] = "prdname is req";

	if(empty($prddesu))
		$err[] = "prddes is req";
	if(empty($prdpriceu))
		$err[] = "prdprice is address  is req";
	
	if (empty($err)) {
		require('open-con.php');

		$strsql = "UPDATE tbl_products SET
			 name = '$prdnameu',
			 description = '$prddesu',
			 price = '$prdpriceu',
			 photo1 = '$prdphoto1u',
			 photo2 = '$prdphoto2u'
			 WHERE id = ".$_SESSION['k'];

	if(mysqli_query($con, $strsql))
		header('location: file-maintain.php');
	else
		$err[] = 'ERROR:failed to update';


		require('close-con.php');
	}
}


?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>EDIT PRODUCT</title>
</head>
<body>
	<h1>EDIT PRODUCT</h1>
	<hr>
	<form method="post">
		

		<input type="text" name="txtname" id="txtname" value="<?php echo (isset($recpersons['name']) ? $recpersons['name'] : '') ;?>" placeholder="Name of product" required><br>
		<input type="text" name="txtdescription" id="txtdescription" value="<?php echo (isset($recpersons['description']) ? $recpersons['description'] : '') ;?>" placeholder="description" required><br>
		<label for="tentacles">price</label>
		<input type="number" id="tentacles" name="tentacles" value="<?php echo (isset($recpersons['price']) ? $recpersons['price'] : '') ;?>" min="1" max="10000"><br>
		<label for="filephotoone">Select a file</label>
		<input type="file" name="filephotoone" id="filephotoone" value="<?php echo (isset($recpersons['photo1']) ? $recpersons['photo1'] : '') ;?>"><br>
		<label for="filephototwo">Select a file</label>
		<input type="file" name="filephototwo" id="filephototwo" value="<?php echo (isset($recpersons['photo2']) ? $recpersons['photo2'] : '') ;?>"><br>
		
		<input type="submit" name="btnedit" value="Update Product">
		<a href="file-maintain.php">Cancel / Go Back</a>

	</form>






	
</body>
</html>