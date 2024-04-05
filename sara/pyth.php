<!DOCTYPE html>
<html>
<head>
	<title>Pythagoras Rechner</title>
</head>
<body>

	<h2>Pythagoras Rechner</h2>

	<?php 
	if(isset($_POST['submit'])){
		$seiteA = $_POST['seiteA'];
		$seiteB = $_POST['seiteB'];
		$hypotenuse = sqrt(pow($seiteA,2) + pow($seiteB,2));
		echo "<p>Die Hypotenuse beträgt: $hypotenuse</p>";
	}
	?>

	<form method="post">
		<label for="seiteA">Seite a:</label>
		<input type="number" id="seiteA" name="seiteA" required>

		<label for="seiteB">Seite b:</label>
		<input type="number" id="seiteB" name="seiteB" required>

		<input type="submit" name="submit" value="Berechnen">
	</form>

</body>
</html>
