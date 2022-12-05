<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Input Types Demo</title>
</head>
<body>
	<form>
		<label for = "txtFirstName">First Name:</label>
		<input type="text" name="txtFirstName" id = "txtFirstName" autofocus required><br>
		<label for = "txtLastName">Last Name:</label>
		<input type="text" name="txtLastName" id = "txtLastName" ><br>

		<label for = "txtPassword">txt password:</label>
		<input type="password" name="txtPassword" id = "txtPassword" >

		<button type="submit">send</button>
		<input type="reset" name="">
		<br>
		
		<input type="radio" name="radmale" id="radmale" value="Male" checked="">
		<label for="radmale">Male</label>
		<br>	

		<input type="radio" name="radmale" id="feMale" value="feMale">
		<label for="feMale">feMale</label>
		<br>
		<input type="checkbox" name="chkBike" id = "chkBike" value="Biker">
		<label for="chkBike">I Have a Bike</label><br>
		<input type="checkbox" name="chkboat" id = "chkboat" value="boat">
		<label for="chkboat">I Have a boat</label><br>
		<input type="checkbox" name="chkcar" id = "chkcar" value="car">
		<label for="chkcar">I Have a car</label><br>
		<label for="clrTheme">pick color</label>
		<input type="color" name="clrTheme" id="clrTheme"><br>
		

		<label for="dtpBirthday">Birthday</label>
		<input type="date" name="dtpBirthday" id="dtpBirthday"><br>

		<label for="txtEmail">Email adress</label>
		<input type="Email" name="txtEmail"><br>

		<label for="filephoto">Select a file</label>
		<input type="file" name="filephoto" id="filephoto"><br>

		<label for="txtNumber">Enter QTY:</label>
		<input type="number" name="txtNumber" id="txtNumber" min="1" max="5"><br>
		<label for="txtVolume">Selec volume</label>
		<input type="range" name="txtVolume" id="txtVolume" min="0" max="50" step="20"><br>


		<label for="txttelephone">enter tel:</label>
		<input type="tel" name="txttelephone" id="txttelephone" pattern="[0-9]" ><br>
		
		<label for="txtTime">Selec Time</label>
		<input type="time" name="txtTime" id="txtTime" ><br>

		
		<label for="txturl">Selec url</label>
		<input type="url" name="txturl" id="txturl" ><br>
	</form>

</body>
</html>