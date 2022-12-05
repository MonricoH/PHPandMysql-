<?php

	require('open-connection.php');

	/*$str = "
	//insert 1 rows
		INSERT INTO persons(lastname,firstname,sex,email)
		VALUES('Capiz','rachel','Female','rae@gmail.com')
	";*/

	//multiple

	$str = 

		"INSERT INTO persons(lastname,firstname,sex,email)
		VALUES('Sanchiz','carolina','Female','carolina@gmail.com'),('Samson','rossano','Male','rosano@gmail.com'),('wendell','dumlao','Male','wenzs@gmail.com')
		";



	if(mysqli_query($con, $str))
		echo 'RECORD SUCESSFULLY ADDED!';
	else
		echo 'ERROR';


	require('close-connection.php');


?>