<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php 
	 
	/*
	simple if
	 $grade = 200;

	 if($grade >74.4)
	 	echo 'Passed';
	 else
	 echo 'failed';*/


	 	/*
	 	ladderize if else
	 	$grade = 74.4;
	 	if($grade > 100)
	 		echo 'out of range!';
	 	elseif($grade > 74.4)
	 		echo 'passed';
	 	elseif($grade > 64.4)
	 		echo 'failed';
	 	else
	 		echo 'out of range!'*/



	 		/*
	nested if
	 		$sex = 'males';
	 		$age = 21;

	 		if($sex == 'Female'){
	 			if($age == 18)
	 				echo 'Debutant';
	 			else
	 				echo 'not debutan';
	 		}
	 		elseif($sex == 'male'){
	 			if($age == 21)
	 				echo 'Debutant';
	 			else
	 				echo 'not debutan';
	 		}
	 		else
	 			echo 'invalid sex';*/


	 		/*
	landerize if with logical operator
	 		$sex = 'female';
	 		$age = 18;

	 		if($sex == 'female' && $age == 18)
	 		echo 'debutant';
	 		elseif($sex == 'male' && $age == 21)
	 		echo 'debutant';
	 		else
	 			echo 'not debutant';*/

	 			/*$colorcode = 'B';
	 			if(strtoupper($colorcode) == 'r')
	 				echo 'red';
	 			elseif(strtoupper($colorcode) == 'g')
	 			echo 'green';
	 			elseif(strtoupper($colorcode) == 'b')
	 			echo 'blue';
	 			elseif(strtoupper($colorcode) == 'y')
	 			echo 'yellow';

	 		else
	 			echo 'unknown color'*/



	 			$colorcode = 'b';

	 			switch (strtoupper($colorcode)){
	 				case 'R':
	 					echo 'Red';
	 					break;
	 					case 'G':
	 					echo 'Green';
	 					break;
	 					case 'B':
	 					echo 'Blue';
	 					break;
	 					case 'Y':
	 					echo 'Yellow';
	 					break;
	 					default:
	 					echo 'Unkown Statement';
	 			}



	?>


</body>
</html>