<!DOCTYPE html>
<html>
<head>
<title>Drück mich Test</title>
</head>

<body style="text-align:center;">
<h1 style="color:green;">
Thomas @ Work</h1>

<h4>
     Call a PHP functions
</h4>


<?php
if(array_key_exists('button1', $_POST)) {
    button1();
}
else if(array_key_exists('button2', $_POST)) {
    button2();
}

echo "<p>Hier ist eine HTML Ausgabe</p>";
$vorname = $_POST['name'];
function button1() {
    echo "Button gedrückt von ";
    echo $vorname;
    echo "<p>HTML in der Funktion</p>";
}

?>

Name:
<input type="text" name="name"></input>
<form method="post">
<input type="submit" name="button1" class="button" value="Drücke" />
</form>

</body>
</html>
