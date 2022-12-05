<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>basic contact form</title>
</head>
<body>
	<h2>Basic Contact Form</h20><hr>
	<form method="post" >
		<label for="txtname">Name: <sup style="color:red">*</sup></label><br>
		<input type="text" name="txtname" id="txtname" autofocus required><br>
		
		<label for="txtemail">email: <sup style="color:red">*</sup></label><br>
		<input type="email" name="txtemail" id="txtemail" required><br>

		<label for="txtsubject">subject: <sup style="color:red">*</sup></label><br>
		<input type="subject" name="txtsubject" id="txtsubject" required><br>


		<label for="txtmessage">message: <sup style="color:red">*</sup></label><br>
		<textarea name="txtmessage" id="txtmessage" rows="5" cols="30" required></textarea><br>

		<button type="submit" name="btnsend">send</button>
	</form>
	<hr>
	
	<?php if(isset($_REQUEST['btnsend'])): ?>

		<h2>Thankyou</h2>
		<p>Here is the information you have submited</p>

	<?php
	$name = $_REQUEST['txtname'];
	$email = $_REQUEST['txtemail'];
	$subject = $_REQUEST['txtsubject'];
	$message = $_REQUEST['txtmessage'];
	?>

	<ul>
		<li><b>Name:</b> <?php echo "$name"; ?></li>
		<li><b>Email:</b> <?php echo "$email"; ?></li>
		<li><b>Subject:</b> <?php echo "$subject"; ?></li>
		<li><b>Message:</b> <?php echo "$message"; ?></li>
	</ul>



	<?php endif; ?>



</body>
</html>