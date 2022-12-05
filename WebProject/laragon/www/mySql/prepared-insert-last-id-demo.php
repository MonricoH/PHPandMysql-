<?php

	require('open-connection.php');

	
	

	$str = 

		"INSERT INTO persons(lastname,firstname,sex,email)
		VALUES(?,?,?,?)
		";

		if ($stmt = mysqli_prepare($con, $str)) {
		mysqli_stmt_bind_param($stmt, "ssss" ,$lastname,$firstname,$sex,$email);


		$lastname = "haruno";
		$firstname =  "sakura";
		$sex = "femlae";
		$email = "sakuraharuna@gmail.com";
		mysqli_stmt_execute($stmt);
		$ids = mysqli_insert_id($con);
		echo 'the id is:' . $ids . '<br>';

		}
			
		else
			echo 'Error: Could not prepare Query '. $str;

		mysqli_stmt_close($stmt);
	require('close-connection.php');


?>