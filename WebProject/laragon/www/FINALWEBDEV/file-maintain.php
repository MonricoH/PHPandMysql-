<?php  
if (isset($_POST['btnadd'])) {
$prdname = htmlspecialchars($_POST['txtname']);
$prddes = htmlspecialchars($_POST['txtdescription']);
$prdprice = $_POST['tentacles'];
$prdphoto1 = $_POST['filephotoone'];
$prdphoto2= $_POST['filephototwo'];


  $err = [];
  if (empty($prdname))
    $err[] = "Lastnq";

  if(empty($prddes))
    $err[] = "firstname is req";
  if(empty($prdprice))
    $err[] = "email is address  is req";
  
  if (empty($err)) {
    require('open-con.php');

    $strsql = "
      INSERT INTO tbl_products (name,description,price,photo1,photo2)
      VALUES ('$prdname','$prddes','$prdprice','$prdphoto1','$prdphoto2')
    ";

  if(mysqli_query($con, $strsql))
    header('location: file-maintain.php');
  else
    $err[] = 'ERROR';


    require('close-con.php');
  }
}
?>







<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>LEARN IT EASY</title>
</head>
<body>
	<h1>ADD PRODUCT</h1>
	<hr>
	<form method="post">
		<input type="text" name="txtname" id="txtname" placeholder="Name of product" required><br>
		<input type="text" name="txtdescription" id="txtdescription" placeholder="description" required><br>
		<label for="tentacles">price</label>
		<input type="number" id="tentacles" name="tentacles" min="1" max="10000"><br>
		<label for="filephotoone">Select a file</label>
		<input type="file" name="filephotoone" id="filephotoone"><br>
		<label for="filephototwo">Select a file</label>
		<input type="file" name="filephototwo" id="filephototwo"><br>



		<input type="submit" name="btnadd" value="add product">
		
	</form>


<h2>Product</h2>
	<hr>
	<table border="1" cellpadding="3" cellspacing="0" width="50%">
		<thead>
			<tr>
				<th>Name of product</th>
				<th>description</th>
				<th>price</th>
				<th>Photo1</th>
				<th>Photo2</th>
				<th>Update</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
		<?php  

			require('open-con.php');
			$strsql = "SELECT * FROM tbl_products "; //WHERE sex='Male'  ORDER BY lastname ORDER BY sex,lastname

			if ($rspersons = mysqli_query($con, $strsql)) {
				if (mysqli_num_rows($rspersons) > 0) {
					while($recpersons = mysqli_fetch_array($rspersons)){

						echo '<tr>';
							echo'<td>'.$recpersons['name'].'</td>';
							echo'<td>'.$recpersons['description'].'</td>';
							echo'<td>'.$recpersons['price'].'</td>';
							echo'<td>'.$recpersons['photo1'].'</td>';
							echo'<td>'.$recpersons['photo2'].'</td>';
							echo '<td align="center"><a href="product-update.php?k='. $recpersons['id'].'">Edit</a></td>';
							echo '<td align="center"><a href="product-delete.php?k='. $recpersons['id'].'">Remove</a></td>';
						echo'</tr>';
					}
					
					
				mysqli_free_result($rspersons);

				}
				else{
					echo '<tr>';
							echo '<td colspan="3" align="center">no record found!</td>';
					echo'</tr>';
					}
			}
			else
				echo 'Error could not execute yor req';



			require('close-con.php');

	?>
			
		</tbody>
</table><br><br>



<h2>Change Password</h2>
<form method="post">
	<input type="password" name="np">
	<input type="submit" name="btnedit" value="Change">
</form><br>
<a href="index.php">Go Back</a>

<?php  
require_once('open-con.php');



if (isset($_POST['btnedit'])) {

		require('open-con.php');
		$prdnameu = $_POST['np'];
		$prdnameu = htmlspecialchars($_POST['np']);
		$prdnameu = stripcslashes($prdnameu);
		$prdnameu = mysqli_real_escape_string($con, $prdnameu);
	
		$prdnameu = md5($prdnameu);


		$strsql = "UPDATE tbl_user SET
			 password = '$prdnameu'
			 WHERE userId =1";

	if(mysqli_query($con, $strsql))
		header('location: http://localhost/FINALWEBDEV');
	else
		$err[] = 'ERROR:failed to update';


		require('close-con.php');
	
}






?>

</body>
</html>

