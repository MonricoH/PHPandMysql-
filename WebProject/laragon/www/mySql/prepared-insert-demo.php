<?php

	require('open-connection.php');

	
	

	$str = 

		"INSERT INTO persons(lastname,firstname,sex,email)
		VALUES(?,?,?,?)
		";

		if ($stmt = mysqli_prepare($con, $str)) {
		mysqli_stmt_bind_param($stmt, "ssss" ,$lastname,$firstname,$sex,$email);


		$lastname = "Penduko";
		$firstname =  "Pedro";
		$sex = "Male";
		$email = "Pedropenduko@gmail.com";

		mysqli_stmt_execute($stmt);

		echo 'RECORD SUCESSFULLY ADDED!';

		}
			
		else
			echo 'Error: Could not prepare Query '. $str;

		mysqli_stmt_close($stmt);
	require('close-connection.php');


?>