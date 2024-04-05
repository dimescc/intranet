<?php
if(isset($_POST['sent'])) {
  $messages = [];
  echo '<br/>';
  $folderread = $_POST['folder'];
  //echo $_POST['folder'];
  //echo '</ul></div>';
  $befehl = "ls -la " .  $folderread;
  //echo $befehl;
  $output = shell_exec($befehl);
  echo "<pre>$output</pre>";
}
if(isset($_POST['sent2'])) {
  $messages = [];
  echo '<br/>';
  $befehlread = $_POST['befehl'];
  echo $befehlread;
  $output2 = shell_exec($befehlread);
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Lese Inhalt von Ordnern aus</title>
</head>

<body style="text-align:center;">
<h1 style="color:green;">Files @ Webserver</h1>

<form method="post">
  <ul>
      <label>Folder:
        <input name="folder" type="text" value="/usr/share/nginx/html" size="100" required>
      </label>
      <button name="sent" value="1">Check Folder Content</button><br/>
      <label>Befehl:
        <input name="befehl" type="text" value="python /usr/share/nginx/html/scripts/berechne.py > /tmp/test_output.txt;  cat /tmp/test_output.txt" size="100">
      </label>
      <button name="sent2" value="1">Führe Befehl aus</button>
  </ul>
</form>
