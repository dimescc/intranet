<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>

<?php
    $servername = "10.1.2.209";
    $dbname = "guestbook";
    $username = "maria";
    $password = "S@lpetergasse10";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["firstname"]. " " . $row["lastname"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}



$statement = $conn->prepare("INSERT INTO MyGuests (firstname, lastname) VALUES (:firstname, :lastname)");
$statement->execute(array('firstname' => 'Klaus', 'lastname' => 'Neumann'));


$ergebnis = mysqli_query($conn, "SELECT firstname, lastname FROM MyGuests");
while($row = mysqli_fetch_object($ergebnis))
{
  echo $row->firstname;
  echo "<br />";
}



$conn->close();



    $server = "10.1.2.209";
    $datenbank = "gaestebuch";
    $username = "maria";
    $passwort = "S@lpetergasse10";

    $link = mysql_connect($server, $username, $passwort);

    if (!$link)
        {
        die("Konnte die Datenbank nicht öffnen.
             Fehlermeldung: ". mysql_error());
        }

    #### "Erfolgreich zur Datenbank verbunden ! ####

    $db = mysql_select_db($datenbank, $link);
    if (!$db)
        {
        echo "Konnte die Datenbank nicht auswählen.";
        }

    #### Datenbank ausgewählt, jetzt Gästebuch Programm ####
    echo "Gaestebuch DB verbunden";

    $ersteller = trim(strip_tags($_POST["ersteller"]));
    $titel = trim(strip_tags($_POST["titel"]));
    $beitrag = trim(strip_tags($_POST["beitrag"]));

    # Wurde das Formular ausgefüllt ?
    if (!empty($_POST["submit"]))
        {
        # Prüfen ob etwas fehlt
        if (empty($ersteller))    $_errors[] = "Name Fehlt.";
        if (empty($titel))        $_errors[] = "Titel fehlt.";
        if (empty($beitrag))    $_errors[] = "Beitrag fehlt.";

        # Sind Fehler im Array $_errors gespeichert ?
        if (count($_errors) > 0)
            {
            # Ja, Fehler vorhanden - anzeigen !
            foreach($_errors as $_error)
                {
                echo $_error . "<br>";
                }
            }
        else
            {
            # Nein, keine Fehler - Eintrag abspeichern
            $_sql = 'INSERT INTO gaestebuch
                     (ersteller,titel,beitrag,datum)
                       VALUES (
                     "'.mysql_real_escape_string($ersteller).'",
                     "'.mysql_real_escape_string($titel).'",
                     "'.mysql_real_escape_string($beitrag).'",
                     NOW());';

            mysql_query($_sql, $link);

            echo "<b>Danke für Ihren Eintrag.</b><br><br>";
            }
        }

?>
<b>Alle G&auml;stebucheintr&auml;ge:</b><br>
<br>



<?php
    $_sql = "SELECT * FROM gaestebuch ORDER BY datum ASC";
    $_res = mysql_query($_sql, $link);
    while ($row = mysql_fetch_array($_res, MYSQL_ASSOC))
        {
        echo "<hr>";
        echo "Eintrag Nummer: " . $row["id"];
        echo " von " . $row["ersteller"];
        echo " vom " . date("d.m.Y - H:i:s", strtotime($row["datum"]));
        echo "<br>Titel: " . $row["titel"];
        echo "<br>Text: ". str_replace("\n", "<br>", $row["beitrag"]);
        echo "<hr>";
        }
?>


<br><br>
<form action="gaestebuch.php" method="POST">
Ihr Name: <input name="ersteller" maxlength=30><br>
Titel des Beitrags: <input name="titel" maxlength=100><br>
Ihr G&auml;stebucheintrag:<br>
<textarea name="beitrag" rows=5 cols=50></textarea><br>
<input type="submit" name="submit" value="Eintragen">
</form>

<?php
    mysql_close($link);
?>

</body>
</html>
