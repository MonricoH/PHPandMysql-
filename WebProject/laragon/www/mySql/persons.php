
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Persons</title>
</head>
<body>
	<h2>Person List</h2>
	<hr>
	<table border="1" cellpadding="3" cellspacing="0" width="50%">
		<thead>
			<tr>
				<th>Full Name</th>
				<th>Sex</th>
				<th>Email Adress</th>
				<th>Update</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
	<?php  

			require_once('open-connection.php');
			$strsql = "SELECT * FROM persons ORDER BY sex"; //WHERE sex='Male'  ORDER BY lastname ORDER BY sex,lastname

			if ($rspersons = mysqli_query($con, $strsql)) {
				if (mysqli_num_rows($rspersons) > 0) {
					while($recpersons = mysqli_fetch_array($rspersons)){

						echo '<tr>';
							echo'<td>'.$recpersons['firstname'].' '. $recpersons['lastname'] .'</td>';
							echo'<td>'.$recpersons['sex'].'</td>';
							echo'<td>'.$recpersons['email'].'</td>';
							echo '<td align="center"><a href="update-person.php?k='. $recpersons['id'].'">Edit</a></td>';
							echo '<td align="center"><a href="delete-person.php?k='. $recpersons['id'].'">Remove</a></td>';
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



			require_once('close-connection.php');

	?>
			
		</tbody>
</table>

</body>
</html>



