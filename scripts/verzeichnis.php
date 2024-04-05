
<!DOCTYPE html>
<html>
<body>
<br/>
<form action="upload.php" method="post" enctype="multipart/form-data">
  Select File to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload" name="submit">
</form>
<br/>
</body>
</html>


<?php
$buchstabe_alt = "";
$verzeichnis = openDir("/usr/share/nginx/html/downloads");
while ($file = readDir($verzeichnis)) {
 if ($file != "." && $file != "..") {
  $buchstabe = strtoUpper(mb_substr($file, 0, 1));
  if (!strstr($buchstabe_alt, $buchstabe)) {
   $buchstabe_alt .= $buchstabe;
   // Anfangsbuchstaben anzeigen
   echo '<strong>' . $buchstabe . '</strong> <br>';
  }
  echo '<a href="/downloads/' . $file . '">' . $file . '</a><br>';
 }
}
closeDir($verzeichnis);
?>
