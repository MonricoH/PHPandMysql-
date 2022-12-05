<?php

	require('open-connection.php');


	$str = 

		"INSERT INTO persons(lastname,firstname,sex,email)
		VALUES('iscaro','jus','Female','jusa@gmail.com')
		";



	if(mysqli_query($con, $str)){
		echo 'RECORD SUCESSFULLY ADDED!<br>';
		$ids = mysqli_insert_id($con);
		echo 'the id is:' .$ids;
	}
	else
		echo 'ERROR';


	require('close-connection.php');


?>