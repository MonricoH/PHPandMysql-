<?php 
$arrmonths = array('january','february','march','april','may','june','july','august','september','october','november','december');

?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/custom-login.css">
	<meta charset="utf-8">
	<title>Form automation</title>
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<select name="drpmonths" class="form-control">
			<?php 

			if(isset($arrmonths)){

				foreach ($arrmonths as $key => $value) {
					if($value == date('F'))
					echo '<Option value = "' . $value .'" selected>' . $value . '</Option>';
				else
					echo '<Option value = "' . $value .'">' . $value . '</Option>';
				}
			}

			 ?>
			


	</select>


	<select name="drpdays" class="form-control">

		<?php 

		for ($i=1; $i < 32; $i++) { 

			if($i == date('d'))
			echo '<Option value = "' . $i .'" selected>' . $i . '</Option>';
			else
			echo '<Option value = "' . $i .'">' . $i . '</Option>';
		}

		 ?>



<i class="fa-solid fa-shoe-prints"></i>

	</select>
	<button type="submit" class="btn btn-primary "><i class="fab fa-accessible-icon"></i>process</button><hr>
	
			</div>
		</div>
	</div>

<script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-replace-svg="nest"></script>
<script type="text/javascript" href="js/jquery-3.6.0.js.js"></script>
<script type="text/javascript" href="js/bootstrap.js"></script>
</body>
</html>