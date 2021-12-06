<!DOCTYPE html>
<html>

<head>
	<title>WTC Anmeldung</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<div class="header">
		<img src="logo.jfif">
		<div> Willkommen zur webconia Technology Conference 2021</div>
	</div>

	<div class="page">
		<form action="wtc-respond.php" method="post">
			<p>
				<label for="vorName">Vorname:</label>
				<input class="textinput" type="text" name="vor_name" id="vorName">
			</p>
			<p>
				<label for="nachName">Nachname:</label>
				<input class="textinput" type="text" name="nach_name" id="nachName">
			</p>
			<p>
				<label for="emailAddress">E-Mail:</label>
				<input class="textinput" type="text" name="email" id="emailAddress">
			</p>
			<p>
				<label for="firma">Firma:</label>
				<input class="textinput" type="text" name="Firma" id="firma">
			</p>
			<input class="button" type="submit" value="Registrieren">
		</form>
	</div>
</body>

</html>