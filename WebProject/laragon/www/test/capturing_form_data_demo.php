<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>form data</title>
</head>
<body>

	<form method="get" action="capturing_form_data_reciever_demo.php">
		<label for="txtFirstname">First Name</label>
		<input type="text" name="txtFirstname" id =txtFirstFirstname autofocus><br><br>
		<label for="txtLastname">Last Name</label>
		<input type="text" name="txtLastname" id =txtLastname><br><br>
		<input type="radio" name="radsex" id="radmale" value="Male" checked>
		<label for="radmale">Male</label>
		<input type="radio" name="radsex" id="radfemale" value="female">
		<label for="radfemale">Female</label><br>

		<button type="submit" name="btnsend">Send</button>
		


	</form>

</body>
</html>