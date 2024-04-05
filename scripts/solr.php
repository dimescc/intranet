<a href="https://github.com/freedev/solr-import-export-json">Data Import/Export</a>

<?php
$suchstring =  $_GET ['suchstring'];
//$nachname = $_GET ['nachname'];
//$email =  $_GET ['email'];

$url_vn = "http://solr.dimes.cc/solr/gettingstarted/select?indent=true&q.op=OR&q=vorname:" . $suchstring . "&useParams=";
$url_sn = "http://solr.dimes.cc/solr/gettingstarted/select?indent=true&q.op=OR&q=nachname:" . $suchstring . "&useParams=";
$url_em = "http://solr.dimes.cc/solr/gettingstarted/select?indent=true&q.op=OR&q=email:" . $suchstring . "&useParams=";
//print "URL: " . $url_vn . "<br/>";


// Suche Vorname
$newCurlv = curl_init();
curl_setopt($newCurlv, CURLOPT_URL, $url_vn);
curl_setopt($newCurlv, CURLOPT_RETURNTRANSFER, true);
$outputv = curl_exec($newCurlv);
echo "<br>";
print "Ergebnis (Vorname): "; 
$posv = strrpos($outputv, "vorname");
print substr($outputv,$posv,-38);
echo "<br>";




// Suche Nachname
$newCurln = curl_init();
curl_setopt($newCurln, CURLOPT_URL, $url_sn);
curl_setopt($newCurln, CURLOPT_RETURNTRANSFER, true);
$outputn = curl_exec($newCurln);
echo "<br>";
print "Ergebnis (Nachname): ";
$posn = strrpos($outputn, "vorname");
print substr($outputn,$posn,-38);
echo "<br>";




// Suche email
$newCurle = curl_init();
curl_setopt($newCurle, CURLOPT_URL, $url_em);
curl_setopt($newCurle, CURLOPT_RETURNTRANSFER, true);
$outpute = curl_exec($newCurle);
echo "<br>";
print "Ergebnis (eMail): ";
$pose = strrpos($outpute, "vorname");
print substr($outpute,$pose,-38);
echo "<br><br><br>";


echo '<a href="http://www.dimes.cc/scripts/ssearch.php">Zurück</a>';
?>
